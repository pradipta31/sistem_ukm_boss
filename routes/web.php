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
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function(){
  return redirect('/redirecting');
});

Route::get('/redirecting', function(){
  if (Auth::user()->role == 'admin') {
      return redirect('admin');
  } elseif (Auth::user()->role == 'ketua') {
      return redirect('ketua');
  }
});


Route::group(['middleware' => 'role:admin','prefix' => 'admin', 'namespace' => 'Admin'], function(){
  Route::get('/', function(){
    return redirect('admin/dashboard');
  });
  Route::get('dashboard', 'DashboardController@index');
});

Route::group(['middleware' => 'role:ketua','prefix' => 'ketua', 'namespace' => 'Ketua'], function(){
  Route::get('/', function(){
    return redirect('ketua/dashboard');
  });
  Route::get('dashboard', 'DashboardController@index');
});
