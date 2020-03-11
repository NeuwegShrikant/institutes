<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your institutes. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => 'Backend\Institute\App\Http\Controllers\Admin',
], function() {

    Route::get('institutes/index', ['as' => 'admin.modules.institutes.index', 'uses' => 'InstituteController@index']);
    Route::get('institutes/create', ['as' => 'admin.modules.institutes.create', 'uses' => 'InstituteController@create']);
    Route::post('institutes', ['as' => 'admin.modules.institutes.store', 'uses' => 'InstituteController@store']);
    Route::get('institutes/{id}/options', [ 'as' => 'admin.modules.institutes.show', 'uses' => 'InstituteController@show' ]);
    Route::get('institutes/{id}/edit', ['as' => 'admin.modules.institutes.edit', 'uses' => 'InstituteController@edit']);
    Route::put('institutes/{id}', ['as' => 'admin.modules.institutes.update', 'uses' => 'InstituteController@update']);
    Route::get('institutes/{id}/destroy', ['as' => 'admin.modules.institutes.destroy', 'uses' => 'InstituteController@destroy']);

});

