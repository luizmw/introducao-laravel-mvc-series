<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


//rota com função anônima
// Route::get('/ola', function () {
//         echo ('Olá, mundo!');
//     });

Route::get('/', function () {
    return view('/components/welcome');
});
Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/create', [SeriesController::class, 'create']);
Route::post('/series/salvar', [SeriesController::class, 'store']);




