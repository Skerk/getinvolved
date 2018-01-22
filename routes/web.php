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
return view('layouts/master');

});








// Création d'une liste d'evenements
// Route::get('/events', function(){
// $events = [
//     'Make PHP Great Again',
//     'Conference PHP',
//     'Meetup TDN',
//     'Laravel Conference'
// ];
//     return view('events/index', compact('events'));
// });


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index', function(){
        Route::get('/', 'HomeController@index'); 

    }); 
   
});