<?php

namespace App\Basecode\Classes\Repositories;


class SubjectRepository extends Repository
{
	public $model = 'App\Subject';

	public $viewIndex = 'admin.masters.subjects.index';
    public $viewCreate = 'admin.masters.subjects.create';
    public $viewEdit = 'admin.masters.subjects.edit';
    public $viewShow = 'admin.masters.subjects.show';

    public $storeValidateRules = [
    	'name' => 'required|unique:subjects,name'
    ];
    
    public $updateValidateRules = [
    	'name' => 'required|unique:subjects,name'
    ];

    
    
}