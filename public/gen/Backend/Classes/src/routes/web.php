<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your classes. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => 'Backend\Classes\App\Http\Controllers\Admin',
], function() {

    Route::get('classes/index', ['as' => 'admin.modules.classes.index', 'uses' => 'ClassesController@index']);
    Route::get('classes/create', ['as' => 'admin.modules.classes.create', 'uses' => 'ClassesController@create']);
    Route::post('classes', ['as' => 'admin.modules.classes.store', 'uses' => 'ClassesController@store']);
    Route::get('classes/{id}/options', [ 'as' => 'admin.modules.classes.show', 'uses' => 'ClassesController@show' ]);
    Route::get('classes/{id}/edit', ['as' => 'admin.modules.classes.edit', 'uses' => 'ClassesController@edit']);
    Route::put('classes/{id}', ['as' => 'admin.modules.classes.update', 'uses' => 'ClassesController@update']);
    Route::get('classes/{id}/destroy', ['as' => 'admin.modules.classes.destroy', 'uses' => 'ClassesController@destroy']);

});

