@extends('layouts.master')
@section('content')
  <div class="row">

  <h2 class="text-info" > All Brand List</h2>
  <hr>
<div class="col-12">
  <div class="d-flex flex-wrap justify-content-start">

@foreach ($brands as $brand)
  <div class="col-md-3 border text-center p-4">
    <div class="w-100">
      <img style="max-height:100px;" src="{{asset('images/brandimg')}}/{{$brand->image}}" alt="">
    </div>
    <div class="w-100 mt-4">
      <a href="{{route('brand',$brand->id)}}"><h5 class="py-2 bg-secondary text-light">{{$brand->name}}</h5></a>

    </div>
  </div>
@endforeach





  </div>
</div>
</div>


@endsection
