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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::post("/registro", [AuthController::class, "register"])->name('register');
Route::get("/factura", [PagesController::class, "viewBilling"])->name('page.billing');
Route::get("/user/{id}", [PagesController::class, "show"])->name('page.user.show');
Route::post("/billing", [PagesController::class, "store"])->name('page.billing.create');
Route::get("/generar-factura/{id}", [PagesController::class, "billing"])->name('page.billing.generate');
