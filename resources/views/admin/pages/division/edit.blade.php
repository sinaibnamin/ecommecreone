@extends('admin.layouts.master')
@section('content')





            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Edit division</h4>

                </div>
              </div>

            </div>


            <div class="row flex-grow">

                  <div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">

                        @include('partials.messages')


                        <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{route('admin.division.update',$division->id)}}">
                          {{ csrf_field() }}
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">division name</label>
                            <div class="col-sm-9">
                              <input value="{{ $division->name }}" name="name" type="text" class="form-control" >
                            </div>
                          </div>



                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">priority</label>
                            <div class="col-sm-9">
                              <input value="{{$division->priority}}" name="priority" type="text" class="form-control" >
                            </div>
                          </div>


                          <button type="submit" class="btn btn-success mr-2">Submit</button>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>












@endsection
