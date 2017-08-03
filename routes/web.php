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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/charts', function()
{
	return View::make('templates.mcharts');
});

Route::get('/tables', function()
{
	return View::make('templates.table');
});

Route::get('/forms', function()
{
	return View::make('templates.form');
});

Route::get('/grid', function()
{
	return View::make('templates.grid');
});

Route::get('/buttons', function()
{
	return View::make('templates.buttons');
});

Route::get('/icons', function()
{
	return View::make('templates.icons');
});

Route::get('/panels', function()
{
	return View::make('templates.panel');
});

Route::get('/typography', function()
{
	return View::make('templates.typography');
});

Route::get('/notifications', function()
{
	return View::make('templates.notifications');
});

Route::get('/blank', function()
{
	return View::make('templates.blank');
});

// Route::get('/login', function()
// {
// 	return View::make('login');
// });

Route::get('/documentation', function()
{
	return View::make('templates.documentation');
});




//ini link baru

// Route::get('/newtraining', function()
// {
// 	return View::make('newtraining');
// });

// Route::get('/listtraining', function()
// {
// 	return View::make('listtraining');
// });

Route::get('/listpemohon', function()
{
	return View::make('listpemohon');
});

Route::get('/evaluasi', function()
{
	return View::make('evaluasi');
});

Route::get('/listuser', function()
{
	return View::make('listuser');
});

Route::get('/userprofile', function()
{
	return View::make('userprofile');
});


//buat login
Route::get('/login',  function(){
	return view('login');
});

Route::post('login','UserController@checkLogin');
Route::get('logout','UserController@logout');

Route::group(['Middleware' => 'Auth'], function () {
	Route::get('dashboard','HomeController@index');
	Route::get('listtraining','TrainingController@listtraining');

	// new training
	Route::get('newtraining','TrainingController@newtraining');
	Route::post('newtraining/save', [
		'uses'=>'TrainingController@savetraining',
		'as' => 'savetraining'
	]);
	// showtraining
	Route::get('listtraining/show/{id_training}', 'TrainingController@showtraining');

	// edit training
	Route::get('listtraining/{id_training}/edit', 'TrainingController@edittraining');
	Route::post('listtraining/{id_training}/updatetraining', [
		'uses'=>'TrainingController@updatetraining',
		'as' => 'updatetraining'
	]);
	// hapus training
	Route::get('listtraining/destroy/{id_training}', 'TrainingController@destroy');

	// detail training => isi pertemuan
	Route::get('listtraining/show/{id_training}/detailtraining', [
		'uses' => 'TrainingController@showpertemuan',
		'as' => 'detailtraining'
]);


});
