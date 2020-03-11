<?php

namespace App\Basecode\Classes\Permissions;

class CategoryPermission extends Permission
{
	
	public function index() {
        return true;
    }

    public function create() {
        return true;
    }

    public function edit() {
        return true;
    }

    public function destroy() {
        return true;
    }
}