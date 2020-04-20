<?php

namespace Backend\Student\App\Basecode\Classes\Repositories;

use Backend\Student\App\Student;
use Zombata\Core\Repositories\Repository;

class StudentRepository extends Repository {

    public $viewIndex = 'ModuleViewStudent::admin.Student.index';
    public $viewCreate = 'ModuleViewStudent::admin.Student.create';
    public $viewEdit = 'ModuleViewStudent::admin.Student.edit';
    public $viewShow = 'ModuleViewStudent::admin.Student.show';
    public $viewForm = 'ModuleViewStudent::admin.Student.form';

    public $routeIndex = 'admin.modules.students.index';
    public $routeCreate = 'admin.modules.students.create';
    public $routeStore = 'admin.modules.students.store';
    public $routeEdit = 'admin.modules.students.edit';
    public $routeUpdate = 'admin.modules.students.update';
    public $routeShow = 'admin.modules.students.show';
    public $routeDelete = 'admin.modules.students.destroy';

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = Student::class;

    public  function save($attrs)
    {
        $attrs = $this->getValueArray($attrs);

        $model = new $this->model;
        $model->fill($attrs);
        $model->save();

        $batches = \request('batch_id');
        $fee = \request('fee');

        foreach($batches as $index => $batchId) {
            $model->batchesRel()->sync([ $batchId => [
                'fee' => $fee[$index]
            ] ]);
        }
    }

}
