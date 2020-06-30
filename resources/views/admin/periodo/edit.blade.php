@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h4 class="modal-title" align="center"><b>REGISTER PERIOD</b></h4>
				<form action="{{route('periodo.update',$periodo->id)}}" method="POST">
					@method('PATCH')
					@csrf
				  <div class="form-group">
				    <label for="period_name">Period Name</label>
				    <input type="text" class="form-control" name="period_name" value="{{$periodo->nombre}}">
				  </div>
				  <button type="submit" class="btn btn-primary">SAVE</button>
				  <button type="reset" class="btn btn-danger">CANCEL</button>
				</form>
			</div>
		</div>
	</div>
@endsection