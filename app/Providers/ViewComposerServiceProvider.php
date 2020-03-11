<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Basecode\Classes\Repositories\CategoryRepository;

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
            'admin.schools.create',
            'admin.schools.edit',
            'admin.teachers.create',
            'admin.teachers.edit',
        ], function ($view) {

            // $repository = new ItemMasterRepository();

            $collection =  \Spatie\Permission\Models\Permission::all();

            $view->with('permissions', $collection);
        });

        view()->composer([
            'admin.news.form'
        ], function($view) {

            $newsCategories = (new CategoryRepository)->getCollection()->pluck('title', 'tag')->toArray();

            $view->with('newsCategories', $newsCategories);
        });
    }
}
