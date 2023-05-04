
<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  <meta name="author" content="themefisher.com">
  <title>TECHNIQUES.IO</title>
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/themify/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/plugins/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/plugins/magnific-popup/dist/magnific-popup.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/plugins/slick-carousel/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

 {{-- select2 --}}
 {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}





</head>

<body>


<!-- Header Start --> 

<header class="navigation">
	{{-- <div class="header-top ">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-2 col-md-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook"></i></a>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
					</div>
				</div>
				<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
						<a href="mailto:support@gmail.com" ><i class="fa fa-envelope mr-2"></i><span>support@gmail.com</span></a>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="{{url('/')}}">
		  	TECHNIQUES<span>.IO</span>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
			  </li>

			  {{-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="about.html">Our company</a></li>
						<li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
					</ul>
			  </li> --}}
			   {{-- <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li> --}}
			   {{-- <li class="nav-item"><a class="nav-link" href="project.html">Portfolio</a></li> --}}

			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{route('blog')}}" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
					{{-- <ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="#">Blog Grid</a></li>
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
					</ul> --}}
			  </li>

              {{-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> --}}


                    {{-- login --}}           
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown05">
                    <li><a href="{{route('login')}}" class="dropdown-item" href="blog-grid.html">As admin</a></li>

                    <li><a href="{{route('loginview')}}" class="dropdown-item" >As User</a></li>

                    
                </ul>
          </li>
              {{-- login --}}

			  {{-- Registration --}}
			  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown05">
                    

                    <li><a href="{{route('form')}}" class="dropdown-item" >As User</a></li>
                   
                </ul>
          </li>
			  {{-- Registration --}}

			  {{-- comparison --}}
			  <li class="nav-item active">
				<a class="nav-link" href="{{route('comparison')}}">Compare</a>
			  </li>
			</ul>

			{{-- <form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
			  <a href="contact.html" class="btn btn-solid-border btn-round-full">Get a Quote</a>
			</form> --}}
            
            


		  </div>
		</div>
	</nav>
</header>

<!-- Header Close --> 


@yield('content')





<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('/techniques/blog')}}">Blog</a></li>
						<li><a href="{{url('/comparison')}}">Compare</a></li>
					</ul>
				</div>
			</div>
			{{-- <div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('/techniques/blog')}}">Blog</a></li>
						<li><a href="{{url('/comparison')}}">Compare</a></li>
						
					</ul>
				</div>
			</div> --}}
			{{-- <div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Subscribe Us</h4>
					<p>Subscribe to get latest news article and resources  </p>

					<form action="#" class="sub-form">
						<input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
						<a href="#" class="btn btn-main btn-small">subscribe</a>
					</form>
				</div>
			</div> --}}

			<div class="col-lg-3 ml-auto col-sm-6">
				<div class="widget">
					<div class="logo mb-4">
						<h3>Techniques<span>.IO</span></h3>
					</div>
					<h6><a href="tel:+23-345-67890" >Support@techniques.IO</a></h6>
					<a href="#"><span class="text-color h4">000000</span></a>
				</div>
			</div>
		</div>
		
		{{-- <div class="footer-btm pt-4">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Megakit.</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="copyright">
					Distributed by  <a href="https://themewagon.com/" target="_blank">Themewagon</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i>Facebook</a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2"></i>Twitter</a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
					</ul>
				</div>
			</div>
		</div> --}}
		
	</div>
</footer>
   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->
{{-- comparison scripts starts --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
{{-- comparison scripts end --}}
    
    <!-- Main jQuery -->
    <script src="{{asset('frontend/plugins/jquery/jquery.js')}}"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{asset('frontend/plugins/bootstrap/js/popper.js')}}"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   <!--  Magnific Popup-->
    <script src="{{asset('frontend/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('frontend/plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('frontend/plugins/counterup/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/counterup/jquery.counterup.min.js')}}"></script>

    <!-- Google Map -->
    <script src="{{asset('frontend/plugins/google-map/map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="{{asset('frontend/js/script.js')}}"></script>
	{{-- @yield('footer_script') --}}


  </body>
  </html>
   