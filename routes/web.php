<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::livewire('/', 'pages::beranda');

Route::livewire('/tentang/profil', 'pages::profil')
    ->name('profil');

Route::livewire('/publik/jadwal-dokter', 'pages::jadwal-dokter')
    ->name('jadwal-dokter');

Route::livewire('/publik/tempat-tidur', 'pages::tempat-tidur')
    ->name('tempat-tidur');

require __DIR__.'/settings.php';
