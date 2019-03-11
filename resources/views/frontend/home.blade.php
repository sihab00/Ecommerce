   @extends('frontend.layout.master')

  @section('content')
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">{{config('app.name')}}</h1>
          <p class="lead text-muted">You can buy anything from here</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
    </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
          @foreach($products as $product)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">

                <img class="card-img-top" src="{{$product->getFirstMediaUrl('products') }}" alt="{{$product->getFirstMediaUrl('products')}}">

                <div class="card-body">
                  <p class="card-text">
                  {{$product->title}}
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a type="#" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                    <strong class="text-muted">{{ $product->price }}</strong>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
  @endsection    
