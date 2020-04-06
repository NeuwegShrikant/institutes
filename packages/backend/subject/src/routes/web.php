<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your subjects. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => 'Backend\Subject\App\Http\Controllers\Admin',
], function() {

    Route::get('subjects/index', ['as' => 'admin.modules.subjects.index', 'uses' => 'SubjectController@index']);
    Route::get('subjects/create', ['as' => 'admin.modules.subjects.create', 'uses' => 'SubjectController@create']);
    Route::post('subjects', ['as' => 'admin.modules.subjects.store', 'uses' => 'SubjectController@store']);
    Route::get('subjects/{id}/options', [ 'as' => 'admin.modules.subjects.show', 'uses' => 'SubjectController@show' ]);
    Route::get('subjects/{id}/edit', ['as' => 'admin.modules.subjects.edit', 'uses' => 'SubjectController@edit']);
    Route::put('subjects/{id}', ['as' => 'admin.modules.subjects.update', 'uses' => 'SubjectController@update']);
    Route::get('subjects/{id}/destroy', ['as' => 'admin.modules.subjects.destroy', 'uses' => 'SubjectController@destroy']);

});

