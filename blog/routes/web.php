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

    $pastas = config('pasta.data');

    //dd($pastas);
    $pasta_collection = collect($pastas);

    $lunga = $pasta_collection->where('tipo', 'lunga');
    $corta = $pasta_collection->where('tipo', 'corta');
    $cortissima = $pasta_collection->where('tipo', 'cortissima');

    /*
    Soluzione con array_filter
    $lunga = array_filter($pastas, function ($pasta) {
        return $pasta['tipo'] === 'lunga';
    });

    $corta = array_filter($pastas, function ($pasta) {
        return $pasta['tipo'] === 'corta';
    });

    $cortissima = array_filter($pastas, function ($pasta) {
        return $pasta['tipo'] === 'cortissima';
    });
 */
    //dd($lunga, $corta, $cortissima);
    $data = [
        'pastas' => [
            'Le Lunghe' => $lunga,
            'Le Corte' => $corta,
            'Le Cortissime' => $cortissima
        ]
    ];
    //dd($data);
    return view('home', $data);
})->name('home');
Route::get('/products', function () {
    $title = ' My products page';
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ipsum ipsam blanditiis voluptatibus corporis natus temporibus illo architecto inventore rerum perspiciatis accusamus aliquam ratione fugiat vel qui, eius deserunt hic.';

    return view('products', compact('title', 'text'));
})->name('products');

Route::get('/news', function () {
    return view('news');
})->name('news');