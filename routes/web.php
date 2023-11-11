<?php

use App\Http\Controllers\contactUsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [contactUsController::class, 'index'])->name('contact.us');
Route::post('/contact-us', [contactUsController::class, 'send'])->name('contact.send');