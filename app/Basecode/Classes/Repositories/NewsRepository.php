<?php 

namespace App\Basecode\Classes\Repositories;

class NewsRepository extends Repository {

	public $model = 'App\News';

	public $viewIndex = 'admin.news.index';
    public $viewCreate = 'admin.news.create';
    public $viewEdit = 'admin.news.edit';
    public $viewShow = 'admin.news.show';

    public $storeValidateRules = [
    	
    ];
    public $updateValidateRules = [
    	
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