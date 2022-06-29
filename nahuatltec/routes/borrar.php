<?php
use Illuminate\Support\Facades\Route;


Route::GET('/lecturas', 'LecturaController@index');
Route::POST('/lecturas', 'LecturaController@store');
Route::PUT('/lecturas/{id}', 'LecturaController@update');
Route::DELETE('/lecturas/{id}', 'LecturaController@destroy');