<?php

namespace Backend\Batch\App\Basecode\Classes\Repositories;

use Backend\Batch\App\Batch;
use Zombata\Core\Repositories\Repository;

class BatchRepository extends Repository {

    public $viewIndex = 'ModuleViewBatch::admin.Batch.index';
    public $viewCreate = 'ModuleViewBatch::admin.Batch.create';
    public $viewEdit = 'ModuleViewBatch::admin.Batch.edit';
    public $viewShow = 'ModuleViewBatch::admin.Batch.show';
    public $viewForm = 'ModuleViewBatch::admin.Batch.form';

    public $routeIndex = 'admin.modules.batches.index';
    public $routeCreate = 'admin.modules.batches.create';
    public $routeStore = 'admin.modules.batches.store';
    public $routeEdit = 'admin.modules.batches.edit';
    public $routeUpdate = 'admin.modules.batches.update';
    public $routeShow = 'admin.modules.batches.show';
    public $routeDelete = 'admin.modules.batches.destroy';

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = Batch::class;

    public  function save($attrs)
    {
        $attrs = $this->getValueArray($attrs);

        $attrs['user_id'] = auth()->user()->id;

        $model = new $this->model;
        $model->fill($attrs);
        $model->save();

        $model->batch_id = 'BATCH_O'.$model->id;
        $model->save();
    }
}
