<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PurchaseController;

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
Route::get("/login", [PagesController::class, "viewLogin"])->name('login');
Route::post("/login", [AuthController::class, "login"])->name('auth.login');
Route::get("/logout", [AuthController::class, "logout"])->name('logout');

Route::get("/identidad", [PagesController::class, "viewIdentity"])->name('page.identity');
Route::get("/privacidad", [PagesController::class, "viewPrivacy"])->name('page.privacy');
Route::get("/terminos", [PagesController::class, "viewTerms"])->name('page.terms');
Route::get("/nosotros", [PagesController::class, "viewAbout"])->name('page.about');
Route::get("/contacto", [PagesController::class, "viewContact"])->name('page.contact');
Route::post("/contact", [PagesController::class, "storeContact"])->name('contact.store');
Route::get("/productos", [PagesController::class, "viewStore"])->name('page.store');
Route::get("/detalles/{id?}", [PagesController::class, "viewProductDetails"])->name('page.product.details');

Route::middleware('auth:web')->group(function () {
    Route::get("/perfil", [PagesController::class, "viewProfile"])->name('page.perfil');
    Route::get("/perfil/actualizar", [UserController::class, "show"])->name('page.perfil.show');
    Route::post("/perfil/update", [UserController::class, "update"])->name('page.perfil.update');

    Route::get("/carrito", [PagesController::class, "viewShoppingCart"])->name('page.shopping.cart');

    Route::get("/checkout", [PagesController::class, "viewCheckout"])->name('pay.checkout');
    Route::post("/payment", [PaymentController::class, "storePayment"])->name('pay.payment');

    Route::get("/payment/approval", [PaymentController::class, "approval"])->name('page.approval');
    Route::get("/payment/cancelled", [PaymentController::class, "cancelled"])->name('page.cancelled');

    Route::get("/user", [UserController::class, "index"])->name('user.index');

    Route::get("/factura", [PagesController::class, "viewBilling"])->name('page.billing');
    Route::get("/user/{id}", [PagesController::class, "show"])->name('page.user.show');
    Route::post("/billing", [PagesController::class, "store"])->name('page.billing.create');
    Route::get("/generar-factura/{id}", [PagesController::class, "billing"])->name('page.billing.generate');

    Route::resource('purchase', PurchaseController::class)->names('purchase');
    Route::get("/count-product", [PurchaseController::class, "conutProducts"])->name('count.product');
    Route::get("/sum-product", [PurchaseController::class, "sumTotalProduct"])->name('sum.product');

});

Route::get("/productos/agregar", [PagesController::class, "viewProduct"])->name('page.product');
Route::post("/product", [PagesController::class, "storeProduct"])->name('store.product');

Route::get("/product/list", [PagesController::class, "listProduct"])->name('list.product');
