@extends('admin.layouts.master')
@section('content')





            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Edit category</h4>

                </div>
              </div>

            </div>


            <div class="row flex-grow">

                  <div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">

                        @include('partials.messages')


                        <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{route('admin.category.update',$category->id)}}">
                          {{ csrf_field() }}
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">category name</label>
                            <div class="col-sm-9">
                              <input value="{{ $category->name }}" name="name" type="text" class="form-control" >
                            </div>
                          </div>
                          @if ($category->parent_id == NULL)
                            @php  $parent_id = 0;  @endphp
                            @else
                              @php  $parent_id = $category->parent_id;  @endphp
                          @endif
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">parent category</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="parent_id">
                                <option value="">select parent</option>
                                @foreach ($pcategories as $pc)
                                  <option
                                  @if ($parent_id == $pc->id )
                                    selected
                                  @endif
                                   value="{{ $pc->id }}">{{ $pc->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">description</label>
                            <div class="col-sm-9">
                              <input value="{{$category->description}}" name="description" type="text" class="form-control" >
                            </div>
                          </div>


                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">old image</label>
                            <div class="col-sm-9">
                              @if ($category->image !== null)
                                  <img height="50" width="50" src="{{asset('images/categoryimg')}}/{{$category->image}}" alt="">
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
