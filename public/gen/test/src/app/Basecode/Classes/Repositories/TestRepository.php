<?php

namespace {PACKAGE}\{MODULE}\App\Basecode\Classes\Repositories;

use {PACKAGE}\{MODULE}\App\{MODEL};
use Zombata\Core\Repositories\Repository;

class {MODULE}Repository extends Repository {

    public $viewIndex = 'ModuleView{VIEW}::admin.{VIEW}.index';
    public $viewCreate = 'ModuleView{VIEW}::admin.{VIEW}.create';
    public $viewEdit = 'ModuleView{VIEW}::admin.{VIEW}.edit';
    public $viewShow = 'ModuleView{VIEW}::admin.{VIEW}.show';
    public $viewForm = 'ModuleView{VIEW}::admin.{VIEW}.form';

    public $routeIndex = 'admin.modules.{ROUTE}.index';
    public $routeCreate = 'admin.modules.{ROUTE}.create';
    public $routeStore = 'admin.modules.{ROUTE}.store';
    public $routeEdit = 'admin.modules.{ROUTE}.edit';
    public $routeUpdate = 'admin.modules.{ROUTE}.update';
    public $routeShow = 'admin.modules.{ROUTE}.show';
    public $routeDelete = 'admin.modules.{ROUTE}.destroy';

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = {MODEL}::class;

}
