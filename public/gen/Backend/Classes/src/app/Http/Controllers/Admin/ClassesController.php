<?php

namespace Backend\Classes\App\Http\Controllers\Admin;

use Backend\Classes\App\Basecode\Classes\Permissions\ClassesPermission as Permission;
use Backend\Classes\App\Basecode\Classes\Repositories\ClassesRepository as Repository;
use Zombata\Core\Controllers\Admin\BackendController;


class ClassesController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

}
