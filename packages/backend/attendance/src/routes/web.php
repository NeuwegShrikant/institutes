<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your attendances. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => 'auth',
    'prefix' => config('app.admin_prefix', 'admin/modules'),
    'namespace' => 'Backend\Attendance\App\Http\Controllers\Admin',
], function() {

    Route::get('attendances/index', ['as' => 'admin.modules.attendances.index', 'uses' => 'AttendanceController@index']);
    Route::get('attendances/create', ['as' => 'admin.modules.attendances.create', 'uses' => 'AttendanceController@create']);
    Route::post('attendances', ['as' => 'admin.modules.attendances.store', 'uses' => 'AttendanceController@store']);
    Route::get('attendances/{id}/options', [ 'as' => 'admin.modules.attendances.show', 'uses' => 'AttendanceController@show' ]);
    Route::get('attendances/{id}/edit', ['as' => 'admin.modules.attendances.edit', 'uses' => 'AttendanceController@edit']);
    Route::put('attendances/{id}', ['as' => 'admin.modules.attendances.update', 'uses' => 'AttendanceController@update']);
    Route::get('attendances/{id}/destroy', ['as' => 'admin.modules.attendances.destroy', 'uses' => 'AttendanceController@destroy']);
    Route::get('students/list', ['as' => 'admin.modules.attendances.studentList', 'uses' => 'AttendanceController@studentList']);
});

