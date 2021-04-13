<?php
use App\Http\Controllers\ProfesionalController;
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
    return view('contenido');
});
Route::get('/Profesional',[ ProfesionalController::class,'index']); 
Route::post('/Profesional/registrar',[ ProfesionalController::class,'store']); //Registrar
Route::put('/Profesional/actualizar',[ ProfesionalController::class,'update']);//Actualizar
Route::put('/Profesional/desactivar',[ ProfesionalController::class,'desactivar']); //Desactivar
Route::put('/Profesional/activar',[ ProfesionalController::class,'activar']); //Activar

