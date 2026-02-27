<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactmail;
class ContactController extends Controller
{
    public function sendmail(Request $request){
        
      $data=$request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required'
      ]);
      Mail::to('jaiswalyashika79@gmail.com')->send(new contactmail($data));
      return back()->with('sucess','sucess');
    }
}
