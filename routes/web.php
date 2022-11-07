<?php

use App\Http\Controllers\controladorWeirdo;
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

Route::get('/', [controladorWeirdo::class, 'showLogin'])->name('apodoLogin');
Route::get('index', [controladorWeirdo::class, 'showIndex'])->name('apodoIndex');
Route::get('comics', [controladorWeirdo::class, 'showComics'])->name('apodoComics');
Route::get('agregarComic', [controladorWeirdo::class, 'showAgregarComic'])->name('apodoAgregarComic');
Route::get('editarComic', [controladorWeirdo::class, 'showEditarComic'])->name('apodoEditarComic');



// Envío por post de formularios
Route::post('validarLogin', [controladorWeirdo::class, 'confirmarFormulario']);
Route::post('validarComic', [controladorWeirdo::class, 'confirmarComic']);
Route::post('validarComicActualizar', [controladorWeirdo::class, 'confirmarActualizacionComic']);
