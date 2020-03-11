<?php 

namespace App\Basecode\Classes\Repositories;

class ClassRepository extends Repository
{
	public $model = 'App\Standard';

	public $viewIndex = 'admin.masters.classes.index';
    public $viewCreate = 'admin.masters.classes.create';
    public $viewEdit = 'admin.masters.classes.edit';
    public $viewShow = 'admin.masters.classes.show';

    public $storeValidateRules = [
    	'title' => 'required|unique:standards,title',
    	'standard' => 'required|unique:standards,standard',
    	'roman' => 'required|unique:standards,roman'
    ];
    public $updateValidateRules = [
    	'title' => 'required|unique:standards,title',
    	'standard' => 'required|unique:standards,standard',
    	'roman' => 'required|unique:standards,roman'
    ];

    public function getCollection($withFilters = true) {
        $model = new $this->model;
        $model = $model->orderBy('roman', 'asc');
        return $model;
    }
	
}