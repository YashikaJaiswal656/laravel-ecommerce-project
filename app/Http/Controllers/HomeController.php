<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('index');
    }
    public function about(){
        return view('About');
    }
    public function product(){
        $showproducts=Product::all();
        return view('product',compact('showproducts'));
    }
    public function contact(){
        return view('email.contact');
    }
    public function product_detail(){
        return view('product_detail');
    }
}
