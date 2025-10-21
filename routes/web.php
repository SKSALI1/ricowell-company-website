<?php

use App\Livewire\Admin\Companydetails;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Ui\Topbar;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\EditCompanydetails;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/company-details', Companydetails::class);
Route::get('/admin/company-details/edit/{companydetail}', EditCompanydetails::class);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
