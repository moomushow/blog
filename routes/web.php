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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
route::get('/cal/{num1},{num2}','HomeController@cal');

// Route::get('/about', function () {
//     return view('about');
// });

 Route::get('/computer', function () {
     return view('computer');
 });

Route::get('/user',function() {
    $user = \App\User::all();
    dd($user);

});

  Route::get('/user/add-example',function () {
    $data = [
        'name' => 'manop kumm',
        'email' => 'namop@hotmail.com',
        'password' => bcrypt('1234')
    ];
    $user = \App\User::insert($data);
    dd($user);
 });


