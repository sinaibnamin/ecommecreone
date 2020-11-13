@extends('admin.layouts.master')
@section('content')





            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Edit brand</h4>

                </div>
              </div>

            </div>


            <div class="row flex-grow">

                  <div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">

                        @include('partials.messages')


                        <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{route('admin.brand.update',$brand->id)}}">
                          {{ csrf_field() }}
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">brand name</label>
                            <div class="col-sm-9">
                              <input value="{{ $brand->name }}" name="name" type="text" class="form-control" >
                            </div>
                          </div>



                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">description</label>
                            <div class="col-sm-9">
                              <input value="{{$brand->description}}" name="description" type="text" class="form-control" >
                            </div>
                          </div>


                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">old image</label>
                            <div class="col-sm-9">
                              @if ($brand->image !== null)
                                  <img height="50" width="50" src="{{asset('images/brandimg')}}/{{$brand->image}}" alt="">
                                  @else
                                    image nai
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">change image</label>
                            <div class="col-sm-9">
                              <input name="image" type="file" class="form-control" >
                            </div>
                          </div>

                          <button type="submit" class="btn btn-success mr-2">Submit</button>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>












@endsection
