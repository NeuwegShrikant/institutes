<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your fee. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => 'Backend\Fee\App\Http\Controllers\Admin',
], function() {

    Route::get('fee/index', ['as' => 'admin.modules.fee.index', 'uses' => 'FeeController@index']);
    Route::get('fee/create', ['as' => 'admin.modules.fee.create', 'uses' => 'FeeController@create']);
    Route::post('fee', ['as' => 'admin.modules.fee.store', 'uses' => 'FeeController@store']);
    Route::get('fee/{id}/options', [ 'as' => 'admin.modules.fee.show', 'uses' => 'FeeController@show' ]);
    Route::get('fee/{id}/edit', ['as' => 'admin.modules.fee.edit', 'uses' => 'FeeController@edit']);
    Route::put('fee/{id}', ['as' => 'admin.modules.fee.update', 'uses' => 'FeeController@update']);
    Route::get('fee/{id}/destroy', ['as' => 'admin.modules.fee.destroy', 'uses' => 'FeeController@destroy']);

    Route::get('student-fee/list', ['as' => 'admin.modules.fee.studentList', 'uses' => 'FeeController@studentList']);
});

