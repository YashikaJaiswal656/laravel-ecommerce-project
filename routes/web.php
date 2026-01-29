<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

route::get('/',[HomeController::class,'home'])->name('home');
route::get('/about',[HomeController::class,'about'])->name('about');
route::get('/product',[HomeController::class,'product'])->name('product');
route::get('contact',[HomeController::class,'contact'])->name('contact');
route::get('product_detail',[HomeController::class,'product_detail'])->name('product_detail');