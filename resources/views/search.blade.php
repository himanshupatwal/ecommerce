@extends('layouts.master')

@section('content')
<div class="container my-5">
	<h3>Search for Products</h3>
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