<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
route::get('/',[HomeController::class,'home'])->name('home');
route::get('/about',[HomeController::class,'about'])->name('about');
route::get('/product',[HomeController::class,'product'])->name('product');
route::get('contact',[HomeController::class,'contact'])->name('contact');
route::get('product_detail/{id}',[HomeController::class,'product_detail'])->name('product_detail')->middleware(['auth']);
route::get('Add_product',[ProductController::class,'Add_product'])->name('Add_product');
route::post('create',[ProductController::class,'create'])->name('create');
route::get('view',[ProductController::class,'view'])->name('view');
route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');
route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');
route::put('update/{id}',[ProductController::class,'update'])->name('update');
route::get('cat',[ProductController::class,'cat'])->name('cat');
route::post('create_cat',[ProductController::class,'create_cat'])->name('create_cat');
route::post('contact_send',[ContactController::class,'sendmail'])->name('contact_send');
route::get('roles',[ProductController::class,'roles'])->name('roles');
route::post('role_insert',[ProductController::class,'role_insert'])->name('role_insert');
route::get('role_view',[ProductController::class,'role_view'])->name('role_view');
require __DIR__.'/auth.php';
