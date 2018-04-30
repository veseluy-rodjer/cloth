@extends('layouts/template')
@section('content')

		<div class="banner">
			<div class="container">	
				<h1>Наш одяг ваш комфорт</h1>
				<p>Український національний одяг для всій сім'ї</p>
	<a href="#content" class="scroll down"><img src="{{ asset('images/arr.png') }}" alt=""></a>
			</div>
		</div>
		<div class="content" id="content">
			<div class="content-top">
				<div class="container">
					<div class="content-top-at">
					<div class="content-top-grid">
					<h3>
					
@foreach ($listing as $i)
                        <br>
						<a href="{{ route('indexCategory', [$i->id]) }}">{{ $i->category }}</a>
@endforeach
                    </h3>

					<div class="clearfix"> </div>
					</div>
				<a  href="{{ route('index') }}" class="product-in hvr-shutter-in-horizontal">Все категории</a>
				
				</div>
			</div>
		</div>
		<!---->
		<div class="container">
		
@foreach ($listing as $i)		
			<div class="content-product">
				<h3 class="future-men">{{ $i->category }}
				</h3>				
				
    @foreach ($i->clothes as $y)					
				<div class="col-md-4 col-d">
				<div class="men-grid in-men">
				    <img class="img-responsive" src="{{ asset($y->picture) }}" alt=""></p>
				    <br>
					<p style="text-align:center; font-weight:700"><a href="{{ route('cloth.show', [$y->id]) }}"><input type="submit" value="Подробнее"></a>
						<div class="value-in">
							<p>{{ $y->name }}</p>
							<span>{{ $y->price }}&#160;грн</span>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>				
    @endforeach       
     				
				<div class="clearfix"> </div>
			</div>
@endforeach			

		</div>
	</div>
@endsection
