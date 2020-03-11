<?php 

namespace App\Basecode\Classes\Repositories;

class CategoryRepository extends Repository
{
	public $model = 'App\Category';

	public $viewIndex = 'admin.masters.categories.index';
    public $viewCreate = 'admin.masters.categories.create';
    public $viewEdit = 'admin.masters.categories.edit';
    public $viewShow = 'admin.masters.categories.show';

    public $storeValidateRules = [
    	'title' => 'required|unique:categories,title'
    ];
    public $updateValidateRules = [
    	'title' => 'required|unique:categories,title'
    ];

    public function save( $attrs ) {

        $attrs = $this->getValueArray($attrs);
        $attrs['tag'] = str_slug(\request('title'), '_');

        $model = new $this->model;
        $model->fill($attrs);
        $model->save();
        return $model;
    }
	
}