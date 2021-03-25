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

Route::get('/', function () {
    if (Session::has('usuari')) {
        return view('welcome');
    } else {
        return view('login/login');
    }
});

Route::resource('ongs','ongsctl');
Route::resource('login','loginctl');
//Auth::routes();
Route::get('mostraongs','ongsctl@index');

Route::get('esborra-ong','ongsctl@index');
Route::get('esbong/{CIF}','ongsctl@destroy');

Route::get('modifica-ongs','ongsctl@index');
Route::get('modifong/{CIF}','ongsctl@show');
Route::post('modifongs/{CIF}','ongsctl@edit'); 
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('login','loginctl@show');
Route::get('tancarsessio/{user}', 'loginctl@destroy');