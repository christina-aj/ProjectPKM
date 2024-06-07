<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CoupunController;
use App\Http\Controllers\Frontend\ShopDetailController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\HistoryController;
use App\Http\Controllers\Frontend\InvoiceController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [HomeController::class,"index"]);

Route::get("/contact", [ContactController::class,"index"]);
Route::get("/shop-detail", [ShopDetailController::class,"index"]);
Route::post("/shop-detail", [ShopDetailController::class, "store"]); 
Route::get("/login", [LoginController::class,"index"]);
Route::get("/register", [RegisterController::class,"index"])->name('index');
// Route::get("/register", [RegisterController::class,"store"])->name('index.store');
Route::get("/profile", [UserController::class,"index"]);
Route::get("/profile/setting", [UserController::class,"index"]);
Route::get("/profile/voucher", [CoupunController::class,"index"]);
Route::get("/profile/history", [HistoryController::class,"index"]);
Route::get("/shop-detail/invoice", [InvoiceController::class,"index"]);
Route::get("/profile/history/invoice", [InvoiceController::class,"index"]);