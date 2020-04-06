<?php

namespace {PACKAGE}\{MODULE}\App\Http\Controllers\Admin;

use {PACKAGE}\{MODULE}\App\Basecode\Classes\Permissions\{MODULE}Permission as Permission;
use {PACKAGE}\{MODULE}\App\Basecode\Classes\Repositories\{MODULE}Repository as Repository;
use Zombata\Core\Controllers\Admin\BackendController;


class {CONTROLLER} extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

}
