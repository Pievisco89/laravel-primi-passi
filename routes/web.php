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
            'Fake plastica trees',
            'The castle',
            'Arriva lo ye-ye',
            'Anidride solforosa',
            'Xtal'    
        ]

    ];
    return view('home', $data);
});
