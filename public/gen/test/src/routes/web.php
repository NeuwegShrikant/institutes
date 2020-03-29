<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your {ROUTE}. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => '{PACKAGE}\{MODULE}\App\Http\Controllers\Admin',
], function() {

    Route::get('{ROUTE}/index', ['as' => 'admin.modules.{ROUTE}.index', 'uses' => '{CONTROLLER}@index']);
    Route::get('{ROUTE}/create', ['as' => 'admin.modules.{ROUTE}.create', 'uses' => '{CONTROLLER}@create']);
    Route::post('{ROUTE}', ['as' => 'admin.modules.{ROUTE}.store', 'uses' => '{CONTROLLER}@store']);
    Route::get('{ROUTE}/{id}/options', [ 'as' => 'admin.modules.{ROUTE}.show', 'uses' => '{CONTROLLER}@show' ]);
    Route::get('{ROUTE}/{id}/edit', ['as' => 'admin.modules.{ROUTE}.edit', 'uses' => '{CONTROLLER}@edit']);
    Route::put('{ROUTE}/{id}', ['as' => 'admin.modules.{ROUTE}.update', 'uses' => '{CONTROLLER}@update']);
    Route::get('{ROUTE}/{id}/destroy', ['as' => 'admin.modules.{ROUTE}.destroy', 'uses' => '{CONTROLLER}@destroy']);

});

