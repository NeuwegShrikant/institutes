<?php

namespace Backend\Classes\App\Basecode\Classes\Repositories;

use Backend\Classes\App\Classes;
use Zombata\Core\Repositories\Repository;

class ClassesRepository extends Repository {

    public $viewIndex = 'ModuleViewClasses::admin.Classes.index';
    public $viewCreate = 'ModuleViewClasses::admin.Classes.create';
    public $viewEdit = 'ModuleViewClasses::admin.Classes.edit';
    public $viewShow = 'ModuleViewClasses::admin.Classes.show';
    public $viewForm = 'ModuleViewClasses::admin.Classes.form';

    public $routeIndex = 'admin.modules.classes.index';
    public $routeCreate = 'admin.modules.classes.create';
    public $routeStore = 'admin.modules.classes.store';
    public $routeEdit = 'admin.modules.classes.edit';
    public $routeUpdate = 'admin.modules.classes.update';
    public $routeShow = 'admin.modules.classes.show';
    public $routeDelete = 'admin.modules.classes.destroy';

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = Classes::class;

}
