<?php

use Illuminate\Support\Facades\Route;
//Se debe agregar la ruta completa de controller en laravel 8.0 y llamar al archivo
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\FormularioController;

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

Route::view('/','home')->name('home');//name para dar nombre a la función
//
Route::view('/quienes-somos','about')->name('about');

//Se pasa el nombre del archivo y del controlador a ocupar, solo deben quedar rutas.

//para ocupar el metodo __invoke
//Route::get('/portfolio',PortfolioController)->name('portfolio');

//Ocupando el metodo index
//Route::get('/portfolio',[\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');

//Ocupando el metodo resource completo
//Route::resource('portfolio',PortfolioController::class);

//Ocupando el metodo apiResource completo
//Route::apiResource('portfolio',PortfolioController::class);

//Route::view('/portfolio','portfolio')->name('portfolio');
Route::view('/contacto','contact')->name('contact');

//Route con post para formulario
Route::post('/contact',[FormularioController::class, 'store'])->name('form.store');

/*Crear ruta para para create.blade.php, tiene que ir antes que del busqueda de proyecto, por que si esta después buscara el 'crear'
como titulo*/
//Route::get('/portfolio/crear',[\App\Http\Controllers\ProjectController::class, 'create'])->name('projects.create');
//
////Ruta para formulario ocupando POST
//Route::post('/portfolio',[\App\Http\Controllers\ProjectController::class, 'store'])->name('projects.store');
//
////Ruta para editar registro
//Route::get('/portfolio/{project}/editar',[\App\Http\Controllers\ProjectController::class, 'edit'])->name('projects.edit');
//
////Crear ruta para ingresar a portfolio.
//Route::get('/portfolio/{project}',[\App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');
//
////Ruta para update
//Route::patch('/portfolio/{project}',[\App\Http\Controllers\ProjectController::class, 'update'])->name('projects.update');
//
////Ruta para delete
//Route::delete('/portgolio/{project}',[\App\Http\Controllers\ProjectController::class,'destroy'])->name('projects.destroy');

//
Route::resource('portfolio','\App\Http\Controllers\ProjectController')
    ->parameters(['portfolio'=>'project'])->names('projects');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
