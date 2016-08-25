<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('auth/login', 'AuthController@getLogin');
Route::post('auth/login', 'AuthController@postLogin');
Route::get('auth/logout', 'AuthController@getLogout');

// Route::get('/halo', function() {
//     return('Ini adalah halaman halo'); 
// });

//@@@@@@@@@@@@ awal route aplikasi @@@@@@@@@@@
Route::group(['middleware' => ['auth']], function(){
		

		Route::get('/form', 'FormController@index');
		Route::get('/form/create', 'FormController@create');
		Route::get('/form/show/{id}', 'FormController@show');
		// Route::post('/form', 'FormController@store');    
		Route::post('/form', ['middleware' => 'usia', 'uses' => 'FormController@store']);

		Route::get('/restricted', function(){
			return 'Umur harus lebih dari 18 (redirect dg middleware)';
		});

		Route::get('/form/edit/{id}', 'FormController@edit');
		Route::put('/form/update/{id}', 'FormController@update');
		Route::delete('/form/hapus/{id}', 'FormController@delete');

});

//@@@@@@@@@@@@@@@ akhir route aplikasi @@@@@@@@@@@@@@@
 
Route::get('/nama/{nama}',function($nama){
	return 'Nama anda adalah '.$nama;	 
});

Route::get('/nama/{nama}/hobi/{hobi}', function($nama, $hobi){
	return 'Nama anda '.$nama.' Hobi anda '.$hobi;
});

Route::get('/tugas', 'TugasController@getTugas');
Route::get('/tugas/{id}', 'TugasController@getDetail');

// Route::get('/form', function(){
// 	return view('form');
// });
// Route::post('/form', 'FormController@store');
Route::auth();

Route::get('/home', 'HomeController@index');
