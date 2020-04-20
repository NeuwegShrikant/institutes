<?php

namespace Backend\Course\App\Http\Controllers\Admin;

use Backend\Course\App\Basecode\Classes\Permissions\CoursePermission as Permission;
use Backend\Course\App\Basecode\Classes\Repositories\CourseRepository as Repository;
use Zombata\Core\Controllers\Admin\BackendController;


class CourseController extends BackendController {

    public $repository, $permission;

    public function __construct( Repository $repository, Permission $permission ) {
        $this->repository = $repository;
        $this->permission = $permission;
        parent::__construct( $repository, $permission );
    }

}
