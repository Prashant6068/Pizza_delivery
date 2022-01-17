
<html>
    <head>
        @include('includes.head')
    </head>

<style>
 
body{
  height: 100vh;
  min-height: 500px;
  background-image: url('https://images.unsplash.com/32/Mc8kW4x9Q3aRR3RkP5Im_IMG_4417.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
  span {

    font-weight: 500;
  }

  .card {
    display: flex;
    justify-content: center;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    margin-top: 90px;
    width: 500px;
    margin-left: 450px;

  }
  h4{
      font-weight: bolder;
      letter-spacing: 1px;
      font-family:Arial, Helvetica, sans-serif;

  }
</style>
<div class="card d-flex justify-content-center">

  <div class="card-header bg-light">
    <h4 class="text-danger">PizzaHut</h4>
  </div>
  <div class="card-body ">
    <h5 class="card-title">Order has been placed successfully!</h5>

    <div class="alert alert-success">You will recieve notification by email with orders</div>

    <a href="menu" class="btn btn-danger">Go and order some more</a>
    <a href="/logout" class="btn btn-success">Logout</a>
  </div>

</div>
</body>
</html>

  