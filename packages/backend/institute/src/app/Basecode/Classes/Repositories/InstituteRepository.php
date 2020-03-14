<?php

namespace Backend\Institute\App\Basecode\Classes\Repositories;

use Backend\Institute\App\Institute;
use Zombata\Core\Repositories\Repository;

class InstituteRepository extends Repository {

    public $viewIndex = 'ModuleViewInstitute::admin.Institute.index';
    public $viewCreate = 'ModuleViewInstitute::admin.Institute.create';
    public $viewEdit = 'ModuleViewInstitute::admin.Institute.edit';
    public $viewShow = 'ModuleViewInstitute::admin.Institute.show';
    public $viewForm = 'ModuleViewInstitute::admin.Institute.form';

    public $routeIndex = 'admin.modules.institutes.index';
    public $routeCreate = 'admin.modules.institutes.create';
    public $routeStore = 'admin.modules.institutes.store';
    public $routeEdit = 'admin.modules.institutes.edit';
    public $routeUpdate = 'admin.modules.institutes.update';
    public $routeShow = 'admin.modules.institutes.show';
    public $routeDelete = 'admin.modules.institutes.destroy';

    public $storeValidateRules = [
        'name' => 'required',
    ];
    public $updateValidateRules = [];

    public $model = Institute::class;

     public function save( $attrs ) {

        $attrs = $this->getValueArray($attrs);
        
        if( $pass = request('password') ) {
            $attrs['password'] = bcrypt($pass);
        } elseif( array_key_exists('password', $attrs) ) {
            unset($attrs['password']);
        }

        $model = new $this->model;
        $model->fill($attrs);
        $model->save();

        $model->type = \App\User::INSTITUTE;
        $model->save();
        return $model;
    }

    public function getCollection($withFilters = true) {
        $model = new $this->model;
        $model = $model->where('type', \App\User::INSTITUTE);
        return $model;
    }
}
