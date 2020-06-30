@extends('layouts.app')

@section('content')

<div class="container">
	<h2>LIST OF CAREER
		<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#edit-modal">
			Add Career
		</button>

	</h2>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">NAME</th>
	      <th scope="col">SIGLAS</th>
	      <th scope="col">CREATION DATE</th>
	      <th scope="col">DATE UPDATE</th>
	      <th scope="col">DATE DELETED</th>
	      <th scope="col">OPTIONS</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($carrera as $carreras)
	    <tr>
	      <th scope="row">{{$carreras-> id}}</th>
	      <td>{{$carreras-> nombre}}</td>
	      <td>{{$carreras-> siglas}}</td>
	      <td>{{$carreras-> created_at}}</td>
	      <td>{{$carreras-> updated_at}}</td>
	      <td>{{$carreras-> deleted_at}}</td>

		  <td>
		  	<a href="{{route('carrera.edit',$carreras->id)}}">
		  		<button type="button" class="btn btn-warning btn-sm" ><i class="far fa-edit"></i></button>	
		  	</a>
		  	{{-- <a href="{{route('usuarios.destroy')}}"> --}}
		     	{{-- <button type="button" class="btn btn-danger btn-sm">DELETE</button> --}}
		  	{{-- </a> --}}
		    
		  {{-- </td> --}}
	    </tr>
	  @endforeach 
	  </tbody>
	</table>

</div>


<div class="modal fade" id="edit-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title" align="center"><b>REGISTER CAREER</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
     	<form action="{{route('carrera.store')}}" method="POST">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <div class="box-body">
                
			@csrf
			  <div class="form-group">
			    <label for="name">Career Name</label>
			    <input type="text" class="form-control" name="name" placeholder='Career name'>
			  </div>
			  <div class="form-group">
			    <label for="siglas">Acronyms</label>
			    <input type="text" class="form-control" name="siglas" placeholder='Acronyms'>
			  </div>
				
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">REGISTER</button>
		    <button type="reset" class="btn btn-danger">CANCEL</button>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>


@endsection