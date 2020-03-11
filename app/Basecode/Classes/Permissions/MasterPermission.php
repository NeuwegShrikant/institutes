<?php

namespace App\Basecode\Classes\Permissions;

class MasterPermission extends Permission
{
	
	public function index() {
        return $this->checkAuthNPer('list_master');
    }

    public function create() {
        return $this->checkAuthNPer('add_master');
    }

    public function edit() {
        return $this->checkAuthNPer('edit_master');
    }

    public function destroy() {
        return $this->checkAuthNPer('delete_master');
    }
}