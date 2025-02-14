<?php

use App\Http\Route;

//Route::get('/migrate', 'HomeController@migrate');
//Route::get('/seeder', 'HomeController@seeder');

Route::get('/', 'HomeController@index');
Route::post('/html/generate', 'HtmlController@generateHtml');
Route::post('/tripulante/create', 'ApostadorController@store');
Route::post('/tripulante-bilhete/create-random-numbers', 'ApostadorBilheteController@createRandomNumbers');
Route::post('/sorteio/create', 'SorteioController@store');
Route::post('/sorteio/generate-win-numbers', 'SorteioController@generateWinNumbers');
