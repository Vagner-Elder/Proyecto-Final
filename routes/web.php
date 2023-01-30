<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;

use App\Models\Venta;
use App\Models\User;
use App\Models\Articulo;

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
    return view('layouts.login');
});

Route::resource('articulo',ArticuloController::Class)->middleware('auth');
Route::resource('venta',VentaController::Class)->middleware('auth');
Route::resource('users',UserController::Class)->middleware('auth');

/*añadir ->middleware('auth')  para que no acceda sin autenticar*/
/*++++++++++++++++++++++++++++++ RUTAS PARA EL LOGIN +++++++++++++++++++++*/
Route::view('/login','layouts.login')->name('login'); /*--pagina donde quiero llegar*/
Route::view('/menu','layouts.menu')->name('menu')->middleware('auth');

Route::post('/inicio',[loginController::class,'login'])->name('inicio');
Route::get('/logout',[loginController::class,'logout'])->name('logout');


/*++++++++++ RUTAS PARA EL PDF +++++++++++++++++++++++++++*/
Route::get('/pdf1/{id}', function ($id) {        
    $venta= Venta::find($id);
    $detalles=$venta->articulos;
    $pdf = PDF::loadView('venta.pdf1',compact('venta','detalles'));
    return $pdf->stream('invoice.pdf');
    
})->name('pdf1');