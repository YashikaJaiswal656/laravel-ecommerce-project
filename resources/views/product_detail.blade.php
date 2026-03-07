<x-app-layout>
@section('title','product detail')
@section('content')
<link rel="stylesheet" href="{{asset('css/details.css')}}">

<div class="container-bg">
    <div class="content">

        <h1>Single Product Page</h1>
        <p>Awesome & Creative HTML CSS layout by TemplateMo</p>
    </div>
</div>
<div class="dotted"></div>
    <div class="collection">

      <div class="cont_coll_two">
        <div class="explore-two">
         <img src="{{asset('images/'.$show_product->file)}}" alt="">
        </div>
        <div class="explore-one">
          <h2>
            {{$show_product->name}}
          </h2>
          <p>{{$show_product->amount}}</p>
          <div class="dottedd"></div>
          <p>
            {{$show_product->detail}}
          </p>
          <span> <i class="fa fa-quote-left"></i> <br> {{$show_product->description}}</span>
          
          <div class="dottedd"></div>
          <div class="icons">
            <div class="icon"><i class="fa-brands fa-linkedin"></i></div>
            <div class="icon"><i class="fa-brands fa-github"></i></div>
            
          </div>
        </div>
        
      </div>
      
    </div>


  </x-app-layout>