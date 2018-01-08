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
// // Pour créer les données directement que je prendrai dans mon html avec $data
//     // $data = [
//     //     $first_name = 'Towfiq',
//     //     $last_name = 'MolenGeekois'
//     // ];


// // Meme commande écrite differement
//        // $name = 'Towfiq MolenGeek';
//  // week end = date (n) <- Lundi =1, mardi = 2, etc. donc samedi=6 et dimanche 7
//  // True ou false si c le week end ou pas
//   //  $isWeekend = date ('N') >=6;
    
//     return view('welcome', compact('name', 'isWeekend'));

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