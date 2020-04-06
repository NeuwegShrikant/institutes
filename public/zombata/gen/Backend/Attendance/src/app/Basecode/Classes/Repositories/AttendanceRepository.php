<?php

namespace Backend\Attendance\App\Basecode\Classes\Repositories;

use Backend\Attendance\App\Attendance;
use Zombata\Core\Repositories\Repository;

class AttendanceRepository extends Repository {

    public $viewIndex = 'ModuleViewAttendance::admin.Attendance.index';
    public $viewCreate = 'ModuleViewAttendance::admin.Attendance.create';
    public $viewEdit = 'ModuleViewAttendance::admin.Attendance.edit';
    public $viewShow = 'ModuleViewAttendance::admin.Attendance.show';
    public $viewForm = 'ModuleViewAttendance::admin.Attendance.form';

    public $routeIndex = 'admin.modules.attendance.index';
    public $routeCreate = 'admin.modules.attendance.create';
    public $routeStore = 'admin.modules.attendance.store';
    public $routeEdit = 'admin.modules.attendance.edit';
    public $routeUpdate = 'admin.modules.attendance.update';
    public $routeShow = 'admin.modules.attendance.show';
    public $routeDelete = 'admin.modules.attendance.destroy';

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = Attendance::class;

}
