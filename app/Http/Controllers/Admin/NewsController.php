<?php

namespace App\Http\Controllers\Admin;

use App\Basecode\Classes\Repositories\NewsRepository as Repository;
use App\Basecode\Classes\Permissions\NewsPermission as Permission;

class NewsController extends BackendController
{
    public $repository, $permission;

	function __construct(Repository $repository, Permission $permission) {
		$this->repository = $repository;
		$this->permission = $permission;
	}
}
