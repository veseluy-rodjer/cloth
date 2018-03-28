@extends('layouts/template')
@section('content')

		<div class="banner">
			<div class="container">	
				<h1>Our clothing , your comfort</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
 magna aliqua.</p>
	<a href="#content" class="scroll down"><img src="{{ asset('images/arr.png') }}" alt=""></a>
			</div>
		</div>
		<div class="content" id="content">
			<div class="content-top">
				<div class="container">
					<div class="content-top-at">
					<div class="content-top-grid">
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>MEN</label>
						</a>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>WOMEN</label>
						</a>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>CHILDERN</label>
						</a>
					<div class="clearfix"> </div>
					</div>
				<a  href="single.html" class="product-in hvr-shutter-in-horizontal">see all products</a>
				<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!---->
		<div class="container">
			<div class="content-grid">
				<h3 class="future">MEN</h3>
					<p class="five">1/5</p>
					<div class="clearfix"> </div>
				<ul id="flexiselDemo1">			
						<li><div class="men-grid">
					<a href="single.html"><img class="img-responsive" src="{{ asset('images/me.png') }}" alt=""></a>
						<div class="value-in">
							<p>T-Shirt</p>
							<span>5,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						<li><div class="men-grid">
						<a href="single.html"><img class="img-responsive" src="{{ asset('images/me1.png') }}" alt=""></a>
						<div class="value-in">
							<p>Pants FORCLAZ</p>
							<span>25,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						<li><div class="men-grid">
					<a href="single.html"><img class="img-responsive" src="{{ asset('images/me2.png') }}" alt=""></a>
						<div class="value-in">
							<p>backpack</p>
							<span>18,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						
					
					</ul>
            		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 2
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
			</div>
			<div class="content-grid">
				<h3 class="future-in">WOMEN</h3>
					<p class="five">1/5</p>
					<div class="clearfix"> </div>
				<ul id="flexiselDemo2">			
						<li><div class="men-grid">
					<a href="single.html"><img class="img-responsive" src="{{ asset('images/me3.png') }}" alt=""></a>
						<div class="value-in">
							<p>Giacket</p>
							<span>15,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						<li><div class="men-grid">
					<a href="single.html"><img class="img-responsive" src="{{ asset('images/me4.png') }}" alt=""></a>
						<div class="value-in">
							<p>trekking shoes</p>
							<span>20,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						<li><div class="men-grid">
					<a href="single.html"><img class="img-responsive" src="{{ asset('images/me5.png') }}" alt=""></a>
						<div class="value-in">
							<p>T-Shirt</p>
							<span>10,00€</span>
							<div class="clearfix"> </div>
						</div>
						<div class="down-top ">
						
							 <select  class="drop-down">
								<option value="" class="size" value="">SIZE</option>
								<option value="1">Large</option>
								<option value="2">Medium</option>
								<option value="3">Small</option>
							 </select>
					 </div>	
						</div></li>
						
					
					</ul>
            		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 2
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
			</div>
		</div>
		<!---->
		<div class="about-us">
			<div class="container">
			<h2>about us</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudexercitation</p>
			<i class="round"> </i>
			</div>
		</div>
	</div>
@endsection
