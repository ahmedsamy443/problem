<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo.PNG') }}">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="  {{ asset('/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href=" {{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href=" {{ asset('/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="  {{ asset('/css/chosen.min.css') }}">
        <link rel="stylesheet" type="text/css" href="  {{ asset('/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href=" {{ asset('/css/color-01.css') }}">
		<script src="{{ asset('/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>

    </head>
<body class="inner-page about-us ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap" ">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels"  href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">			

				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456-789-1111</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								<li class="menu-item" ><a title="Register or Login" href="login.html">Login</a></li>
								<li class="menu-item" ><a title="Register or Login" href="register.html">Register</a></li>
								
								</li>
							
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="{{route('shopproduct')}}" class="link-to-home"><img src="{{ asset('images/logo.PNG') }}" alt="mercado"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="{{route('searchproducts')}}" method="POST" id="form-search-top" name="form-search-top">
									@csrf
									<input type="text" name="search" value="" placeholder="Search here...">
									<button name="sad" form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
									
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<div class="left-info">
										
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="#" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index"><?php echo \Cart::getTotalQuantity()?></span>
										<span class="title">CART</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="{{route('shopproduct')}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="{{route('shopproduct')}}" class="link-term mercado-item-title">Shop</a>
								</li>
								<li class="menu-item">
									<a href="{{route('cartpage')}}" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
								</li>	
								<li class="menu-item">
									<a href="{{route('trackordersforuser')}}" class="link-term mercado-item-title">my orders</a>
								</li>	
								
								<li class="menu-item">
									<a href="{{route("gotoadmin")}}" class="link-term mercado-item-title">admindashborad</a>
								</li>							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	

	<!-- here is the cpntent -->
@yield('content')

				
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!--End function info-->

			<div class="main-footer-content">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contact Details</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">address : mansoura</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">Hotline: (+123) 456 789</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">support@gmail.com</p>
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							

							<div class="wrap-footer-item footer-item-second">
								<h3 class="item-header">Sign up for newsletter</h3>
								<div class="item-content">
									<div class="wrap-newletter-footer">
										<form action="#" class="frm-newletter" id="frm-newletter">
											<input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
											<button class="btn-submit">Subscribe</button>
										</form>
									</div>
								</div>
							</div>
							

					</div>

					<div class="row">


						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Social network</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>

						

					</div>
				
			</div>
		</div>
	</footer>
	<script src="{{ asset('/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('/js/functions.js') }}"></script>
</body>
</html>