<?php

namespace Backend\Subject\App\Http\Controllers\Admin;

use Backend\Subject\App\Basecode\Classes\Permissions\SubjectPermission as Permission;
use Backend\Subject\App\Basecode\Classes\Repositories\SubjectRepository as Repository;
use Zombata\Core\Controllers\Admin\BackendController;


class SubjectController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

}
