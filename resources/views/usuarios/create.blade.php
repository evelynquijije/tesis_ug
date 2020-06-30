@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<form action="{{route('usuarios.store')}}" method="POST">
					@csrf
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" placeholder='Enter your name'>
				    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" name="email" placeholder='Enter your email'>
				   
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" name="password" placeholder='Enter your password'>
				  </div>
				 
				  <button type="submit" class="btn btn-primary">REGISTER</button>
				  <button type="reset" class="btn btn-danger">CANCEL</button>
				</form>
			</div>
		</div>
	</div>
@endsection