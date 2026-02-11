<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\ProductController;

route::get('/',[HomeController::class,'home'])->name('home');
route::get('/about',[HomeController::class,'about'])->name('about');
route::get('/product',[HomeController::class,'product'])->name('product');
route::get('contact',[HomeController::class,'contact'])->name('contact');
route::get('product_detail',[HomeController::class,'product_detail'])->name('product_detail');
route::get('Add_product',[ProductController::class,'Add_product'])->name('Add_product');
route::post('create',[ProductController::class,'create'])->name('create');
route::get('view',[ProductController::class,'view'])->name('view');
route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');
route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');
route::put('update/{id}',[ProductController::class,'update'])->name('update');