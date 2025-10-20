<?php

use App\Livewire\Admin\Companydetails;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Ui\Topbar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/company-details', Companydetails::class);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
