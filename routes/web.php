<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\PatientController;

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
Route::get('/about',[FrontEndController::class,'front'])->name('about');
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/contact',[FrontEndController::class,'index'])->name('contact');
// Route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');
Route::post('/patient/store',[PatientController::class,'store'])->name('patient.store');