@extends('layouts.master')
@section('styles')
<style type="text/css">
	.carousel-caption{
		background:#7998a2a6;
	}
</style>
@endsection
@section('content')
<div class="my-5">
	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			<li data-target="#demo" data-slide-to="3"></li>
		</ul>
		<div class="carousel-inner">
			@foreach($details as $detail)
			<div class="carousel-item {{$detail['id']==1?'active':''}}">
      			<a href="{{route('detail',$detail['id'])}}">
					<img src="{{asset('images').'/'.$detail['gallery']}}" width="300" height="300">
					<div class="carousel-caption">
						<h3>{{$detail['name']}}</h3>
						<p>{{$detail['description']}}</p>
					</div> 
				</a>
			</div>
			@endforeach
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
</div>
<div class="container">
	<h2>Trending Products</h2>
	<div class="row">
		@foreach($details as $detail)
		<div class="col-lg-3">
			
			<a href="{{route('detail',$detail['id'])}}">
				<img src="{{asset('images').'/'.$detail['gallery']}}" width="200" height="200">
				<div class="text-center">
					<h5>{{$detail['name']}}</h3>
					<h4>₹{{$detail['price']}}</h2>
				</div>
			</a>
		</div>   	
		@endforeach
	</div>  
</div>
@endsection
