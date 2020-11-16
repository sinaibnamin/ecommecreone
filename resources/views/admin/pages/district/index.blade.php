@extends('admin.layouts.master')
@section('content')

  <div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">manage district</h4>

      </div>
    </div>

  </div>


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Manage districts</h4>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th> # </th>
              <th> district name </th>
              <th> division_id </th>
              <th> action </th>
            </tr>
          </thead>
          <tbody>

            @foreach ($districts as $district)
              <tr>
                <td>{{$district->id}} </td>
                <td>{{$district->name}}  </td>
                <td>{{$district->division->name}}  </td>
                <td>
                  <a class="btn btn-primary" href="{{route('admin.district.edit',$district->id)}}">edit</a>
                  <form class="" action="{{route('admin.district.delete',$district->id)}}" method="post">
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
