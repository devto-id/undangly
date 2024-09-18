<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/terms-and-conditions', [HomeController::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');

Route::get('/{slug}', [InvitationController::class, 'index'])->name('invitation.index');

require __DIR__ . '/auth.php';
