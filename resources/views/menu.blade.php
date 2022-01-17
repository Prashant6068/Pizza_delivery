@extends('master')
@section('content')
<style>
   body {

background-image: url('https://images.unsplash.com/32/Mc8kW4x9Q3aRR3RkP5Im_IMG_4417.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YmFja2dyb3VuZCUyMHBpenphJTIwaW1hZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60');
background-size: cover;

background-repeat: no-repeat;
}
  .container{
    margin-top: 100px;
    


  }
  .card:hover{
    background:#ffa07a;


  }
</style>

    <section class="container ">
        <div class="row">
    @foreach($menu as $i)
    <div class="col-4 mb-2 mt-2">
    <div class="card" style="height:400px;width:350px;">
  <img class="card-img-top" src='{{url("uploads/$i->image")}}' height="200px" alt="Card image cap">
  <div class="card-body ">
    <p class="card-text">{{$i->name}}</p>
    <p class="card-text">&#8377; {{$i->price}}</p>
  <a href="/addcart/{{$i->id}}" class="btn btn-danger mx-auto">Add to cart</a>
  </div>
  </div>
  </div>
@endforeach
</div>
    </section>
   @stop