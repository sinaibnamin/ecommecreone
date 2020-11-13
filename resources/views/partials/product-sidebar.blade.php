<style media="screen">
  .list-group-item.active > a{
    color: white !important;
  }

</style>


            <ul class="list-group">
              @foreach (App\Category::where('parent_id',NULL)->get() as $parent)
                @php
                  $childs = App\Category::where('parent_id',$parent->id)->get();

                @endphp

                <li class="list-group-item p-0">
                    <a class="p-3" href="#submenu{{$parent->id}}" data-toggle="collapse">
                      <img width="60" height="60" src="{{asset('images/categoryimg')}}/{{$parent->image}}" alt="">
                      {{$parent->name}}

                      @if (count($childs) > 0)
                          <span style="font-size:20px;" class="ml-5 font-weight-bold" >⇩</span>
                      @endif
                    </a>


                    @if (count($childs) > 0)
                      <div class="collapse
                      @isset ($category)
                          {{ $category->parent_id == $parent->id ? 'show' : '' }}
                      @endisset


                       " id="submenu{{$parent->id}}" aria-expanded="false">
                          <ul class="list-group mt-2 mb-4 pl-5 nav">
                            @foreach ($childs as $child)
                              <li class="list-group-item
                              @isset ($category)
                                {{  $category->id == $child->id ? 'active' : ''  }}
                              @endisset


                               p-0"><a class=" p-1" href="{{route('product.category',$child->id)}}">
                                <img width="40" height="40" src="{{asset('images/categoryimg')}}/{{$child->image}}" alt="">
                                {{$child->name}}</a>
                              </li>
                            @endforeach
                          </ul>
                      </div>
                    @endif




                </li>
              @endforeach

           </ul>
