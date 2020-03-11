<?php

namespace App\Basecode\Classes\Repositories;


class SessionRepository extends Repository
{
	public $model = 'App\Session';

	public $viewIndex = 'admin.masters.sessions.index';
    public $viewCreate = 'admin.masters.sessions.create';
    public $viewEdit = 'admin.masters.sessions.edit';
    public $viewShow = 'admin.masters.sessions.show';

    public $storeValidateRules = [
    	'start_year' => 'required|unique:sessions,start_year',
    	'end_year' => 'required|unique:sessions,end_year'
    ];
    public $updateValidateRules = [
    	'start_year' => 'required|unique:sessions,start_year',
    	'end_year' => 'required|unique:sessions,end_year'
    ];

    public function getCollection($withFilters = true) {
        $model = new $this->model;
        $model = $model->orderBy('start_year', 'asc');
        return $model;
    }
}