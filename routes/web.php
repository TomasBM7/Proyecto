<?php
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DespensaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\MultaController;
use App\Http\Controllers\ProveedorController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::resource('client', ClientController::class);
    Route::resource('personal', PersonalController::class);
    Route::resource('turno', TurnoController::class);
    Route::resource('cargo', CargoController::class);
    Route::resource('despensa', DespensaController::class);
    Route::resource('estado', EstadoController::class);
    Route::resource('multa', MultaController::class);
    Route::resource('proveedor', ProveedorController::class);
    Route::get('/dashboard', function () {
    return view('dashboard');
    })->name('dashboard');
    Route::get('/confi', function () {
        return view('confi');
        })->name('confi');
});
