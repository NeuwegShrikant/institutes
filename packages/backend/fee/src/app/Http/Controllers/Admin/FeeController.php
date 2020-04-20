<?php

namespace Backend\Fee\App\Http\Controllers\Admin;

use Backend\Fee\App\Basecode\Classes\Permissions\FeePermission as Permission;
use Backend\Fee\App\Basecode\Classes\Repositories\FeeRepository as Repository;
use Zombata\Core\Controllers\Admin\BackendController;


class FeeController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

}
