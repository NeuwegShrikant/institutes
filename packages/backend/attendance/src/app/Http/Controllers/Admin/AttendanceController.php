<?php

namespace Backend\Attendance\App\Http\Controllers\Admin;

use Backend\Attendance\App\Basecode\Classes\Permissions\AttendancePermission as Permission;
use Backend\Attendance\App\Basecode\Classes\Repositories\AttendanceRepository as Repository;
use Backend\Batch\App\Batch;
use Illuminate\Http\Request;
use Zombata\Core\Controllers\Admin\BackendController;


class AttendanceController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        if(! $this->permission->create() ) return noAuth();;

        $request->validate( getValidationRules($this->repository->storeValidateRules), $this->repository->storeValidateRulesMsg );

        $batchModel = Batch::find(\request('batch_id'));

        if(!$batchModel) return $this->repository->redirectBackWithErrors('Bad Request.');

        $collection = $this->repository->getCollection()->where('batch_id', \request('batch_id'))->whereDate('created_at', date('Y-m-d'))->get();

        if(count($collection)) return $this->repository->redirectBackWithErrors('Already make attendance');

        $this->repository->save($this->repository->getAttrs());

        return $this->repository->redirectBackWithSuccess($this->repository->create_msg);

    }

    public function studentList() {
        $collection = [];

        if(!\request('batchId')) return view($this->repository->viewStudentList, ['collection' => $collection ]);

        $model = Batch::where('id', \request('batchId'))->first();

        if(!$model) return view($this->repository->viewStudentList, ['collection' => $collection ]);

        $collection = $model->studentsRel;

        if(!$collection) $collection = [];

        return view($this->repository->viewStudentList, ['collection' => $collection ]);

    }
}
