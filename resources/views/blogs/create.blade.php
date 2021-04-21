@extends('blogs.layout')

  <style>
    .header,
    .footer{
      background-color:blue;
      height:200px;
    }
    
  </style>
  <body>
    
  @section('content')
      
  <div class="container">
  <div class="form-group">
  <a href="{{route('blogs.index')}}" class="btn btn-info">Back</a>
  </div>
  
  

  
  @if ($errors->any())
  <div class="alert alert-danger">
  @foreach ($errors->all() as $item)
  
     <li>{{$item}}</li> 
   
  @endforeach
</div>

@endif
  <form action="{{route ('blogs.store')}}" method="POST">
   
   
    @csrf


  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" id="" class="form-control"  ><br>
  </div>
  <div class="form-group">
    <label for="body">Body:</label>
    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <input type="submit" value="Save" class="btn btn-primary">
  </form>
  </div>

  @endsection

    
  </body>
  </html>
  </body>

