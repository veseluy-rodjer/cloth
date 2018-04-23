@extends('layouts/template')
@section('content')

		<div class="banner banner-in">
			
		</div>
		<!---->
		<div class="container">
		<div class="check-out">
		<h2>Ваши покупки</h2>
    	    <table >
		  <tr>
			<th>Продукт</th>
			<th>Размер</th>		
			<th>Цена</th>
			<th>Количество</th>
			<th>Сумма</th>
		  </tr>
		  
@if (!empty(session('cart.cloth')))			  
@foreach (range(0, count(session('cart.cloth')) - 1) as $i)		  
		  <tr>
			<td class="ring-in"><a style="width: 20%;" href="single.html" class="at-in"><img src="{{ asset(session('cart.cloth.' . $i)->picture) }}" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>{{ session('cart.cloth.' . $i)->name }}</h5>
				<p>{{ session('cart.cloth.' . $i)->description }} </p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td class="check" style="text-align: center">{{ session('cart.size.' . $i) }}</td>		
			<td style="text-align: center">{{ session('cart.cloth.' . $i)->price }} грн.</td>
			<td style="text-align: center">{{ session('cart.number.' . $i) }}</td>
			<td style="text-align: center">{{ session('cart.cloth.' . $i)->price * session('cart.number.' . $i) }} грн.</td>
		  </tr>
@endforeach
@endif

	</table>
	
<form action="{{ route('cart.booking') }}" method="post">
{{ csrf_field() }}
<p>Ваше имя: <input type="text" name="name" required></p>
<p>Укажите телефон для обратной связи в таком формате: <input type="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" placeholder="066-111-11-11" required></p>
<br>
<p style="text-align: center"><input class=" hvr-shutter-in-horizontal" type="submit" value="Заказать"></p>
</form>	
	
	<div class="clearfix"> </div>
    	</div>
</div>

@endsection
