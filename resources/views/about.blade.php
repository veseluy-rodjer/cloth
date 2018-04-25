@extends('layouts/template')
@section('content')

		<div class="banner banner-in">
			
		</div>
		<!---->
			<div class="container">
				<div class="about">
					<div class="about-top">
						<h3>A few words about us</h3>
						
						<div class="col-md-8 top-about">
							
							<h5><a href="single.html">Sorda atcursus nec luctus a lore tristique orci acem. Duis ultrici es pharetra magna. Donec accum san malesuada orcinec sit amet eros.</a></h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
													Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
	
						</div>
						<div class="col-md-4 about-in">
						<a href="single.html"><img class="img-responsive" src="{{ asset('images/abs.jpg') }}" alt=" " ></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="about-bottom">
					<div class="col-md-4 in-profile">
					<h4>WHO WE ARE</h4>
					<div class="col-in-about">
						<span class="in-sed">1</span>
						<div class="left-sit">
							<h6><a href="single.html">Sed ut perspiciatis unde  </a></h6>
							<p>Mes cuml dia sed net lacus utenias cet inge iiqt es site.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-in-about">
						<span class="in-sed">2</span>
						<div class="left-sit">
							<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
							<p>Mes cuml dia sed net lacus utenias cet inge iiqt es site.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-in-about">
						<span class="in-sed">3</span>
						<div class="left-sit">
							<h6><a href="single.html">Sed ut perspiciatis unde  </a></h6>
							<p>Mes cuml dia sed net lacus utenias cet inge iiqt es site.</p>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="col-md-8 in-profile">
				<h4>Наша команда))
@can('before', App\About::class)      
      <a href="{{ route('about.create') }}">&#160;Добавить</a>
@endcan				
				</h4>				
				<div class="team-left ">
				
@foreach ($listing as $i)				
					<div class=" team-top">
					<a href="single.html"><img class="img-responsive" src="{{ asset($i->picture) }}" alt="" /></a>
						<h6>{{ $i->name }}</h6>
						<p>{{ $i->description }}</p>
@can('before', App\About::class)        
<a href="{{ route('about.edit', [$i->id]) }}"><input type="submit" value="Редактировать"></a>
<form action="{{ route('about.destroy', [$i->id]) }}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p><input type="submit" value="Удалить"></p>
</form>
@endcan 						
					</div>
@endforeach					
					
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
			</div>

@endsection
