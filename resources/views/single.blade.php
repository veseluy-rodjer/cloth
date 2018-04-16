@extends('layouts/template')
@section('content')

		<div class="banner banner-in">
			
		</div>
		<!---->
			<div class="container">
		<div class="single">
		<div class="col-md-9">
			<div class="single_grid">
				<div class="grid images_3_of_2">
				<ul id="etalage">

							<li>
									<img class="etalage_thumb_image img-responsive" src="{{ asset($item->picture) }}" alt="" >
							</li>
						    
						</ul>

						 <div class="clearfix"> </div>		
				  </div> 
				  <!---->
				  <div class="span1_of_1_des">
				  <div class="desc1">
					<h3>{{ $item->name }}</h3>
					<p>{{ $item->description }}</p>
					<h5>{{ $item->price }}&#160;грн.</h5>
					<div class="available">
						<h4>Available Options :</h4>
						<ul>
						
<form enctype="multipart/form-data" action="{{ route('cart.update', [$item->id]) }}" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}						
							<li>Size:
								<select name="size">									
									<option>S</option>
									<option>M</option>
									<option>L</option>
									<option>XL</option>
									<option>XXL</option>
								</select>
							</li>
							<li>
<p><br>Number: <input type="number" name="number" min="0" step="1" value="1" required></p>		
							</li>
<p><input class="hvr-shutter-in-horizontal" type="submit" value="Add To Cart"></p>
</form>
							
						</ul>						
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Share Product :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="{{ asset('images/facebook.png') }}" title="facebook"></a></li>
								<li><a href="#"><img src="{{ asset('images/twitter.png') }}" title="Twiiter"></a></li>
								<li><a href="#"><img src="{{ asset('images/rss.png') }}" title="Rss"></a></li>
								<li><a href="#"><img src="{{ asset('images/gpluse.png') }}" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clearfix"></div>
					</div>
			   	 </div>
			   	</div>
          	    <div class="clearfix"></div>
          	  </div>
			  <!---->
			  <div class=" possible-single">
						
						<!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 p").hide();
								$(".tab2 p").hide();
								$(".tab3 p").hide();
								$(".tab4 p").hide();
								$(".tab5 p").hide();
								$(".tab6 p").hide();
								$(".tab1 ul").click(function(){
									$(".tab1 p").slideToggle(300);
									$(".tab2 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 p").slideToggle(300);
									$(".tab1 p").hide();
									$(".tab3 p").hide();
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 p").slideToggle(300);
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
									$(".tab5 p").hide();
									$(".tab6 p").hide();
								})
								$(".tab5 ul").click(function(){
									$(".tab5 p").slideToggle(300);
									$(".tab4 p").hide();
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();
									$(".tab6 p").hide();
									
								})
								$(".tab6 ul").click(function(){
									$(".tab6 p").slideToggle(300);
									$(".tab5 p").hide();
									$(".tab4 p").hide();
									$(".tab3 p").hide();
									$(".tab2 p").hide();
									$(".tab1 p").hide();																	
								})
								
								
							});
						</script>
						<!-- script -->
					</div>
			  <!---->
			</div>
	<!---->
	<div class="col-md-3">

   </div>
   <div class="clearfix"> </div>
	</div>
	</div>
	
@endsection	
