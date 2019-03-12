@extends('backend.backendmaster')

@section('content')
  
    <div class="text-center">
    <a href="{{route('categories.create')}}">Create Category</a>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createCategory">Create Category</button> 
    </div>
{{-- model --}}
   {{--  <div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div> --}}

    <h2>Section title</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Position</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->slug}}</td>
            <td>{{$category->category_id}}</td>
            <td>
            	<a href="">edit</a>
            	<a href="">delete</a>
            </td>
            
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>

 

@endsection

@section('script')
  <script>
    $('#createCategory').on('shown.bs.modal', function () {
  $('#createCategory').trigger('focus')
})
  </script>
    
@endsection