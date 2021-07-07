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
    // passa variabili alla view con compact()
    //$name = "Valerio";
    //return view('home', compact('name'));

    $data = [
        'name' => 'Classe',
        'lastname' => '35',
        'students' => [
            'Eveling',
            'Simone',
            'Andrei',
            'Stefania',
            'Beatrice',
            'Carmen',
            'Alessandra'
        ]
    ];

    return view('home', $data);
});
Route::get('/about', function () {

    return 'About me';
});
