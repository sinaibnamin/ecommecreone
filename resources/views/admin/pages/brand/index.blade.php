@extends('admin.layouts.master')
@section('content')

  <div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">manage brand</h4>

      </div>
    </div>

  </div>


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Manage brands</h4>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th> # </th>
              <th> brand image </th>
              <th> brand name </th>


              <th> action </th>
            </tr>
          </thead>
          <tbody>

            @foreach ($brands as $brand)
              <tr>
                <td>{{$brand->id}} </td>
                <td>
                  @if ($brand->image !== null)
                      <img src="{{asset('images/brandimg')}}/{{$brand->image}}" alt="">
                  @endif

                   </td>
                <td>{{$brand->name}}  </td>


                <td>
                  <a class="btn btn-primary" href="{{route('admin.brand.edit',$brand->id)}}">edit</a>
                  <form class="" action="{{route('admin.brand.delete',$brand->id)}}" method="post">
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
