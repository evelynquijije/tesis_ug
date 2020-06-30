@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
				<form action="{{route('usuarios.update',$user->id)}}" method="POST">
					@method('PATCH')
					@csrf
					<script src="https://kit.fontawesome.com/b1706e1ceb.js" crossorigin="anonymous"></script>
					<script type="text/javascript">
					function mostrarPassword(){
							var cambio = document.getElementById("txtPassword");
							if(cambio.type == "password"){
								cambio.type = "text";
								$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
							}else{
								cambio.type = "password";
								$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
							}
						} 
						
						$(document).ready(function () {
						//CheckBox mostrar contraseña
						$('#ShowPassword').click(function () {
							$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
						});
					});
					</script>

				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" value="{{$user->name}}" >
				    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" name="email" value="{{$user->email}}">
				  </div>

				{{-- <div class="form-group">
						<label for="password">Password</label>
				        <div class="input-group">
						      <input ID="txtPassword" type="Password" Class="form-control" value="{{$user->password}}">
						      <div class="input-group-append">
						            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> 
						            	<span class="fa fa-eye-slash icon"></span> 
						            </button>
						      </div>
						</div>
			
				 </div> --}}
				  <button type="submit" class="btn btn-primary">SAVE</button>
				  <button type="reset" class="btn btn-danger">CANCEL</button>
				</form>
			</div>
		</div>
	</div>
@endsection