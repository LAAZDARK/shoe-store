<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;

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
// })->name('home');


Route::get("/", [PagesController::class, "viewHome"])->name('home');

Route::get("/registro", [PagesController::class, "viewRegister"])->name('page.register');
Route::post("/register", [AuthController::class, "register"])->name('register');
Route::get("/login", [PagesController::class, "viewLogin"])->name('view.login');
Route::post("/login", [AuthController::class, "login"])->name('login');

Route::get("/perfil", [PagesController::class, "viewProfile"])->name('page.perfil');

Route::get("/factura", [PagesController::class, "viewBilling"])->name('page.billing');
Route::get("/user/{id}", [PagesController::class, "show"])->name('page.user.show');
Route::post("/billing", [PagesController::class, "store"])->name('page.billing.create');
Route::get("/generar-factura/{id}", [PagesController::class, "billing"])->name('page.billing.generate');
