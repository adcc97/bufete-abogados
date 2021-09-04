<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CasesController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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


Route::get('/',[UserController::class,'index']);
Route::post('users',[UserController::class, 'store'])->name('users.store');
Route::delete('users/{user}', [UserController::class,'destroy'])->name('users.destroy');
Route::get('/',[CasesController::class,'index']);
Route::post('cases',[CasesController::class, 'store'])->name('cases.store');
Route::delete('cases/{cases}', [CasesController::class,'destroy'])->name('cases.destroy');
Route::get('/',[LawyersController::class,'index']);
Route::post('lawyers',[LawyersController::class, 'store'])->name('lawyers.store');
Route::delete('lawyers/{lawyers}', [LawyersController::class,'destroy'])->name('lawyers.destroy');
