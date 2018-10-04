<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Boss Cuts</title>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Custom fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="fonts/AbrahamLincoln.tff">
	


    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <h1 id="navtitle"><a href="index">BOSSCUTS</h1></a>
	<a class="navbar-brand" href="#">
    
   
  </a>
      <div class="container">
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        @if (Route::has('login'))
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="services">BOOKINGS</a>
            </li>
                        <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="gallery">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">ABOUT</a>
            </li>
			
            			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#products">PRODUCTS</a>
            </li>
                        <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">CONTACT</a>
            </li>



            
          </ul>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
          @auth
			<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                  @else
			
			<li class="nav-item">
              <a class="boton btn-outline-warning js-scroll-trigger"  href="{{ route('login2') }}">Login</a>
            </li>
			<li class="nav-item">
              <a class="boton btn-primary js-scroll-trigger" href="{{ route('login2')}}">Register</a>
            </li>
			@endauth
			
			 </div>
			 @endif
			 </ul>
      </div>
    </nav>

    <!-- Yield -->
    <div class="Container">
        @yield('content')
    </div>

    <!-- Footer -->
     <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About</a></li>
              
              <li><i class="ion-ios-arrow-right"></i> <a href="#products">Products</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#contact">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
             127 Clarkin Rd<br>
			Fairfield, Hamilton<br>
              New Zealand <br>
              <strong>Phone:</strong> +64 (07) 855 6874<br>
              <strong>Email:</strong> bosscutshamilton@gmail.com<br>
            </p>

            

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Social Links</h4>
            
            <div class="social-links">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2018 Abdullahi Jama / Curtis Adams . All Rights Reserved
      </div>
      
    </div>
  </footer>


  
    <!-- Bootstrap core JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.compatibility.js"></script>

    <!-- Custom scripts -->
    <script src="js/main.js"></script>

  </body>

</html>
