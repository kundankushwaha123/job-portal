<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Job\JobRoleController;
use App\Http\Controllers\Job\JobCategoryController;
use App\Http\Controllers\Job\JobPostController;


Route::get('/', function () {
    return view('admin.auth.login');
})->name('login');

Route::get('/register', function () {
    return view('admin.auth.register');
})->name('register');

// Route::get('admin
Route::post('/login-data', [AuthController::class, 'loginData'])->name('login-data');
Route::post('/register-data', [AuthController::class, 'RegisterData'])->name('register-data');



// Route::middleware('auth')->prefix('admin')->group(function () {
Route::middleware('auth')->group(function () {

    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');


    route::get('job/post', [JobPostController::class, 'create'])->name('job-post');
    route::post('job/post/store', [JobPostController::class, 'store'])->name('jobpost.store');


    route::get('/job/category', [JobCategoryController::class, 'index'])->name('job-category');
    Route::post('jobcategory/store', [JobCategoryController::class, 'store'])->name('jobcategory.store');
    Route::put('jobcategory/update/{id}', [JobCategoryController::class, 'update'])
        ->name('jobcategory.update');
    Route::delete('jobcategory/destroy/{id}', [JobCategoryController::class, 'destroy'])
        ->name('jobcategory.destroy');


    route::get('job/role', [JobRoleController::class, 'index'])->name('job-role-category');
    Route::post('jobrole/store', [JobRoleController::class, 'store'])->name('jobrole.store');
    Route::Put('jobrole/update', [JobRoleController::class, 'update'])->name('jobrole.update');

    Route::get('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');
});
