<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\User\UserController as UUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ActivationController;
//use App\Http\Controllers\Auth\ActivationController;

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

Route::get('/', function () {
   return redirect()->route('event.index');
});
/*Route::get('/','App\Http\Controllers\EventController@index')-> name('indexs');
      
//Route::view('/home','index');
//Route::view('add','addEvent')->name('addEvent');
Route::get('add',[EventController::class, 'create'])->name('addEvent');
//Route::view('/header','header.pagecoba');
//Route::view('/dalam','header.pagedalam.inidalam');
//Route::post('add', [EventController::class, 'store'])->name('event.store');
Route::post('add', 'App\Http\Controllers\EventController@store')->name('event.store');
Route::get('edit/{event}', [EventController::class, 'edit'])->name('event.edit');
//update
Route::patch('update/{event}', [EventController::class, 'update'])->name('event.update');
Route::delete('delete/{event}', [EventController::class, 'destroy'])->name('event.delete');*/


Route::resource('galeri', GaleriController::class);
Route::resource('event', EventController::class);

Route::group([
   'middleware' => 'admin',
  'prefix' => 'admin',
  //'as' => 'admin.',
], function (){
   Route::resource('user', UserController::class);
  // Route::resource('event', AdminEventController::class);
});


/*Route::group([
   'middleware' => 'creator'
], function(){
   Route::resource('event', EventController::class);
});

Route::group([
   'middleware' => 'user',
   'prefix' => 'user',
  // 'as' => 'user',
],function (){
   Route::resource('user', UUserController::class);
});*/

//Route::resource('event', App\Http\Controllers\EventController@store);
//Route::resource('user',[UserController::class]);

Route::get('activate',[ActivationController::class, 'activate'])->name('activate');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
