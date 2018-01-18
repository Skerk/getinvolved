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



// Appel la page /about

Route::get('/about', function () {

    // Retourne la vue du about qui se trouve dans le dossier "page"
    return view('page/about');

    // autre manière d'écrire la view sous dossier du ressource
    // return View::make('page.about');
});

Route::get('/help', function(){
    return view('page/help');
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

Route::get('/home', 'HomeController@index');