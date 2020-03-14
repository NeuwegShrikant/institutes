<?php

namespace Backend\Teacher\App\Basecode\Classes\Repositories;

use Backend\Teacher\App\Teacher;
use Zombata\Core\Repositories\Repository;

class TeacherRepository extends Repository {

    public $viewIndex = 'ModuleViewTeacher::admin.Teacher.index';
    public $viewCreate = 'ModuleViewTeacher::admin.Teacher.create';
    public $viewEdit = 'ModuleViewTeacher::admin.Teacher.edit';
    public $viewShow = 'ModuleViewTeacher::admin.Teacher.show';
    public $viewForm = 'ModuleViewTeacher::admin.Teacher.form';

    public $routeIndex = 'admin.modules.teacher.index';
    public $routeCreate = 'admin.modules.teacher.create';
    public $routeStore = 'admin.modules.teacher.store';
    public $routeEdit = 'admin.modules.teacher.edit';
    public $routeUpdate = 'admin.modules.teacher.update';
    public $routeShow = 'admin.modules.teacher.show';
    public $routeDelete = 'admin.modules.teacher.destroy';

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = Teacher::class;

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
        $model->parent_id = auth()->user()->id;
        $model->save();
        return $model;
    }

    public function getCollection($withFilters = true) {
        $model = new $this->model;
        $model = $model->where('type', \App\User::TEACHER);
        return $model;
    }

}
