<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your courses. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => 'Backend\Course\App\Http\Controllers\Admin',
], function() {

    Route::get('courses/index', ['as' => 'admin.modules.courses.index', 'uses' => 'CourseController@index']);
    Route::get('courses/create', ['as' => 'admin.modules.courses.create', 'uses' => 'CourseController@create']);
    Route::post('courses', ['as' => 'admin.modules.courses.store', 'uses' => 'CourseController@store']);
    Route::get('courses/{id}/options', [ 'as' => 'admin.modules.courses.show', 'uses' => 'CourseController@show' ]);
    Route::get('courses/{id}/edit', ['as' => 'admin.modules.courses.edit', 'uses' => 'CourseController@edit']);
    Route::put('courses/{id}', ['as' => 'admin.modules.courses.update', 'uses' => 'CourseController@update']);
    Route::get('courses/{id}/destroy', ['as' => 'admin.modules.courses.destroy', 'uses' => 'CourseController@destroy']);

});

