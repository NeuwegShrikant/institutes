<?php

namespace App\Http\Controllers\Admin;

use App\Basecode\Classes\Repositories\SectionRepository as Repository;
use App\Basecode\Classes\Permissions\Permission as Permission;

class SectionController extends BackendController
{
    public $repository, $permission;

	function __construct(Repository $repository, Permission $permission) {
		$this->repository = $repository;
		$this->permission = $permission;
	}
}
