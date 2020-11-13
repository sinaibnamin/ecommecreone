@extends('layouts.master')
@section('content')
<div class="col-md-3">
@include('partials.product-sidebar')
</div>
<div class="col-md-9">
  <h2> product details </h2>
  <hr>

  <p> <b>product name:</b> {{$product->title}} </p>
  <p> <b>product description:</b> {{$product->description}} </p>
  <p> <b>product price:</b> {{$product->price}} </p>

  <p> <b>product images:</b>
    @foreach ($product->images as $image)
        <img height="50" width="50" src="{{asset('images')}}/{{$image->image}}" alt="">
    @endforeach

   </p>


</div>
@endsection
