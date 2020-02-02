@extends("layout/main")

@section("content")
	@if(session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif
	<h1>Category Listing</h1>
	<div>
		<a href="{{ url('category/create') }}" class="btn btn-primary">Create</a>
	</div>
	<br>
	<ul>
	@foreach ($categories as $category) 
		<li>{{ $category->name }}</li>
	@endforeach
	</ul>
@endsection

<!-- 
http://localhost/php-course-ssuet-2019/testproject/
public/category/create -->