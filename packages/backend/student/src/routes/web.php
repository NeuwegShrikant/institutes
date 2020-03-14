<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your students. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => 'Backend\Student\App\Http\Controllers\Admin',
], function() {

    Route::get('students/index', ['as' => 'admin.modules.students.index', 'uses' => 'StudentController@index']);
    Route::get('students/create', ['as' => 'admin.modules.students.create', 'uses' => 'StudentController@create']);
    Route::post('students', ['as' => 'admin.modules.students.store', 'uses' => 'StudentController@store']);
    Route::get('students/{id}/options', [ 'as' => 'admin.modules.students.show', 'uses' => 'StudentController@show' ]);
    Route::get('students/{id}/edit', ['as' => 'admin.modules.students.edit', 'uses' => 'StudentController@edit']);
    Route::put('students/{id}', ['as' => 'admin.modules.students.update', 'uses' => 'StudentController@update']);
    Route::get('students/{id}/destroy', ['as' => 'admin.modules.students.destroy', 'uses' => 'StudentController@destroy']);

});

