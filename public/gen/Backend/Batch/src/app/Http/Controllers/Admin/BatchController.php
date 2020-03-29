<?php

namespace Backend\Batch\App\Http\Controllers\Admin;

use Backend\Batch\App\Basecode\Classes\Permissions\BatchPermission as Permission;
use Backend\Batch\App\Basecode\Classes\Repositories\BatchRepository as Repository;
use Zombata\Core\Controllers\Admin\BackendController;


class BatchController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

}
