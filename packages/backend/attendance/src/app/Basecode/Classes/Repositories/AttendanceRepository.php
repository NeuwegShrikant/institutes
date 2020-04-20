<?php

namespace Backend\Attendance\App\Basecode\Classes\Repositories;

use Backend\Attendance\App\Attendance;
use Backend\Batch\App\Batch;
use Zombata\Core\Repositories\Repository;

class AttendanceRepository extends Repository {

    public $viewIndex = 'ModuleViewAttendance::admin.Attendance.index';
    public $viewCreate = 'ModuleViewAttendance::admin.Attendance.create';
    public $viewEdit = 'ModuleViewAttendance::admin.Attendance.edit';
    public $viewShow = 'ModuleViewAttendance::admin.Attendance.show';
    public $viewForm = 'ModuleViewAttendance::admin.Attendance.form';
    public $viewStudentList = 'ModuleViewAttendance::admin.Attendance.studentList';

    public $routeIndex = 'admin.modules.attendances.index';
    public $routeCreate = 'admin.modules.attendances.create';
    public $routeStore = 'admin.modules.attendances.store';
    public $routeEdit = 'admin.modules.attendances.edit';
    public $routeUpdate = 'admin.modules.attendances.update';
    public $routeShow = 'admin.modules.attendances.show';
    public $routeDelete = 'admin.modules.attendances.destroy';

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = Attendance::class;


    public  function save($attrs)
    {
        $attrs = $this->getValueArray($attrs);

        $batchModel = Batch::find(\request('batch_id'));

        $studentIds = $batchModel->studentsRel()->pluck('student_id')->toArray();
        
        foreach ($studentIds as $studentId) {
            $fill = [];
            $model = new $this->model;

            if(in_array($studentId, $attrs['student_id'])) $fill['status'] = 1;

            $fill['batch_id'] = $attrs['batch_id'];
            $fill['student_id'] = $studentId;

            $model->fill($fill);
            $model->save();
        }

    }
}
