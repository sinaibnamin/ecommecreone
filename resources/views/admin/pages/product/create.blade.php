@extends('admin.layouts.master')
@section('content')





            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">create product</h4>

                </div>
              </div>

            </div>


            <div class="row flex-grow">

                  <div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">

                        @include('partials.messages')

                        <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{route('admin.product.store')}}">
                          {{ csrf_field() }}
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">title</label>
                            <div class="col-sm-9">
                              <input name="title" type="text" class="form-control" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">category</label>
                            
                            <div class="col-sm-9">
                              <select class="form-control" name="category_id">
                                <option value="">select category</option>
                                @foreach ($categories as $category)
                                  @php
                                    $childs = App\Category::where('parent_id',$category->id)->get();
                                  @endphp
                                  @if ($category->parent_id == NULL && count($childs) > 0)
                                      <option disabled value="">{{$category->name}}</option>
                                  @endif
                                  @foreach (App\Category::where('parent_id',$category->id)->get() as $childcat)
                                      <option value="{{$childcat->id}}"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$childcat->name}}</option>
                                  @endforeach
                                @endforeach
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">brand</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="brand_id">
                                <option value="">select brand</option>
                                @foreach ($brands as $brand)
                                  <option value="{{$brand->id}}">
                                    <span><img style="max-width:40px;max-height:40px;" class="" src="{{asset('images/brandimg')}}/{{$brand->image}}" ></span>
                                    {{$brand->name}}</option>
                                @endforeach
                              </select>

                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">description</label>
                            <div class="col-sm-9">
                              <input name="description" type="text" class="form-control" >
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">price</label>
                            <div class="col-sm-9">
                              <input name="price" type="number" class="form-control" >
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">quantity</label>
                            <div class="col-sm-9">
                              <input name="quantity" type="number" class="form-control" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">image</label>
                            <div class="col-sm-9">
                              <input name="product_image[]" type="file" class="form-control" >
                              <input name="product_image[]" type="file" class="form-control" >
                              <input name="product_image[]" type="file" class="form-control" >
                              <input name="product_image[]" type="file" class="form-control" >
                              <input name="product_image[]" type="file" class="form-control" >
                            </div>
                          </div>

                          <button type="submit" class="btn btn-success mr-2">Submit</button>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>












@endsection
