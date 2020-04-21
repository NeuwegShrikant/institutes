<?php

namespace Backend\Fee\App\Http\Controllers\Admin;

use Backend\Fee\App\Basecode\Classes\Permissions\FeePermission as Permission;
use Backend\Fee\App\Basecode\Classes\Repositories\FeeRepository as Repository;
use Zombata\Core\Controllers\Admin\BackendController;
use Backend\Batch\App\Batch;

class FeeController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

    public function studentList() {

        $collection = [];
        $month = !\request('month') ? date('F') : \request('month');

        if(!\request('batchId')) return view($this->repository->viewStudentList, ['collection' => $collection ]);

        $model = Batch::where('id', \request('batchId'))->first();

        if(!$model) return view($this->repository->viewStudentList, ['collection' => $collection ]);

        $studentIds = $this->repository->getCollection()
            ->where('batch_id', \request('batchId'))
            ->where('month', $month)
            ->pluck('student_id')->toArray();

        $collection = $model->studentsRel()->whereNotIn('student_id', $studentIds)->get();

        if(!$collection) $collection = [];

        return view($this->repository->viewStudentList, ['collection' => $collection ]);

    }
}
