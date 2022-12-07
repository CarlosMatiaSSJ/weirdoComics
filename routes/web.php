<?php

use App\Http\Controllers\controladorBDArticulos;
use App\Http\Controllers\controladorBDComics;
use App\Http\Controllers\controladorWeirdo;
use App\Http\Controllers\controladorBDProveedores;
use App\Http\Controllers\controladorVentas;
use App\Http\Controllers\controladorPedidos;
use App\Http\Controllers\controladorUsuarios;
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
Route::post('validarLogin', [controladorWeirdo::class, 'confirmarFormulario']);
Route::get('logout', [controladorWeirdo::class, 'logout'])->name('logout');



    



Route::get('index', [controladorWeirdo::class, 'showIndex'])->name('index');



Route::get('comics', [controladorWeirdo::class, 'showComics'])->name('apodoComics');
Route::get('agregarComic', [controladorWeirdo::class, 'showAgregarComic'])->name('apodoAgregarComic');
Route::get('editarComic', [controladorWeirdo::class, 'showEditarComic'])->name('apodoEditarComic');

Route::get('articulos', [controladorWeirdo::class, 'showArticulos'])->name('apodoArticulos');
Route::get('agregarArticulo', [controladorWeirdo::class, 'showAgregarArticulo'])->name('apodoAgregarArticulo');
Route::get('editarArticulo', [controladorWeirdo::class, 'showEditarArticulo'])->name('apodoEditarArticulo');



Route::get('editarProveedor', [controladorWeirdo::class, 'showEditarProveedor'])->name('apodoEditarProveedor');


//Pedidos
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
Route::PUT('proveedores/update/{id}', [controladorBDProveedores::class, 'update'])->name('updateProveedor');
Route::DELETE('proveedores/destroy/{id}', [controladorBDProveedores::class, 'destroy'])->name('destroyProveedor');
Route::get('proveedores/show/{id}', [controladorBDProveedores::class, 'show'])->name('showProveedor');

//Pedidos
Route::get('proveedores/agregarPedido/{id}', [controladorPedidos::class, 'index'])->name('agregarPedido');
Route::post('proveedores/generarPedido/{id}', [controladorPedidos::class, 'store'])->name('generarPedido');




//Cómics
Route::get('cómics/index', [controladorBDComics::class, 'index'])->name('comics');
Route::get('cómics/agregar', [controladorBDComics::class, 'create'])->name('agregarComic');
Route::post('cómics/create', [controladorBDComics::class, 'store'])->name('guardarComic');

Route::PUT('cómics/update/{id}', [controladorBDComics::class, 'update'])->name('updateComic');
Route::DELETE('cómics/destroy/{id}', [controladorBDComics::class, 'destroy'])->name('destroyComic');



//Artículos
Route::get('artículos/index', [controladorBDArticulos::class, 'index'])->name('articulos');
Route::get('artículos/agregar', [controladorBDArticulos::class, 'create'])->name('agregarArticulo');
Route::post('artículos/create', [controladorBDArticulos::class, 'store'])->name('guardarArticulo');
Route::get('artículos/editar/{id}', [controladorBDArticulos::class, 'edit'])->name('editarArticulo');
Route::PUT('artículos/update/{id}', [controladorBDArticulos::class, 'update'])->name('updateArticulo');
Route::DELETE('artículos/destroy/{id}', [controladorBDArticulos::class, 'destroy'])->name('destroyArticulo');



//Ventas
Route::post("/productoDeVenta", [controladorVentas::class, 'agregarProductoVenta'] )->name("agregarProductoVenta");
Route::get("/cancelarVenta", [controladorVentas::class, 'cancelarVenta'] )->name("cancelarVentas");
Route::get("pV", [controladorVentas::class, 'index'] )->name("puntoVenta");
Route::post("/venta", [controladorVentas::class, 'terminarVenta'] )->name("terminarVenta");
Route::get("venta/ticket", [controladorVentas::class, 'imprimir'] )->name("imprimir");
Route::get("venta/registro", [controladorVentas::class, 'show'] )->name("registroVentas");


//Usuarios
Route::get('usuarios/index', [controladorUsuarios::class, 'index'])->name('usuarios');
route::delete('usuarios/destroy/{id}',[controladorUsuarios::class,'destroy'])->name('destroyUsuario');
Route::PUT('usuarios/update/{id}', [controladorUsuarios::class, 'update'])->name('updateUsuario');
Route::post('usuarios/store', [controladorUsuarios::class, 'store'])->name('storeUsuario');

