@extends('main')

@section('content')

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <p id="toppage-text">Bookings and walk-ins welcome</p>
          @if (Auth::check())
    <a href="services" id="booking-button" class="bton btn-primary js-scroll-trigger">Book Now</a>
@endif
@if (Auth::guest())
    <a href="login2" id="login2-button" class="bton btn-primary js-scroll-trigger">Login Now</a>
    	<a href="login2" id="booking-button" class="bton btn-primary js-scroll-trigger">Register Now</a>
@endif
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
              <button type="submit" class="bton btn-secondary mx-auto">Subscribe</button>
            </form>

          </div>
        </div>
      </div>
    </section>
	


    <!-- Contact Section -->
    <section class="contact-section bg-primary">
      <div class="container">
		
		<header class="section-header">
          <h3 id="contact-header">Contact</h3>
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

@endsection