@extends('layouts.master')
@section('styles')
<style type="text/css">
.login{
	margin-top:100px;
}
</style>

@endsection
@section('content')
<div class="container my-5">
	<div class="row">
		<div class="col-lg-6 mx-auto login">
			<form action="{{route('login')}}" method="POST">
				@csrf
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			
		</div>
	</div>
</div>

@endsection