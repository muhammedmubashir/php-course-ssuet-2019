@extends("layout/main")

@section("content")
	<h1>{{ $category->name}} Products</h1>
	<ul>
	@foreach ($products as $p) 
		<li>{{ $p->category_id }} {{ $p->name }}</li>
	@endforeach
	</ul>
@endsection