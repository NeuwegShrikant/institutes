<?php

namespace Backend\Fee\App\Basecode\Classes\Repositories;

use Backend\Fee\App\Fee;
use Zombata\Core\Repositories\Repository;

class FeeRepository extends Repository {

    public $viewIndex = 'ModuleViewFee::admin.Fee.index';
    public $viewCreate = 'ModuleViewFee::admin.Fee.create';
    public $viewEdit = 'ModuleViewFee::admin.Fee.edit';
    public $viewShow = 'ModuleViewFee::admin.Fee.show';
    public $viewForm = 'ModuleViewFee::admin.Fee.form';

    public $routeIndex = 'admin.modules.fee.index';
    public $routeCreate = 'admin.modules.fee.create';
    public $routeStore = 'admin.modules.fee.store';
    public $routeEdit = 'admin.modules.fee.edit';
    public $routeUpdate = 'admin.modules.fee.update';
    public $routeShow = 'admin.modules.fee.show';
    public $routeDelete = 'admin.modules.fee.destroy';

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = Fee::class;

}
