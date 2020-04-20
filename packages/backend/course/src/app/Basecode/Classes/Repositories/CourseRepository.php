<?php

namespace Backend\Course\App\Basecode\Classes\Repositories;

use Backend\Course\App\Course;
use Zombata\Core\Repositories\Repository;

class CourseRepository extends Repository {

    public $viewIndex = 'ModuleViewCourse::admin.Course.index';
    public $viewCreate = 'ModuleViewCourse::admin.Course.create';
    public $viewEdit = 'ModuleViewCourse::admin.Course.edit';
    public $viewShow = 'ModuleViewCourse::admin.Course.show';
    public $viewForm = 'ModuleViewCourse::admin.Course.form';

    public $routeIndex = 'admin.modules.courses.index';
    public $routeCreate = 'admin.modules.courses.create';
    public $routeStore = 'admin.modules.courses.store';
    public $routeEdit = 'admin.modules.courses.edit';
    public $routeUpdate = 'admin.modules.courses.update';
    public $routeShow = 'admin.modules.courses.show';
    public $routeDelete = 'admin.modules.courses.destroy';

    public $storeValidateRules = [];
    public $updateValidateRules = [];

    public $model = Course::class;

}
