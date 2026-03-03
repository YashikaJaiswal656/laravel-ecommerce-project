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
                    <li> <a href="{{route('about')}}">View Products</a></li>
                  <li> <a href="{{route('cat')}}">Create categories</a></li>
                </ul>
      </div>
        </div>
    </header>
<div class="heading">
    <h1>View product</h1>
</div>
<div class="table_container">
    <table>
        <tr>
            <th>Product Name</th>
            <th>Categories</th>
            <th>Amount</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($addproduct as $addproduct)
            
       
        <tr>
            <td>{{$addproduct->name}}</td>
            <td>{{$addproduct->cat}}</td>
            <td>{{$addproduct->amount}}</td>
            <td>
                <a href="{{route('edit',$addproduct->id)}}">
                <button class="edit">Edit</button> </a></td>
            <td>
                <a href="{{route('delete',$addproduct->id)}}"><Button class="del">Delete</Button> </a></td>
        </tr>
         @endforeach
    </table>
</div>
    
</body>
</html>