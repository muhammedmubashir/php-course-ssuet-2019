@extends("layout/main")

@section("content")
	<h1>Our Services</h1>
	<ul>
	@foreach ($services as $service) 
		<li>{{ $service }}</li>
	@endforeach
	</ul>
	<h2>Blade template engine</h2>
@endsection