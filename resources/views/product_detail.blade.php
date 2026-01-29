@extends('layouts.app')
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
         <img src="https://themewagon.github.io/hexashop/assets/images/single-product-01.jpg" alt="">
        </div>
        <div class="explore-one">
          <h2>
            New Green Jacket
          </h2>
          <p>$75.00</p>
          <div class="dottedd"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod kon tempor incididunt ut labore.
          </p>
          <span> <i class="fa fa-quote-left"></i> <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiuski smod. </span>
          
          <div class="dottedd"></div>
          <div class="icons">
            <div class="icon"><i class="fa-brands fa-linkedin"></i></div>
            <div class="icon"><i class="fa-brands fa-github"></i></div>
            
          </div>
        </div>
        
      </div>
    </div>


@endsection