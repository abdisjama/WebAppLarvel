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
	


    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
	<a class="navbar-brand" href="#">
    <img src="img/logo1.png" width="100" height="75" class="d-inline-block align-top" alt="">
   
  </a>
      <div class="container">
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        @if (Route::has('login'))
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#products">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
            </li>
          </ul>
		  @auth
			<li class="nav-item">
                        <a href="{{ url('/home') }}">Home</a>
			</li>
                  @else
			
			<li class="nav-item">
              <a class="bton btn-outline-warning js-scroll-trigger" href="{{ route('login') }}">Login</a>
            </li>
			<li class="nav-item">
              <a class="bton btn-primary js-scroll-trigger" href="{{ route('register') }}">Register</a>
            </li>
			@endauth
			 </div>
			 @endif
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          
          <a href="#Bookings" class="btn btn-primary js-scroll-trigger">Book Now</a>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-right">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-danger mb-4">About Us</h2>
            <p class="text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ex neque, tincidunt eget felis sed, lacinia sagittis purus. Vivamus pharetra tincidunt justo ut congue. Nullam bibendum sem vitae metus cursus suscipit. Proin sodales arcu nec pharetra fermentum. Maecenas et dictum lectus. Vivamus eget molestie justo. Phasellus ac lacinia lacus. Donec at pharetra ex
              <a href="https://www.lipsum.com/">Lorem Ipsum</a>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ex neque, tincidunt eget felis sed, lacinia sagittis purus. Vivamus pharetra tincidunt justo ut congue. Nullam bibendum sem vitae metus cursus suscipit. Proin sodales arcu nec pharetra fermentum. Maecenas et dictum lectus. Vivamus eget molestie justo. Phasellus ac lacinia lacus. Donec at pharetra ex</p>
          </div>
		  <img src="img/man.png" class="float-center" alt="">
        </div>
        
      </div>
    </section>
	
		 <!-- Services -->
    <section id="services">
      <div class="container-services">
        <div class="row">
          <div class="col-lg-12 text-center">
            <header class="section-header">
          <h3>Services</h3>
        </header>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-calendar-plus fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Online Bookings</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-cut fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Cuts</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-user-friends fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Discounts</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
      </div>
    </section>

	
	<!-- Products Section -->
	<section id="products">
	<section class="py-5">
      <div class="container">
	  <header class="section-header">
          <h3>Our Products</h3>
        </header>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/loreal.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/schq.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/gatsby.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/kerastase.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

            <form class="form-inline d-flex">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
              <button type="submit" class="btn btn-secondary mx-auto">Subscribe</button>
            </form>

          </div>
        </div>
      </div>
    </section>
	


    <!-- Contact Section -->
    <section class="contact-section bg-primary">
      <div class="container">
		
		<header class="section-header">
          <h3>Contact</h3>
        </header>
        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="small text-black-50">127 Clarkin Rd, Fairfield, Hamilton</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">bosscutshamilton@gmail.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div class="small text-black-50">+64 (07) 855 6874</div>
              </div>
            </div>
          </div>
        </div>
		<section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.061037281331!2d175.27695411531735!3d-37.76516697976116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d6d1884f6c5c635%3A0x7d26e0eb9706c29e!2s174+Clarkin+Rd%2C+Fairfield%2C+Hamilton+3214!5e0!3m2!1sen!2snz!4v1537210563721"></iframe>
      <br/>
      <small>
        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.061037281331!2d175.27695411531735!3d-37.76516697976116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d6d1884f6c5c635%3A0x7d26e0eb9706c29e!2s174+Clarkin+Rd%2C+Fairfield%2C+Hamilton+3214!5e0!3m2!1sen!2snz!4v1537210563721"></a>
      </small>
    </section>

        

      </div>
    </section>

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
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
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
