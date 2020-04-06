<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your batches. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => 'Backend\Batch\App\Http\Controllers\Admin',
], function() {

    Route::get('batches/index', ['as' => 'admin.modules.batches.index', 'uses' => 'BatchController@index']);
    Route::get('batches/create', ['as' => 'admin.modules.batches.create', 'uses' => 'BatchController@create']);
    Route::post('batches', ['as' => 'admin.modules.batches.store', 'uses' => 'BatchController@store']);
    Route::get('batches/{id}/options', [ 'as' => 'admin.modules.batches.show', 'uses' => 'BatchController@show' ]);
    Route::get('batches/{id}/edit', ['as' => 'admin.modules.batches.edit', 'uses' => 'BatchController@edit']);
    Route::put('batches/{id}', ['as' => 'admin.modules.batches.update', 'uses' => 'BatchController@update']);
    Route::get('batches/{id}/destroy', ['as' => 'admin.modules.batches.destroy', 'uses' => 'BatchController@destroy']);

});

