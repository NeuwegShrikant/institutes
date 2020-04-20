<?php

namespace App\Providers;

use App\Basecode\Classes\Repositories\SubjectRepository;
use App\Basecode\Classes\Repositories\TeacherRepository;
use Backend\Batch\App\Basecode\Classes\Repositories\BatchRepository;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'ModuleViewBatch::admin.Batch.form'
        ], function ($view) {

            $teacher = (new TeacherRepository())->getCollection()->pluck('name', 'id')->toArray();
            $subjects = (new SubjectRepository())->getCollection()->pluck('title', 'tag')->toArray();

            $view->with([
               'teacher' => $teacher,
                'subjects' => $subjects
            ]);
        });


        view()->composer([
            'ModuleViewAttendance::admin.Attendance.form',
            'ModuleViewStudent::admin.Student.form'
        ], function ($view) {

            $batches = (new BatchRepository())->getCollection()->pluck('title', 'id')->toArray();

            $view->with([
                'batches' => $batches
            ]);
        });

    }
}
