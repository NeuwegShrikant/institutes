<?php

namespace App\Basecode\Classes\Repositories;

class SectionRepository extends Repository
{
	public $model = 'App\Section';

	public $viewIndex = 'admin.masters.sections.index';
    public $viewCreate = 'admin.masters.sections.create';
    public $viewEdit = 'admin.masters.sections.edit';
    public $viewShow = 'admin.masters.sections.show';

    public $storeValidateRules = [
    	'section' => 'required|unique:sections,section'
    ];
    public $updateValidateRules = [
    	'section' => 'required|unique:sections,section'
    ];

    public function getCollection($withFilters = true) {
        $model = new $this->model;
        $model = $model->orderBy('section', 'asc');
        return $model;
    }

}