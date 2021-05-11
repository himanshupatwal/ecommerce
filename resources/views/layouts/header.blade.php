<?php
use App\Http\Controllers\ProductController;
$totalItems = 0;
if(Session::has('user')){
$totalItems = ProductController::cartItems();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}">ecommerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
      </li>
      <li>
       <form class="form-inline" action="{{route('search')}}">
        @csrf
        <input class="form-control mr-sm-2 search-box" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </li>
  </ul>
  <ul class="navbar-nav navbar-left mr-5"> 
    <li class="nav-item">
      <a class="nav-link" href="#">Cart({{$totalItems}})</a>
    </li>
    @if(Session::has('user'))
    <li class="dropdown my-2 ml-4">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <a href="{{url('logout')}}"><li>Logout</li></a>
        </ul>
      </li>
    @else
    <li class="my-2 ml-4"><a href="{{url('login')}}">Login</a></li>
    @endif
  </ul>
</div>
</nav>