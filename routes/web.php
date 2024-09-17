<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/{slug}', [InvitationController::class, 'index'])->name('invitation.index');

require __DIR__ . '/auth.php';
