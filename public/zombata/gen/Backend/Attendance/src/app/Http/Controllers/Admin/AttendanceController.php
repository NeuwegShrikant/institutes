<?php

namespace Backend\Attendance\App\Http\Controllers\Admin;

use Backend\Attendance\App\Basecode\Classes\Permissions\AttendancePermission as Permission;
use Backend\Attendance\App\Basecode\Classes\Repositories\AttendanceRepository as Repository;
use Zombata\Core\Controllers\Admin\BackendController;


class AttendanceController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

}
