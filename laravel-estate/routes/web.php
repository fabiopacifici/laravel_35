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
    $houses = App\House::all();
    return view('welcome', compact('houses'));
});

Route::get('/agents', function () {
    $agents = App\Agent::all();
    return view('agents', compact('agents'));
});

/* 
table name: Agents
Model: Agent
Seeder

- id
- name
- lastname
- email
- phone
- website
*/