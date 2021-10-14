<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\TradesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ClientControllerController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
 */



Auth::routes();


Route::group(['prefix' => 'application'], function () {
 Route::group(['middleware' => 'auth'], function () {
	Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


	Route::resource('general', GeneralController::class);

	Route::resource('gallery', GalleryController::class);

	Route::resource('slides', SlideController::class);

	Route::resource('employe', EmployeController::class);

	Route::resource('trades', TradesController::class);

	Route::resource('page', PageController::class);

	Route::resource('menus', MenuController::class);
	});
});

//client

Route::resource('/', ClientControllerController::class);


Route::get('index/{id}', [ClientControllerController::class, 'common_url'])->where(['id'=>'[0-9]+'])->name('common_url');



Route::get('feedback', function () {
    return view('client.feedback');
});

Route::get('contact-us', function () {
    return view('client.contact-us');
});

