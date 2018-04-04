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
			<div class="content-grid">
				<h3 class="future">{{ $i->category }}<a href="{{ route('cloth.create', [$i->id]) }}" >&#160;Добавить</a>
				
				</h3>

    @foreach($i->clothes as $y)
    
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="{{ asset($y->picture) }}" class="img-responsive" />
        <h3>{{ $y->name }}</h3>
        <p>{{ $y->description }} </p>
{{-- @can('before', App\Models\MainModel::class) --}}        
        <a href="{{ route('edit', [$i->id]) }}"><input type="submit" value="Редактировать"></a>
<form action="{{ route('destroy', [$i->id]) }}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p><input type="submit" value="Удалить"></p>
</form>
{{-- @endcan --}}        
      </div>
    @endforeach
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
