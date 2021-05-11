@extends('layouts.master')

@section('content')
<div class="container my-5">
	<div class="row">
		<div class="col-lg-6">
			<img src="{{asset('images').'/'.$data['gallery']}}" width="350" height="350">	
		</div>
		<div class="col-lg-6">
			<a href="{{ url()->previous() }}">Go Back</a>	
			<h2>{{$data['name']}}</h2>
			<h3>Price:{{$data['price']}}</h3>
			<h5>Detail:{{$data['description']}}</h5>
			<h5>Category:{{$data['category']}}</h5>
			<br><br>
			<form action="{{route('AddToCart')}}" method="POST">
				@csrf
				<input type="hidden" name="product_id" value="{{$data['id']}}">
				<button class="btn btn-primary">Add to Cart</button>
			</form>
			<br><br>
			<button class="btn btn-success">Buy Now</button>

		</div>
	</div>
</div>

@endsection