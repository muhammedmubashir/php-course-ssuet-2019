@extends("layout.main")

@section("content")

<h1>Create Post</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('category.store')}}" method='post'>
	{!! csrf_field() !!}
  Category Name:<br>
  <input type="text" name="name"><br>
  Paarent Category:<br>
  <select name="catParent" style="width:200px;">
  	@foreach($categories as $category)
  		<option value="{{ $category->category_id }}">
  			{{ $category->name }}
  		</option>
  	@endforeach
  </select>
  <br>
  <br>
  <input type="submit" value="Submit">
</form>
@endsection