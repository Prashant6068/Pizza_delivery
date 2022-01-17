
 <!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>


<style>
.masthead {
  height: 100vh;
  min-height: 500px;
  background-image: url('https://png.pngtree.com/background/20210711/original/pngtree-gourmet-pizza-big-sale-texture-hand-painted-black-banner-picture-image_1130712.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
.p4{
    font-weight: bolder;
font-style: italic;
text-transform: uppercase;
letter-spacing: 1px;
}
.description {
	left: 50%;
	position: absolute;
	top: 45%;
	transform: translate(-50%, -55%);
	text-align: center;
}
.description h1 {
	/* color: #6ab446; */
    text-transform: capitalize;
    font-weight: bolder;
    letter-spacing: 1px;

}
.description p {
	color: #fff;
    
	font-size: 1.3rem;
	line-height: 1.5;
    font-weight: bolder;
}
.description button {
   
    border-radius: 0;
    color:#fff;
}
.description button a {
   
text-decoration:none;
color:white;
}
.description button:hover {
	/* border:1px solid #fff; */
    background:black;
    color:white;
}
</style>

    

<section class="">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow">
        <a class="navbar-brand mx-3" href="#"><img src="https://iconape.com/wp-content/files/qh/236342/svg/pizza-hut2010-north-america-seeklogo.com.svg" width="80px" alt=""></a>
        <ul class="navbar-nav ml-auto">
                   
        </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="home"><i class="fas fa-home"></i>&nbsp;Home</a>
                    </li>
           
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/register"><i class="fas fa-user-plus"></i>&nbsp;Register</a>
                        <!-- <a class="btn btn-warning my-2 my-sm-0" href="#">Register</a> -->
                    </li>
                    <li class="nav-item ml-3">
                        <a class="btn btn-danger my-2 my-sm-0" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </nav>


    </section>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <!-- <h1 class="fw-light">Vertically Centered Masthead Content</h1>
        <p class="lead">A great starter layout for a landing page</p> -->

        <div class="description">
	<h1 class="text-light">Welcome to Pizza Store!</h1>
	<p>"No matter what happens, pizza will always be there for you, thick and thin, in the crust we trust."</p>
    <button class="btn  btn-danger btn-lg"><a href="/login">Sign In and Order!</a></button>
</div>

      </div>
      
    </div>
  </div>
</header>
    </body></html>
