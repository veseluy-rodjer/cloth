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
					<h3>
					
@foreach($listing as $i)
                        <br>
						<a href="{{ route('indexCategory', [$i->id]) }}">{{ $i->category }}</a>
						<a href="{{ route('edit', [$i->id]) }}" >&#160;Переименовать категорию</a>
						<form action="{{ route('destroy', [$i->id]) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <p><input type="submit" value="Удалить категорию"></p>
                        </form>
@endforeach
                    </h3>

					<div class="clearfix"> </div>
					</div>
				<a  href="{{ route('index') }}" class="product-in hvr-shutter-in-horizontal">Все категории</a>
				<div class="clearfix"> </div>
				<p style="text-align:right; font-weight:700"><br><a href="{{ route('create') }}" >Добавить категорию</a></p>
				</div>
			</div>
		</div>
		<!---->
		<div class="container">
		
@foreach($listing as $i)		
			<div class="content-product">
				<h3 class="future-men">{{ $i->category }}<a href="{{ route('cloth.create', [$i->id]) }}" >&#160;&#160;Добавить продукт</a>
				</h3>				
				
    @foreach($i->clothes as $y)					
				<div class="col-md-4 col-d">
				<div class="men-grid in-men">
					<a href="{{ route('single.index', [$y->id]) }}"><img class="img-responsive" src="{{ asset($y->picture) }}" alt=""></a>
						<div class="value-in">
							<p>{{ $y->name }}</p>
							<span>{{ $y->price }}&#160;грн</span>
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
					</div>
<a href="{{ route('cloth.edit', [$y->id]) }}"><input type="submit" value="Редактировать"></a>
<form action="{{ route('cloth.destroy', [$y->id]) }}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p><input type="submit" value="Удалить"></p>
</form>					
				</div>				
    @endforeach       
     				
				<div class="clearfix"> </div>
			</div>
@endforeach			

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
