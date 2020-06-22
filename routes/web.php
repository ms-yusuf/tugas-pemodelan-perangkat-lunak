<?php

Auth::routes();

Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('users', 'UserController');
    Route::resource('agents', 'AgentController');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/facade', function(){
  General::sayHello();
});