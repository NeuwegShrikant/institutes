<?php

namespace Backend\Institute\App\Http\Controllers\Admin;

use Backend\Institute\App\Basecode\Classes\Permissions\InstitutePermission as Permission;
use Backend\Institute\App\Basecode\Classes\Queries\InstituteQuery as Repository;
use Zombata\Core\Controllers\Admin\BackendController;


class InstituteController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

}
