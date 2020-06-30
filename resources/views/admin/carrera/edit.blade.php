@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h4 class="modal-title" align="center"><b>UPDATE UNIVERSITY CAREER</b></h4>
				<form action="{{route('carrera.update',$carrera->id)}}" method="POST">
					@method('PATCH')
					@csrf
				  <div class="form-group">
				    <label for="name">Career Name</label>
				    <input type="text" class="form-control" name="name" value="{{$carrera->nombre}}">
				  </div>
				  <div class="form-group">
				    <label for="siglas">Acronyms</label>
				    <input type="text" class="form-control" name="siglas" value="{{$carrera->siglas}}">
				  </div>
				  <button type="submit" class="btn btn-primary">SAVE</button>
				  <button type="reset" class="btn btn-danger">CANCEL</button>
				</form>
			</div>
		</div>
	</div>
@endsection