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
    $data = [
        'name' => 'Pietro',
        'lastname' => 'Visconti',
        'songs' => [
            'Fake Plastic Trees',
            'The Castle',
            'Arriva Lo Ye-Ye',
            'Anidride Solforosa',
            'Xtal'    
        ]

    ];
    return view('home', $data);
});

Route::get('/authors', function () {
    $data = [
        'artists' => [
            'Radiohead',
            'Flaming Lips',
            'Baustelle',
            'Lucio Dalla',
            'Aphex Twin'    
        ]

    ]; 
    return view('authors', $data);
});

Route::get('/album', function () { 
    $data = [
        'discs' => [
            'Ok Computer',
            'The Castle',
            'La Moda Del Lento',
            'Anidride Solforosa',
            'Selected Ambient Works 85-92'    
        ]
    ]; 
    return view('album', $data);
});