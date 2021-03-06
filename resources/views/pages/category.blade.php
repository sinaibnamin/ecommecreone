@extends('layouts.master')
@section('content')
    <div class="row">
<div class="col-md-3">
@include('partials.product-sidebar')
</div>
<div class="col-md-9">
  <h2 class="text-info" > products category : {{$category->name}}</h2>
  <hr>
  <div class="d-flex flex-wrap">
@if (count($products) == 0)
<h4 class="text-danger" > sorry there is no product</h4>
@endif


    @foreach ($products as $product)
      <div class="col-md-4 p-2">
        <div class="card">
          {{-- image query --}}
          @php
            $ic = count($product->images);
          @endphp
          @foreach ($product->images as $i)
            @if ($ic < 2 )
              <img class="" style="max-height:250px;" src="{{asset('images')}}/{{$i->image}}" alt="Card image cap">
              @else
                <img width="60" height="60" class="card-img-top" src="{{asset('images')}}/{{$i->image}}" alt="Card image cap">
            @endif
          @endforeach
          {{-- image query end --}}

          <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <div class="border p-2 mb-3">
              <span><img style="max-width:40px;max-height:40px;" class="card-img-top" src="{{asset('images/brandimg')}}/{{$product->brand->image}}" ></span>

              {{$product->brand->name}}</div>
            <br>



            <a href="{{route('product.show',$product->id)}}" class="btn btn-primary">view details</a>
          </div>
        </div>
      </div>
    @endforeach





  </div>
</div>
</div>
@endsection
