<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;

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

Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [UserController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');



//Income
Route::get('income', [IncomeController::class, 'income']);
Route::get('addIncome', [IncomeController::class, 'addIncome']);
Route::get('addIncome', [IncomeController::class, 'addIncome']);
Route::post('incomeFrom', [IncomeController::class, 'incomeFrom']);
Route::get('incomeView', [IncomeController::class, 'incomeView']);
Route::get('deleteIncome/{id}', [IncomeController::class, 'deleteIncome']);
Route::get('editIncome/{id}', [IncomeController::class, 'editIncome']);
Route::post('editIncomeFrom/{id}', [IncomeController::class, 'editIncomeFrom']);
Route::get('filterIncome', [IncomeController::class, 'filterIncome']);
Route::get('dateIncome', [IncomeController::class, 'dateIncome']);
Route::post('filterByDateIncome', [IncomeController::class, 'filterByDateIncome']);
Route::get('amountIncomeAsc', [IncomeController::class, 'amountIncomeAsc']);
Route::get('amountIncomeDsc', [IncomeController::class, 'amountIncomeDsc']);
Route::get('filterIncomeCat', [IncomeController::class, 'filterIncomeCat']);
Route::post('incomeFilterByCat', [IncomeController::class, 'incomeFilterByCat']);

//expanse
Route::get('expanse', [ExpenseController::class, 'expanse']);



