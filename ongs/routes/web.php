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
Route::resource('usuaris', 'usuarisctl');
Route::resource('treballadors', 'trebctl');


//Con migrations
//Route::resource('Socis', ControladorSocis::class);
//Sin migrations
Route::resource('socis','socisctl');
/*
Route::get('mostrasocis','socisctl@index');
Route::get('esborra-soci','socisctl@index');
Route::get('esbsoci/{NIF}','socisctl@destroy');
Route::get('modifica-socis','socisctl@index');
Route::get('modifsoci/{NIF}','socisctl@show');
Route::post('modifsocis/{NIF}','socisctl@edit');
Route::get('afegeixsocis','socisctl@create');
*/
//Route::resource('socis_ongs', ControladorSocisOngs::class);

/*Route::get('mostraongs','ongsctl@index');
Route::get('esbong/{CIF}','ongsctl@destroy');
Route::get('modifong/{CIF}','ongsctl@show');
Route::post('modifongs/{CIF}','ongsctl@edit'); 

Route::post('login','loginctl@show');
Route::get('tancarsessio/{user}', 'loginctl@destroy');

Route::get('usuaris', 'usuarisctl@index');
Route::get('esbusr/{user}', 'usuarisctl@destroy');
Route::get('mostrarusr/{user}', 'usuarisctl@show');
Route::post('modifusr/{user}', 'usuarisctl@edit');*/