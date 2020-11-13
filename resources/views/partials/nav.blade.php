<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('products')}}">Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('brands')}}">Brands</a>
    </li>




    <li class="nav-item">
      <a class="nav-link" href="{{route('contact')}}">Contact</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.index')}}">Admin</a>
    </li>


  </ul>
  <form class="form-inline my-2 my-lg-0" action="{{route('product.search')}}" method="post" >
    @csrf
    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>
</nav>
