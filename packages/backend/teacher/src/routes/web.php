<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your teacher. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => 'Backend\Teacher\App\Http\Controllers\Admin',
], function() {

    Route::get('teacher/index', ['as' => 'admin.modules.teacher.index', 'uses' => 'TeacherController@index']);
    Route::get('teacher/create', ['as' => 'admin.modules.teacher.create', 'uses' => 'TeacherController@create']);
    Route::post('teacher', ['as' => 'admin.modules.teacher.store', 'uses' => 'TeacherController@store']);
    Route::get('teacher/{id}/options', [ 'as' => 'admin.modules.teacher.show', 'uses' => 'TeacherController@show' ]);
    Route::get('teacher/{id}/edit', ['as' => 'admin.modules.teacher.edit', 'uses' => 'TeacherController@edit']);
    Route::put('teacher/{id}', ['as' => 'admin.modules.teacher.update', 'uses' => 'TeacherController@update']);
    Route::get('teacher/{id}/destroy', ['as' => 'admin.modules.teacher.destroy', 'uses' => 'TeacherController@destroy']);

});

