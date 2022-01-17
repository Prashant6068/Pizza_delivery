

@include('land')
<!doctype html>
<html lang="en">

<head>
    @include('includes.head')
    <style>
        body {
            height: 100vh;
  min-height: 500px;
  background-image: url('https://png.pngtree.com/background/20210711/original/pngtree-gourmet-pizza-big-sale-texture-hand-painted-black-banner-picture-image_1130712.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
            /* background: #ededed; */
        }

        .form-si {
            width: 100%;
            max-width: 420px;
            margin: auto;


        }

        .form {

            width: 100%;
            max-width: 400px;
            margin: auto;
            height: 400px;
        }

        .form {
            background-color: #ecf0f3;
            border-radius: 15px;

            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;

            background: white;
        }

        .container {
            margin-top: 90px;
        }





        button {
            width: 500px;
        }
    </style>
</head>

<body>

    <div class="container">

        <form class="form p-4 my-5 bg-white border " method="post" action="home" enctype="multipart/form-data">
            @csrf()
            <div class="">
                @if(Session::has('message'))

                <div class="alert alert-danger p1 text-center">{{Session::get('message')}}</div>

                @endif
                <h3 class="text-center">Login</h3><br>
                <div class="row">

                    <div class="col-md">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                            @if($errors->has('email'))
                            <label class="text-danger">{{$errors->first('email')}}</label>
                            @endif

                        </div>

                        <div class="form-group ">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="pass" placeholder="Enter password">
                            @if($errors->has('pass'))
                            <label class="text-danger">{{$errors->first('pass')}}</label>
                            @endif
                        </div><br>





                        <div class="row">
                            <div class="col-sm mb-2">
                                <button type="submit" class="btn btn-danger btn-block" name="sub">Login</button>
                            </div>
                            <div class="col-sm mb-2">
                                <button type="submit" class="btn btn-dark btn-block"><a href="/register" class="text-decoration-none text-white">Register</a></button>
                            </div>
                        </div>
        </form>
    </div>
    </div>



    @include('includes.foot')


</body>

</html>