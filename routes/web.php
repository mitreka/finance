<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;

Route::get('/', [AccountController::class, 'index']);
Route::resource('accounts', AccountController::class)->only(['index','create','store']);
Route::resource('transactions', TransactionController::class)->only(['index','create','store']);
