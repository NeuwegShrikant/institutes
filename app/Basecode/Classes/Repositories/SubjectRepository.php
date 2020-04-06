<?php

namespace App\Basecode\Classes\Repositories;


use Backend\Subject\App\Subject;

class SubjectRepository extends Repository
{

	public $viewIndex = 'admin.masters.subjects.index';
    public $viewCreate = 'admin.masters.subjects.create';
    public $viewEdit = 'admin.masters.subjects.edit';
    public $viewShow = 'admin.masters.subjects.show';

    public $storeValidateRules = [
    	'title' => 'required|unique:subjects,title'
    ];

    public $updateValidateRules = [
    	'title' => 'required|unique:subjects,title'
    ];

    public $model = Subject::class;

}
