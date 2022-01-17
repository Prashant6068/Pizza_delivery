@extends('master')
@section('content')


<style>
    /* body{
    background: #E0E0E0;
  } */
    body {
        height: 100vh;
        min-height: 500px;
        background-image: url('https://images.unsplash.com/32/Mc8kW4x9Q3aRR3RkP5Im_IMG_4417.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .p2 {
        box-shadow: 5px 5px 10px black;

    }

    .form-si {
        width: 500px;

    }
</style>
<div class="container my-5 pt-5 c1 d-flex justify-content-center">
    @if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
    <form method="post" action="/insidecart"" class=" form-si p-4 bg-white p2" enctype="multipart/form-data">
        <h3 class="text-dark mb-4">Add cart:</h3>
        @csrf()
        <div class="m-auto text-center">
            <img src='{{url("uploads/$menu->image")}}' height="200" width="200" />
        </div>


        <div class="form-group ">
            Name <input type="text" class="form-control" name="name" value="{{$menu->name}}">
            @if($errors->has('name'))
            <label class="text-danger">{{$errors->first('name')}}</label>
            @endif
        </div>


        <div class="form-group ">
            Price <input type="text" class="form-control" name="price" value="{{$menu->price}}">
            @if($errors->has('price'))
            <label class="text-danger">{{$errors->first('price')}}</label>
            @endif
        </div>


        <div class="form-group ">
            Quantity <input type="text" class="form-control" name="quantity">
            @if($errors->has('quantity'))
            <label class="text-danger">{{$errors->first('quantity')}}</label>
            @endif
        </div>





        <input type="hidden" value="{{$menu->image}}" name="image" />
        <input type="hidden" value="{{$menu->id}}" name="mid" />
        <!-- <div class="text-center">
         <input type="submit" class="btn btn-warning btn-block" name="sub" value="update"/>
         </div> -->
        <div class="text-center">
            <input type="submit" class="btn btn-danger mt-3" name="sub" value="Update" />
            <a href="/menu" class="btn btn-secondary mt-3">Back</a>
        </div>
    </form>
    @stop