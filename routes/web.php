<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

route::get('/',[HomeController::class,'home']);
route::get('/about',[HomeController::class,'about']);