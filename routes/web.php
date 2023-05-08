<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\profilController;
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
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [profilController::class, 'index'])->name('profil');
Route::get('/pengalaman', [PengalamanController::class, 'index'])->name('pengalaman'); 
Route::get('hobi/{slug}', [HobiController::class, 'show'])
    ->name('detail');  

Route::get('/hobi', [HobiController::class, 'index'])->name('hobi');