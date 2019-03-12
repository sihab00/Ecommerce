@extends('backend.backendmaster')

@section('content')
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h2 class="text-center">Create Category</h2>
			<form action="{{ route('categories.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
				<div class="form-group">
					<label for="name">Category Name</label>
					<input type="text" name="name"  id="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="category_name">Category</label>
					<select class="form-control">
						<option value="0">Parents</option>
						@foreach($categories as $category)

							<option value="{{ $category->id}}">
							{{ $category->name}}</option>

						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="baner">Banner</label>
					<input type="file" baner="baner"  id="baner" class="form-control">
				</div>

				<button type="submit" class="btn btn-success">Add Category</button>
			</form>
		</div>
	</div>
	
@endsection