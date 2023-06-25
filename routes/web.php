<?php

use App\Http\Controllers\BudgetControllerAcc;
use App\Http\Controllers\UangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\LoginController;
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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/sesi', [LoginController::class, 'index'])->middleware('isTamu');
Route::post('/sesi/login', [LoginController::class, 'login'])->middleware('isTamu');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/sesi/register', [LoginController::class, 'register']);
Route::post('/sesi/create', [LoginController::class, 'create'])->middleware('isTamu');

Route::get('/', [BudgetController::class, 'index']);
Route::post('/hasil', [BudgetController::class,'hitung']);

Route::get('/budgetAcc', [BudgetControllerAcc::class, 'index']);
Route::post('/hasillAcc', [BudgetControllerAcc::class, 'hitung']);

Route::resource('uang',UangController::class)->middleware('isLogin');


// Route::get('uang', [UangController::class, 'index']);
// Route::get('uang/{nama}', [UangController::class, 'detail'])->where('id', '[0-9]+');