@extends('backend.backendmaster')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    
  </div>

  <h2>Section title</h2>
  <div class="table-responsive">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <a href="{{ route('categories.index')}}" class="btn btn-primary btn-block">Category</a>
      <a href="" class="btn btn-primary btn-block">Products</a>
      <a href="" class="btn btn-primary btn-block">Order</a>
    </div>
    
  </div>
    

@endsection