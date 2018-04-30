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
				<div class="top-nav">
					<span class="menu"><img src="{{ asset('images/menu.png') }}" alt=""> </span>
					<ul class="icon1 sub-icon1">
					    <li><a href="{{ route('index') }}">Головна</a></li>
@can('before', App\Cloth::class)					    
						<li><a href="{{ route('home') }}" >Адмінка</a></li>
@endcan						
						<li><a href="{{ route('about.index') }}" >О нас</a></li>
						<li><a href="{{ route('contact.index') }}" >Контакти</a></li>	
						<li><a href="#"><i></i></a>
						<ul class="sub-icon1 list">
						  <h3>Обрано позицій({{ count(session('cart.cloth')) }})</h3>

@if (!empty(session('cart.cloth')))			  
@foreach (range(0, count(session('cart.cloth')) - 1) as $i)
						  <div class="shopping_cart">
							  <div class="cart_box">
							   	 <div class="message">
										<div class="list_img"><img src="{{ asset(session('cart.cloth.' . $i)->picture) }}" class="img-responsive" alt=""></div>
										<div class="list_desc"><h4><a href="#">{{ session('cart.cloth.' . $i)->name }}</a></h4>
										<p>{{ session('cart.cloth.' . $i)->description }} </p>
										<p>Розмір {{ session('cart.size.' . $i) }} </p>
										<a href="#" class="offer">Кількість {{ session('cart.number.' . $i) }}</a>
                						<form action="{{ route('cart.destroy', [$i]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <p><input type="submit" value="Видалити"></p>
                                        </form>										
										</div>
		                              <div class="clearfix"></div>
	                              </div>
	                            </div>
	                        </div>
@endforeach
@endif
	                        
							  <div class="check_button"><a href="{{ route('cart.index') }}">Перейти до корзини</a></div>
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
			<br>
			<div class="footer-bottom">
				<div class="container">
				<div class="footer-bottom-at">
					<div class="col-md-6 footer-grid">
						<h3>Адреса склада:</h3>
						<p>Україна, м. Миколаїв, вул. Пихтунова 123</p>
					</div>
					<div class="col-md-6 footer-grid-in">
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
