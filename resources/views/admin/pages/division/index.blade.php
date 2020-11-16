@extends('admin.layouts.master')
@section('content')

  <div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">manage division</h4>

      </div>
    </div>

  </div>


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Manage divisions</h4>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th> # </th>
              <th> division name </th>
              <th> division priority </th>
              <th> action </th>
            </tr>
          </thead>
          <tbody>

            @foreach ($divisions as $division)
              <tr>
                <td>{{$division->id}} </td>
                <td>{{$division->name}}  </td>
                <td>{{$division->priority}}  </td>
                <td>
                  <a class="btn btn-primary" href="{{route('admin.division.edit',$division->id)}}">edit</a>
                  <form class="" action="{{route('admin.division.delete',$division->id)}}" method="post">
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
