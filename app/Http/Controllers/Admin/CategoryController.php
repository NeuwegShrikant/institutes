<?php

namespace App\Http\Controllers\Admin;

use App\Basecode\Classes\Repositories\CategoryRepository as Repository;
use App\Basecode\Classes\Permissions\CategoryPermission as Permission;

class CategoryController extends BackendController
{
    public $repository, $permission;

	function __construct(Repository $repository, Permission $permission) {
		$this->repository = $repository;
		$this->permission = $permission;
	}
}
