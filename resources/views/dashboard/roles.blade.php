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
    <h1>Add Roles and permission </h1>
    <p>Fill the form to insert the product </p>
</div>
    <div class="container_form">
       <form  method="POST" action="{{route('role_insert')}}">
        @csrf
        <div class="form_label">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter  name">
        </div>
        
        <div class="form_label">
            <label for="">Email</label>   
            <input type="email" name="email" placeholder="Enter email">
        </div>
        <div class="form_label">
            <label for="">Role</label>
            <select name="role" id="">
                <option value="">Select role</option>
                <option value="admin">Admin</option>
                <option value="manager">Manager</option>
            </select>
        </div>
        <div class="form_label">
            <label for="">Permission</label>
            <div class="label">
            <input type="checkbox" name="permission[]" value="create_cat" id="">
                <label for="">Create Category</label>
            </div>
            <div class="label">
            <input type="checkbox" name="permission[]" value="insert_product" id="">
                <label for="">Insert Product</label>
            </div>
            <div class="label">
                
            <input type="checkbox" name="permission[]" value="edit_roles" id="">
                <label for="">Roles permission insert</label>              
            </div>
            <div class="label">
                
            <input type="checkbox" name="permission[]" value="update">
                <label for="">Update/Delete product</label>
            </div>
        </div>
       <button>Submit</button>
       </form>
    </div>
</body>
</html>