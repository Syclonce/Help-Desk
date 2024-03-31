<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Ticket;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::group(['middleware' => []], function () {
    Route::get('/', function () {
        return view('pages/home');
    })->name('homes');

    // Tambahkan route lainnya di sini
});

Route::get('/ticket', function () {
    return view('pages.ticket');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:Admin|Super-Admin'])->group(function () {
    Route::get('admin', [Admin::class, 'Dashboard'])->name('admin');
    Route::get('admin/profile', [Admin::class, 'profile'])->name('profile');
    Route::resource('admin/posts', 'AdminPostController');
    // ...
});

Route::middleware(['auth', 'verified', 'role:User|Super-Admin'])->group(function () {
    Route::get('ticket', [Ticket::class, 'create'])->name('create');
    Route::post('ticket/creates', [Ticket::class, 'creates'])->name('ticket.creates');
});

Route::get('superadmin', function () {
    return '<h1> Super-Admin </h1>';
})->middleware(['auth', 'verified', 'role:Super-Admin']);


require __DIR__ . '/auth.php';
