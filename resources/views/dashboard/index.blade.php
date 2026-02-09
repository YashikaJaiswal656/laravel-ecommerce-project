<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add product</title>
    <link rel="stylesheet" href="{{asset('css/dash.css')}}">
</head>
<body>
     <header>
        <div class="nav">
            <div class="container">
                <img src="https://themewagon.github.io/hexashop/assets/images/logo.png" alt="">
                <ul>
                    <li><a href="{{route('home')}}">Home</a> </li>
                    <li> <a href="{{route('about')}}">About Us</a></li>
                    <li> <a href="{{route('product')}}">Products</a></li>
                    <li> <a href="{{route('contact')}}">Contact</a></li>
                </ul>
      
    
                        <div class="hide"> <i class="fa fa-bars menu_icon " onclick="icon()"></i></div>

            </div>
        </div>
    </header>
    <div class="side_bar">
                    <ul>
                   
                    <li><a href="{{route('home')}}">Home</a> </li>
                    <li> <a href="{{route('about')}}">About Us</a></li>
                    <li> <a href="{{route('product')}}">Products</a></li>
                    <li> <a href="{{route('contact')}}">Contact</a></li>
                </ul>
</div>

<div class="heading">
    <h1>Add product</h1>
    <p>Fill the form to insert the product </p>
</div>
    <div class="container_form">
       <form action="">
        @csrf
        <div class="form_label">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter the product name">
        </div>
        <div class="form_label">
            <label for="">Categories</label>
           <input type="text" name="cat" placeholder="Enter the product categories">
        </div>
        <div class="form_label">
            <label for="">Amount</label>   
            <input type="number" name="amount" placeholder="Enter the amount of product">
        </div>
        <div class="form_label">
            <label for="">Description</label>
            <input type="text" name="description" placeholder="enter the short description">
        </div>
        <div class="form_label">
            <label for="">Details</label>
            <input type="text" name="detail" placeholder="enter he details of product">
        </div>
        <div class="form_label">
            <label for="">Upload images</label>
            <input type="file" name="file" id="">
        </div>
       <button>Submit</button>
       </form>
    </div>
</body>
</html>