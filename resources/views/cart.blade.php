@extends('layouts/template')
@section('content')

		<div class="banner banner-in">
			
		</div>
		<!---->
		<div class="container">
		<div class="check-out">
		<h2>Checkout</h2>
    	    <table >
		  <tr>
			<th>ITEM</th>
			<th>QTY</th>		
			<th>PRICES</th>
			<th>DELIVERY DETAILS</th>
			<th>SUBTOTAL</th>
		  </tr>
		  <tr>
			<td class="ring-in"><a href="single.html" class="at-in"><img src="{{ asset('images/17.jpg') }}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas) </p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>$100.00</td>
			<td>FREE SHIPPING</td>
			<td>$100.00</td>
		  </tr>
		  <tr>
		  <td class="ring-in"><a href="single.html" class="at-in"><img src="{{ asset('images/16.jpg') }}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas) </p>
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>$200.00</td>
			<td>FREE SHIPPING</td>
			<td>$200.00</td>
		  </tr>
		  <tr>
		  <td class="ring-in"><a href="single.html" class="at-in"><img src="{{ asset('images/15.jpg') }}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>Sed ut perspiciatis unde</h5>
				<p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas) </p>
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>$150.00</td>
			<td>FREE SHIPPING</td>
			<td>$150.00</td>
		  </tr>
	</table>
	<a href="#" class=" hvr-shutter-in-horizontal">PROCEED TO BUY</a>
	<div class="clearfix"> </div>
    	</div>
</div>

@endsection
