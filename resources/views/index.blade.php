<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Event</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/all.min.css')}}">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="{{asset('public/frontend/vendor/Magnific-Popup/dist/magnific-popup.css')}}">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="{{asset('public/frontend/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/vendor/owl-carousel/css/owl.theme.default.min.css')}}">


    <!--  custom css file  -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/responsive.css')}}">



</head>

<body>
    <!--  ======================= Start Header Area ============================== -->
    <header class="header_area">
        <div class="main-menu">
            <nav  class="navbar navbar-expand-lg navbar-light bg-light ">  
                <div class="container">
                    <a class="navbar-brand" href="{{URL::to('/')}}"><img src="public/frontend/img/banner/lgn1.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item active ">
                                <a class="nav-link" href="{{URL::to('/home')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="navbarDropdown" >
                                    Event
                                </a>
                                <ul class="dropdown-content" >
                                    <li><a class="dropdown-item" href="{{URL::to('/event')}}">Ex1</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{URL::to('/event')}}">Ex2</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{URL::to('/event')}}">Ex3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item active dropdown">
                                <a class="nav-link" href="#view">Course<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{URL::to('/login')}}" id="navbarDropdown" >
                                        Login
                                </a>
                                <ul class="logindropdown">
                                    <form action="{{URL::to('/loginsuccess')}}" method="post" class="login logindropdown">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="col-lg-12">Username</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-lg-12">Password</label>
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Remember me
                                        </label>
                                        <br>
                                        <a href="#">Forgeting password?</a>
                                    </form>
                                </ul>
                            </li>                               
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!--  ======================= End Header Area ============================== -->
    @yield('content')

    
    <footer class="bg-light text-lg-start">
        <div class="container-fluid">
            <div class="text-uppercase">
                <div class="site-logo text-center py-4">
                    <a href="#"><img src="public/frontend/img/UE.png" alt="logo"></a>
                </div>
                <div class="row">
      <div class="col-lg-6 col-md-6 mb-6 mb-md-0">
        <h5 class="text-uppercase">About University</h5>
        <p>
        The University of Greenwich is a public university located in London and Kent, United Kingdom. Previous names include Woolwich Polytechnic and Thames Polytechnic. 
        The university's main campus is at the Old Royal Naval College, which along with its Avery Hill Campus, is located in the Royal Borough of Greenwich
        </p>
      </div>
     
      <div class="col-lg-6 col-md-6 mb-6 mb-md-0">
        <h5 class="text-uppercase">Ho Chi Minh City</h5>
      </div>
    
    </div>
    </div>
                <div class="copyrights text-center">
                    <p class="para">
                        FPT Education Viet Nam
                        <a href="#"><span style="color: var(--primary-color);">University of Greenwich</span></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!--  Jquery js file  -->
    <script src="./js/jquery.3.4.1.js"></script>

    <!--  Bootstrap js file  -->
    <script src="./js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="./js/main.js"></script>


</body>

</html>
