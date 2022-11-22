<?php

use App\Http\Controllers\controladorBDArticulos;
use App\Http\Controllers\controladorBDComics;
use App\Http\Controllers\controladorWeirdo;
use App\Http\Controllers\controladorBDProveedores;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('template');
});
Route::get('addArt', function () {
    return view('agregarArt');
});
*/

Route::get('/', [controladorWeirdo::class, 'showLogin'])->name('apodoLogin');
Route::get('index', [controladorWeirdo::class, 'showIndex'])->name('index');
Route::get('pV', [controladorWeirdo::class, 'showPuntoVenta'])->name('apodoPuntoV');

Route::get('comics', [controladorWeirdo::class, 'showComics'])->name('apodoComics');
Route::get('agregarComic', [controladorWeirdo::class, 'showAgregarComic'])->name('apodoAgregarComic');
Route::get('editarComic', [controladorWeirdo::class, 'showEditarComic'])->name('apodoEditarComic');

Route::get('articulos', [controladorWeirdo::class, 'showArticulos'])->name('apodoArticulos');
Route::get('agregarArticulo', [controladorWeirdo::class, 'showAgregarArticulo'])->name('apodoAgregarArticulo');
Route::get('editarArticulo', [controladorWeirdo::class, 'showEditarArticulo'])->name('apodoEditarArticulo');



Route::get('editarProveedor', [controladorWeirdo::class, 'showEditarProveedor'])->name('apodoEditarProveedor');

Route::get('pedidos', [controladorWeirdo::class, 'showPedidos'])->name('apodoPedi2');
Route::get('agregarPedido', [controladorWeirdo::class, 'showAgregarPedido'])->name('apodoAgregarPedido');

Route::get('inventario', [controladorWeirdo::class, 'showInventario'])->name('apodoInventario');


// Envío por post de formularios
Route::post('validarLogin', [controladorWeirdo::class, 'confirmarFormulario']);

Route::post('validarComic', [controladorWeirdo::class, 'confirmarComic']);
Route::post('validarArticulo', [controladorWeirdo::class, 'confirmarArticulo']);
Route::post('validarPedido', [controladorWeirdo::class, 'confirmarPedido']);

Route::post('validarComicActualizar', [controladorWeirdo::class, 'confirmarActualizacionComic']);
Route::post('validarArticuloActualizar', [controladorWeirdo::class, 'confirmarActualizacionArticulo']);

// Proveedores
Route::get('proveedores/index', [controladorBDProveedores::class, 'index'])->name('proveedores');
Route::get('proveedores/agregar', [controladorBDProveedores::class, 'create'])->name('agregarProveedor');
Route::post('proveedores/create', [controladorBDProveedores::class, 'store'])->name('guardarProveedor');

Route::post('validarProveedor', [controladorWeirdo::class, 'confirmarProveedor']);
Route::post('validarActualizacionProveedor', [controladorWeirdo::class, 'confirmarActualizacionProveedor']);

//Cómics
Route::get('cómics/index', [controladorBDComics::class, 'index'])->name('comics');
Route::get('cómics/agregar', [controladorBDComics::class, 'create'])->name('agregarComic');
Route::post('cómics/create', [controladorBDComics::class, 'store'])->name('guardarComic');

//Artículos
Route::get('artículos/index', [controladorBDArticulos::class, 'index'])->name('articulos');
Route::get('artículos/agregar', [controladorBDArticulos::class, 'create'])->name('agregarArticulo');
Route::post('artículos/create', [controladorBDArticulos::class, 'store'])->name('guardarArticulo');


