<!-- SVfQOeoB4Acacyr7ldxmK8SDt85rEkkjr1LV7klT
form submit
secure 
CSRF Injection 
CROSS SITE REQUEST FORGERY

BANK
 -->

@extends("layout/main")

@section("content")
	<h1>Create Category</h1>
	<br>
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<br>
	<form action="{{ route('category.store') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div>
		<div>
			<label> Category Name: </label>
			<input type="text" name="name" placeholder="Category Name">
		</div>
		<br>
		<div>
			<label> Category Parent: </label>
			<select name="categoryParent" style="width:200px;">
			<option value="0">--SELECT--</option>
			@foreach($categories as $category)
				<option value="{{ $category->category_id }}">
					{{ $category->name }}
				</option>
			@endforeach
			</select>
		</div>
		<br>
		<div>
			<input class='btn btn-primary' type="submit" name="sbtBtn" value="Save">
		</div>
	</div>

	</form>
@endsection
