@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form method="POST" action="/auth/login">
				{{ csrf_field() }}
				
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
				</div>
				
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				
				<div class="form-group">
					<input type="checkbox" name="remember" id="remember">
					<label for="remember">Remember Me</label>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>

			@include('errors')
		</div>
	</div>
@stop