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
                    <li><a href="{{route('Add_product')}}">Create</a> </li>
                    <li> <a href="{{route('view')}}">View Products</a></li>
                    <li> <a href="{{route('cat')}}">Create categories</a></li>
                  <li><a href="{{route('roles')}}">Roles Permission</a></li>

                  
                </ul>
            </div>
        </div>
    </header>
    

<div class="heading">
    <h1>Add product</h1>
    <p>Fill the form to insert the product </p>
</div>
    <div class="container_form">
       <form action="{{route('create_cat')}}" method="POST">
        @csrf
        <div class="form_label">
            <label for="">Categories</label>
            <input type="text" oninput="generate_slug()" class="cat" name="cat" placeholder="Enter the product name">
        </div>
        <div class="form_label">
            <label for="">Slug</label>
           <input type="text" class="slug" name="slug" placeholder="Enter the product categories">
        </div>
       <button>Submit</button>
       </form>
    </div>
</body>
<script>
    const generate_slug=()=>{
    const cat=document.querySelector(".cat").value;
    document.querySelector('.slug').value=cat.replace(/\s+/g,'-');
    }
</script>
</html>
