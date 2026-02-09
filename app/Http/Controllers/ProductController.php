<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Add_product(){
     return view('dashboard.index');
    }
    public function create(){
        $valided =$request->validate([
         'name'=>'required',
         'cat'=>'required',
         'amount'=> 'required',
         'description'=>'required',
         'detail'=> 'required',
         'file'=>'required'
        ]);
    }
}
