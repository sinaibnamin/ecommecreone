@extends('admin.layouts.master')
@section('content')

  <div class="row page-title-header">
    <div class="col-12">
      <div class="page-header">
        <h4 class="page-title">manage category</h4>

      </div>
    </div>

  </div>


<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Manage categories</h4>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th> # </th>
              <th> category image </th>
              <th> category name </th>
              <th> parent </th>

              <th> action </th>
            </tr>
          </thead>
          <tbody>

            @foreach ($categories as $category)
              <tr>
                <td>{{$category->id}} </td>
                <td>
                  @if ($category->image !== null)
                      <img src="{{asset('images/categoryimg')}}/{{$category->image}}" alt="">
                  @endif

                   </td>
                <td>{{$category->name}}  </td>

                @if ($category->parent_id !== NULL)
                <td>{{$category->parent->name}}</td>
                  @else
                    <td class="text-primary">parent Category </td>
                @endif





                <td>
                  <a class="btn btn-primary" href="{{route('admin.category.edit',$category->id)}}">edit</a>
                  <form class="" action="{{route('admin.category.delete',$category->id)}}" method="post">
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
