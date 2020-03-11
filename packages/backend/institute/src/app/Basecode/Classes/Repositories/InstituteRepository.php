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

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = Institute::class;

}
