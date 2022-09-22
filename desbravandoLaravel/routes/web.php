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

    $nome = "marilu";
    $idade = 21;
    $arr = [1, 2, 3, 4, 5, 6];

    return view('welcome', 
    [
        'nome' => $nome,  
        'idade'=> $idade, 
        'profissao' => "cantora",
        'arr' => $arr
    ]);
});

Route::get('/contatos', function () {
    return view('contact');
});
