<?php

namespace Backend\Teacher\App\Http\Controllers\Admin;

use Backend\Teacher\App\Basecode\Classes\Permissions\TeacherPermission as Permission;
use Backend\Teacher\App\Basecode\Classes\Repositories\TeacherRepository as Repository;
use Zombata\Core\Controllers\Admin\BackendController;


class TeacherController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

}
