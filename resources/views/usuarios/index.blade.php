@extends('layouts.app')

@section('content')

<div class="container">
	<h2>LIST OF REGISTERED USERS 
		<a href="{{route('usuarios.create')}}">
			<button type="button" class="btn btn-success float-right">Add User</button>
		</a>
	</h2>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">NAME</th>
	      <th scope="col">EMAIL</th>
	      <th scope="col">OPTIONS</th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($users as $user)
	    <tr>
	      <th scope="row">{{$user-> id}}</th>
	      <td>{{$user-> name}}</td>
	      <td>{{$user-> email}}</td>
		  <td>
		  	<a href="{{route('usuarios.edit',$user->id)}}">
		  		<button type="button" class="btn btn-warning btn-sm"><i class="nav-icon far fa-edit"></i></button>	
		  	</a>
		  	{{-- <a href="{{route('usuarios.destroy')}}"> --}}
		     	{{-- <button type="button" class="btn btn-danger btn-sm">DELETE</button> --}}
		  	{{-- </a> --}}
		    
		  </td>
	    </tr>
	  @endforeach 
	  </tbody>
	</table>

</div>

{{-- <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <th scope="row">{{$user-> id}}</th>
      <td>{{$user-> name}}</td>
      <td>{{$user-> email}}</td>

    </tr>
  @endforeach 
  </tbody>
</table> --}}

@endsection