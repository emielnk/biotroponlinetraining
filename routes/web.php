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

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('templates.documentation');
});




//ini link baru

Route::get('/newtraining', function()
{
	return View::make('newtraining');
});

Route::get('/listtraining', function()
{
	return View::make('listtraining');
});

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
