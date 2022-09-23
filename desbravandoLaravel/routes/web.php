<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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


Route::get('/', [EventController::class, 'index']);
Route::get('/Criar/Evento', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/contatos', function () {
    return view('contact');
});
// "para coloca parametros opcionais basta coloca o ponto de interogação depois da variavel porem precisa definir um valor padrão"

