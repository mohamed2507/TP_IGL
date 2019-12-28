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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formulaire-etudiant', function () {
    return view('IGL.formulaire-etudiant');
});
Route::get('/formulaire-admin', function () {
    return view('IGL.formulaire-admin');
});

Route::post('/etudiant/register','SubmitEController@store');
Route::post('/admin/register','SubmitAController@store');
