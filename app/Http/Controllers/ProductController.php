<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\Cat;
class ProductController extends Controller
{
    public function Add_product(){
        $addcat=Cat::all();
     return view('dashboard.index',compact('addcat'));
    }
    public function create(Request $request){
        $validated =$request->validate([
         'name'=>'required',
         'cat'=>'required',
         'amount'=> 'required',
         'description'=>'required',
         'detail'=> 'required',
         'file'=>'required'
        ]);
        $imageName= time() . '.' . $request->file->extension();
        $request->file->move(public_path('images'),$imageName);
        $addproduct =new product();
        $addproduct->name=$validated['name'];
        $addproduct->cat=$validated['cat'];
        $addproduct->amount=$validated['amount'];
        $addproduct->description=$validated['description'];
        $addproduct->detail=$validated['detail'];
        $addproduct->file=$imageName ;
        $addproduct-> save();
        return back()->with('sucess, insterted ');
    }
    public function view(){
        $addproduct =product::all();
        return view('dashboard.view',compact('addproduct'));
    }
    public function delete($id){
     $addproduct=product::findorfail($id);
     $addproduct->delete();
     return back()->with('sucess','complete');
    }
    public function edit(Request $request,$id){
    $addproduct=product::findorfail($id);
    return view('dashboard.edit',compact('addproduct'));
    }
    public function update(Request $request,$id){
        $validated =$request->validate([
          'name'=>'required',
          'cat'=>'required',
          'amount'=>'required',
          'description'=>'required',
          'detail'=>'required',
          'file'=>'required',
        ]);
        $addproduct=product::findorfail($id);
        $addproduct->name=$validated['name'];
        $addproduct->cat=$validated['cat'];
        $addproduct->amount=$validated['amount'];
        $addproduct->description=$validated['description'];
        $addproduct->detail=$validated['detail'];
        $addproduct->file=$validated['file'];
        $addproduct->save();
        return redirect()->route('view')->with('success','Updated successfully');

    }
    public function cat(){
        return view('dashboard.cat');
    }
    public function create_cat(Request $request){
    $Validated=$request->validate([
       'cat'=>'required',
       'slug'=>'required'
    ]);
    $addcat=new Cat();
    $addcat->cat=$Validated['cat'];
    $addcat->slug=$Validated['slug'];
    $addcat->save();
    return back()->with('suc','suc');
    }
    public function roles(){
        return view('dashboard.roles');
    }
}
