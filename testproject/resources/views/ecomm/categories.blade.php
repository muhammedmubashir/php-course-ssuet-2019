@extends("layout/main")

@section("content")
	<h1>Categories</h1>
	<ul>
	@foreach ($categories as $category) 
		<li>{{ $category->category_id }} {{ $category->name }}</li>
	@endforeach
	</ul>
	<h2>Blade template engine</h2>
@endsection