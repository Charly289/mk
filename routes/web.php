<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('market/home');
});
Route::post('/', [productoController::class, 'registrar'])->name('registrar');
Route::get('/tprod', [productoController::class, 'productos_data'])->name('tprod');
Route::get('/ed_rep', [productoController::class, 'editar_reporte'])->name('ed_rep');
Route::get('/del_rep', [productoController::class, 'del_rep'])->name('del_rep');

Route::get('/tproducto', function(){
    return view('home2');
})->name('tproducto');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
