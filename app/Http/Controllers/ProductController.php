<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Add_product(){
     return view('dashboard.index');
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
        $addproduct =new product();
        $addproduct->name=$validated['name'];
        $addproduct->cat=$validated['cat'];
        $addproduct->amount=$validated['amount'];
        $addproduct->description=$validated['description'];
        $addproduct->detail=$validated['detail'];
        $addproduct->file=$validated['file'];
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
}
