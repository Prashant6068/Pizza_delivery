
   

 
@extends('master')
@section('content')


<style>
  /* body{
    background: #E0E0E0;
  } */
  body{
  height: 100vh;
  min-height: 500px;
  background-image: url('https://images.unsplash.com/32/Mc8kW4x9Q3aRR3RkP5Im_IMG_4417.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
      .p2{
        box-shadow: 5px 5px 10px black;
        
    }
    .form-si{
   width: 500px;
   
    }
   </style>
<div class="container my-5 pt-5 c1 d-flex justify-content-center">
            <!-- @if(Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif -->
       <form method="post" action="/update"" class="form-si p-4 bg-white p2" enctype="multipart/form-data">
       @if(Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
       <h3 class="text-dark mb-4">Edit Profile:</h3>
           @csrf()
          
   
 
           <div class="form-group ">
           Email <input type="email" class="form-control" name="email" value="{{$data->email}}">
         @if($errors->has('email'))
         <label class="text-danger">{{$errors->first('email')}}</label>
         @endif
         </div>
      
    
           <div class="form-group ">
           Password <input type="text" class="form-control" name="pass" value="{{$data->password}}">
         @if($errors->has('pass'))
         <label class="text-danger">{{$errors->first('pass')}}</label>
         @endif
         </div>
      
    
           <div class="form-group ">
           Name <input type="text" class="form-control" name="ename" value="{{$data->name}}">
         @if($errors->has('ename'))
         <label class="text-danger">{{$errors->first('ename')}}</label>
         @endif
         </div>
         <div class="form-group ">
         Address <textarea class="form-control" name="address">{{$data->address}}</textarea>
         @if($errors->has('address'))
         <label class="text-danger">{{$errors->first('address')}}</label>
         @endif
         </div>
     
          
        
      

         <div class="text-center">
             <input type="hidden" value="{{$data->id}}" name="uid">
         <input type="submit" class="btn btn-danger mt-3" name="sub" value="update"/>
         <a href="/menu" class="btn btn-secondary mt-3">Back</a>
         </div>
       </form>
     @stop