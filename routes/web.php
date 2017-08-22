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



Route::get('/listpemohon', function()
{
	return View::make('admin.listpemohon');
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
	return view('admin.login');
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
		'uses' => 'PertemuanController@showpertemuan',
		'as' => 'detailtraining'
	]);
	// new pertemuan
	Route::get('listtraining/show/{id_training}/detailtraining/newpertemuan','PertemuanController@newpertemuan');
	Route::post('newpertemuan/save', [
		'uses'=>'PertemuanController@savepertemuan',
		'as' => 'savepertemuan'
	]);
	// edit pertemuan
	Route::get('listtraining/show/{id_training}/detailtraining/edit/{id_pertemuan}', [
		'uses'=>'PertemuanController@editpertemuan',
		'as' => 'editpertemuan'
	]);
	Route::post('listtraining/{id_training}/updatepertemuan/{id_pertemuan}', [
		'uses'=>'PertemuanController@updatepertemuan',
		'as' => 'updatepertemuan'
	]);
	// hapus pertemuan
	Route::get('listtraining/{id_training}/destroy/{id_pertemuan}', [
		'uses'=>'PertemuanController@destroytemu',
		'as' => 'destroytemu'
	]);


	// newtest
	Route::get('listtraining/show/{id_training}/detailtraining/newtest', 'TestController@shownewtest');
	// save test
	Route::post('listtraining/show/{id_training}/detailtraining/newtest/save', 'TestController@savequestiontest');
	Route::get('listtraining/show/{id_training}/detailtraining/showtest', 'TestController@showdone');
	// show test
	Route::get('listtraining/show/{id_training}/detailtraining/{id_test}/showtest', [
		'uses'=>'TestController@showtest',
		'as'	=>'showtest'
	]);
	// newtest question
	Route::get('listtraining/show/{id_training}/detailtraining/{id_test}/showtest/newquestion', 'TestController@addnewquestion');
	// save question
	Route::post('listtraining/show/{id_training}/detailtraining/{id_test}/showtest/newtest/save', 'TestController@savequestiontest');









	// // test = pre = post
	// Route::get('listtraining/show/{id_training}/detailtraining/newtest', 'TestController@shownewtest');
	// Route::get('listtraining/show/{id_training}/detailtraining/test/show', 'TestController@showtest');
	//
	// // buat pertanyaan test
	// Route::get('listtraining/show/{id_training}/detailtraining/test/new', 'TestController@newquestiontest');
	// Route::post('listtraining/show/{id_training}/detailtraining/test/save', 'TestController@savequestiontest');
	//
	// // evaluasi
	// Route::get('listtraining/show/{id_training}/detailtraining/evaluasi', 'TestController@showeval');
	// Route::get('listtraining/show/{id_training}/detailtraining/evaluasi/new', 'TestController@neweval');
	// Route::post('listtraining/show/{id_training}/detailtraining/evaluasi/save', 'TestController@saveeval');


});
