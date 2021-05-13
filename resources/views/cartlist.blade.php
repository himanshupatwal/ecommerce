@extends('layouts.master')
@section('styles')
<style type="text/css">
	.productlist{
		border-bottom:1px solid grey;
		margin:20px 0;
		padding:20px 0;
	}
</style>
@endsection
@section('content')
<div class="container my-5">
	@foreach($products as $product)
	<div class="row productlist">
		<!-- <a href="{{ url()->previous() }}">Go Back</a>	 -->
		<div class="col-lg-4">
			<a href="{{route('detail',$product->id)}}">
				<img src="{{asset('images').'/'.$product->gallery}}" width="100" height="150">	
			</a>
		</div>
		<div class="col-lg-4">
			<h2>{{$product->name}}</h2>
			<h5>₹{{$product->price}}</h5>
			<h5>{{$product->description}}</h5>
		</div>	
		<div class="col-lg-4">
          <a href="{{route('removecart',$product->cart_id)}}" class="btn btn-warning">Remove from Cart</a>
		</div>
	</div>
	@endforeach
	<a href="{{route('ordernow')}}" class="btn btn-success" style="float:right">Buy Now</a>
</div>

@endsection