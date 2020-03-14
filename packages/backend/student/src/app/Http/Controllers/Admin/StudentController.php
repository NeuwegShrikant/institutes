<?php

namespace Backend\Student\App\Http\Controllers\Admin;

use Backend\Student\App\Basecode\Classes\Permissions\StudentPermission as Permission;
use Backend\Student\App\Basecode\Classes\Repositories\StudentRepository as Repository;
use Zombata\Core\Controllers\Admin\BackendController;


class StudentController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

}
