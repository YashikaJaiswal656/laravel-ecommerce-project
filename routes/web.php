<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

route::get('/',[HomeController::class,'home']);
route::get('/about',[HomeController::class,'about']);
route::get('/product',[HomeController::class,'product']);
route::get('contact',[HomeController::class,'contact']);