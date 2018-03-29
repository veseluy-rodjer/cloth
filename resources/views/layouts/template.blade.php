<!DOCTYPE html>
<html>
<head>
<title>{{  $title  }}</title>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trekking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!--//slider-script-->
<script>$(document).ready(function(c) {
	$('.alert-close').on('click', function(c){
		$('.message').fadeOut('slow', function(c){
	  		$('.message').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.alert-close1').on('click', function(c){
		$('.message1').fadeOut('slow', function(c){
	  		$('.message1').remove();
		});
	});	  
});
</script>
</head>
<body>
<!--header-->
	<div class="header">
		<div class="container">
		<div class="header-top">		
			<div class="logo">
				<a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
			</div>
				<div class="top-nav">
					<span class="menu"><img src="{{ asset('images/menu.png') }}" alt=""> </span>
					<ul class="icon1 sub-icon1">
						<li  ><a href="{{ route('index') }}" >Home</a></li>
						<li><a href="{{ route('product.index') }}" > Products</a></li>	
						<li><a href="#"><i></i></a>
						<ul class="sub-icon1 list">
						  <h3>Recently added items(2)</h3>
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
							   	     <div class="alert-close"> </div> 
										<div class="list_img"><img src="{{ asset('images/15.jpg') }}" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
										<p>Aliquam dignissim porttitor tortor </p>
										<a href="#" class="offer">1 offer applied</a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                           <div class="cart_box">
							   	 <div class="message1">
							   	     <div class="alert-close1"> </div> 
										<div class="list_img"><img src="{{ asset('images/16.jpg') }}" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">velit esse molestie</a></h4>
										<p>Aliquam dignissim porttitor tortor </p>
										<a href="#" class="offer">1 offer applied</a>
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
							  <div class="check_button"><a href="{{-- {{ route('cart.index') }}  --}}">View Cart</a></div>
					      <div class="clearfix"></div>
						</ul>
					</li>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

@yield('content')

		<div class="footer">
			<div class="footer-top">
				<div class="container">
				<a href="#" class="theme"><i> </i> “ E-commerce psd theme available ”</a>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
				<div class="footer-bottom-at">
					<div class="col-md-6 footer-grid">
						<h3>Trekking</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-md-6 footer-grid-in">
					<ul class="footer-nav">
						<li><a href="404.html" >credits </a>|</li>
						<li><a href="{{--  {{ route('privacy.index') }} --}}" > Privacy</a>|</li>
						<li><a href="{{-- {{ route('about.index') }} --}}" > about</a>|</li>
						<li><a href="{{-- {{ route('contact.index') }} --}}" > contact</a></li>
					</ul>
					<p class="footer-class">Copyright © 2015 Trekking Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
			</div>
			<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


		</div>
</body>
</html>
