<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('addPerm', function () {

    // $permissions = [
    //     // 'Add Master',
    //     // 'Edit Master',
    //     // 'Delete Master',
    //     // 'List Master',
    //     'Add Teacher',
    //     'Edit Teacher',
    //     'Delete Teacher',
    //     'List Teacher',
    //     'Add Student',
    //     'Edit Student',
    //     'Delete Student',
    //     'List Student',
    // ];

    // foreach ($permissions as $permission) {
    //    \Spatie\Permission\Models\Permission::create([
    //        'name'          => str_slug($permission,'_'),
    //        // 'display_name'  => $permission
    //    ]);
    // }

//    return view('welcome');
    return redirect()->route('login');
});

Route::get('homeTest', function() {
    return view('tests.test');
});
Route::get('search/states', [ 'as' => 'frontend.states.search', 'uses' => 'HomeController@searchStates' ]);
Route::get('search/cities', [ 'as' => 'frontend.cities.search', 'uses' => 'HomeController@searchCities' ]);
Route::get('search/skills', [ 'as' => 'frontend.cities.skills', 'uses' => 'HomeController@searchSkills' ]);

Route::get('/', 'HomeController@index')->name('admin.dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'middleware' => 'admin.auth', 'namespace' => 'Admin'], function() {
	
});