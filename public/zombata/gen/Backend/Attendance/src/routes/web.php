<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your attendance. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => 'Backend\Attendance\App\Http\Controllers\Admin',
], function() {

    Route::get('attendance/index', ['as' => 'admin.modules.attendance.index', 'uses' => 'AttendanceController@index']);
    Route::get('attendance/create', ['as' => 'admin.modules.attendance.create', 'uses' => 'AttendanceController@create']);
    Route::post('attendance', ['as' => 'admin.modules.attendance.store', 'uses' => 'AttendanceController@store']);
    Route::get('attendance/{id}/options', [ 'as' => 'admin.modules.attendance.show', 'uses' => 'AttendanceController@show' ]);
    Route::get('attendance/{id}/edit', ['as' => 'admin.modules.attendance.edit', 'uses' => 'AttendanceController@edit']);
    Route::put('attendance/{id}', ['as' => 'admin.modules.attendance.update', 'uses' => 'AttendanceController@update']);
    Route::get('attendance/{id}/destroy', ['as' => 'admin.modules.attendance.destroy', 'uses' => 'AttendanceController@destroy']);

});

