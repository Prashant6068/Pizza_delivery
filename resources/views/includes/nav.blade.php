<!doctype html>
<html lang="en">

<!-- head tag -->
@include('includes.head')
<style>
    .p4 {
        font-weight: bolder;
        font-style: italic;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    strong {
        border: 1px solid black;
        background: black;
        color: white;
    }

    i {
        font-size: larger;
    }
</style>

<body class="body">


    <section class="">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">
            <a class="navbar-brand mx-3" href="#"><img src="https://iconape.com/wp-content/files/qh/236342/svg/pizza-hut2010-north-america-seeklogo.com.svg" width="80px" alt=""></a>
            <!-- <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-3 p4">
                        <a class="nav-link text-bold" href="#"><i class="fas fa-bars text-warning"></i>&nbsp;Dashboard</a>
                    </li>
        </ul> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><i class="fas fa-envelope"></i>&nbsp;Welcome: {{$user->email}}</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/menu"><i class="fas fa-bars"></i>&nbsp;Menu</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/edit/{{$user->id}}"><i class="fas fa-user"></i>&nbsp;Profile</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/cartdisplay"> 
                            <i class="fas fa-cart-arrow-down"></i><strong>{{session('count')}}</strong></a>
                         

                    </li>
                   
                    <li class="nav-item ml-3">
                        <a class="btn btn-danger my-2 my-sm-0" href="/logout">Log out</a>
                    </li>
                </ul>
            </div>
        </nav>


    </section>





</body>

</html>