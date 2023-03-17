<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\GrapheController;
use App\Http\Controllers\MachinesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Routes related to users
Route::get('/', [UserController::class, "show"])->name('user.show');
Route::get('/test', [UserController::class, "test"])->name('user.test');
Route::get('/superadmin', [UserController::class, "superadmin"])->name('user.superadmin');


Route::post('/register',[UserController::class,"register"])->name('user.register');
Route::post('/login',[UserController::class,"login"])->name('user.login');
Route::post('/logout',[UserController::class,"logout"])->name('user.logout');


Route::get('/machines', [MachineController::class, 'indexm'])->name('machines.indexm');
Route::get('/machines/create', [MachineController::class, 'create'])->name('machines.create');
Route::post('/machines', [MachineController::class, 'store'])->name('machines.store');
//Route::get('/machines/{machine}', [MachineController::class, 'show'])->name('machines.show');
Route::get('/machines/{id}/edit', [MachineController::class, 'edit'])->name('machines.edit');
Route::put('/machines-update/{id}', [MachineController::class, 'update'])->name('machines.update');
Route::delete('/machines/{id}', [MachineController::class, 'destroy'])->name('machines.destroy');



Route::get('/salles',[SalleController::class,"index"])->name('salles.index');
Route::get('/salles/{id}/edit',[SalleController::class,"edit"] )->name('salles.edit');
Route::get('/salles-create',[SalleController::class,"create"])->name('salles.create');
Route::post('/salles-store',[SalleController::class,"store"])->name('salles.store');
Route::put('/salles-update/{id}',[SalleController::class,"update"])->name('salles.update');
Route::delete('/salles/{id}',[SalleController::class,"destroy"])->name('salles.destroy');



Route::get('/listeusers', [SuperAdminController::class, "index"])->name('user.indexsuper');
Route::delete('/users/{id}', [SuperAdminController::class, 'destroy'])->name('users.destroy');
Route::get('/users', [SuperAdminController::class, 'index'])->name('users.index');
Route::put('/user/activer/{id}', [SuperAdminController::class, 'activer'])->name('user.activer');
Route::put('/user/desactiver/{id}', [SuperAdminController::class, 'desactiver'])->name('user.desactiver');
Route::get('/createusers', [SuperAdminController::class, "create"])->name('user.create');
Route::post('/storeusers', [SuperAdminController::class, "store"])->name('user.store');


Route::get('/graphique', [GrapheController::class, 'index'])->name('graphique');
Route::get('/listem', [MachinesController::class, 'index'])->name('machines.index');

