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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('inicio');
});
Route::get('/contactanos/create', 'ContactanosController@create')->name('contactanos.create');
Route::post('/contactanos', 'ContactanosController@store')->name('contactanos.store');
Route::delete('/mensajes/{mensaje}', 'ContactanosController@destroy')->name('contactanos.destroy');
Route::get('/politicadeprivacidad', function () {
    return view('politicadeprivacidad');
});
Route::get('/nosotros', 'NosotrosController@index')->name('nosotros.index');


Route::get('/cursos', 'CursosController@index')->name('cursos.index');

Route::get('/talleres', 'TalleresController@index')->name('talleres.index');


