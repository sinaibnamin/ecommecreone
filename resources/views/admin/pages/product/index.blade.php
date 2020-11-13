@extends('admin.layouts.master')
@section('content')

  <div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">manage product</h4>

      </div>
    </div>

  </div>


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Manage Products</h4>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th> # </th>
              <th> product title </th>
              <th> price </th>
              <th> quantity </th>
              <th> action </th>
            </tr>
          </thead>
          <tbody>

            @foreach ($products as $product)
              <tr>
                <td>{{$product->id}} </td>
                <td>{{$product->title}}  </td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>
                  <a class="btn btn-primary" href="{{route('admin.product.edit',$product->id)}}">edit</a>
                  <form class="" action="{{route('admin.product.delete',$product->id)}}" method="post">
                        {{ csrf_field() }}
                    <input class="btn btn-danger" type="submit" name="" value="delete">
                  </form>
                </td>
              </tr>
            @endforeach



          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>





@endsection
