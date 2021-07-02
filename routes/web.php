<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
	return view('welcome');
});*/

Route::get('/Signln', function () {
    return view('FrontEnd.login');
});

Route::get('/','TemplateController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/myRegister', [App\Http\Controllers\RegisterController::class, 'myFunction']);
Route::post('/test', [App\Http\Controllers\TemplateController::class, 'test'])->name('test');
Route::post('/Mylogin', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Route::get('/SignUp', function () {
    return view('auth.register');
});

/*Route::get('/Login', function () {
    return view('FrontEnd.master');
});*/
Route::get('/home02',function()
	{ 
		return view('FrontEnd.home02');
	});

Route::get('/home03 ',function()
	{ 
		return view('FrontEnd.home03');
	});


Route::get('/admin ',function()
	{ 
		return view('FrontEnd.admin.admin');
	});

	

Route::get('/about',function()
	{ 
		return view('FrontEnd.about');
	});
	

Route::get('/contact',function()
	{
		return view('FrontEnd.contact');
	});

Route::get('/blog',function()
	{
		return view('FrontEnd.blog');
	});

Route::get('/blogdetail',function()
	{
		return view('FrontEnd.blogdetail');
	});


Route::get('/product',function()
	{
		return view('FrontEnd.product');
	});

Route::get('/productdeatil',function()
	{
		return view('FrontEnd.productdetail');
	});

Route::get('/shopingcart',function()
	{
		return view('FrontEnd.shopingcart');
	});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
