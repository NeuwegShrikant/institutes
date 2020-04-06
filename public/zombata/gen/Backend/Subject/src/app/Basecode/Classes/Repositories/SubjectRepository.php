<?php

namespace Backend\Subject\App\Basecode\Classes\Repositories;

use Backend\Subject\App\Subject;
use Zombata\Core\Repositories\Repository;

class SubjectRepository extends Repository {

    public $viewIndex = 'ModuleViewSubject::admin.Subject.index';
    public $viewCreate = 'ModuleViewSubject::admin.Subject.create';
    public $viewEdit = 'ModuleViewSubject::admin.Subject.edit';
    public $viewShow = 'ModuleViewSubject::admin.Subject.show';
    public $viewForm = 'ModuleViewSubject::admin.Subject.form';

    public $routeIndex = 'admin.modules.subjects.index';
    public $routeCreate = 'admin.modules.subjects.create';
    public $routeStore = 'admin.modules.subjects.store';
    public $routeEdit = 'admin.modules.subjects.edit';
    public $routeUpdate = 'admin.modules.subjects.update';
    public $routeShow = 'admin.modules.subjects.show';
    public $routeDelete = 'admin.modules.subjects.destroy';

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = Subject::class;

}
