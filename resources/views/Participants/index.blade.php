@extends('layouts.appAuth')
@section('title','- Usuarios ')
@section('content')

<div class="title" ><b>Participantes</b></div> 
	    <div align="right">
			<a href="{{ route('AdmUser') }}"  ><img src="{{ asset('images/irAtras.jpg') }}" width="100" height="120"></a>
	     </div>
	     

<div class="col-sm-8">
		<h2>
			
			
			<a href="{{ route('newPart') }}" class="btn btn-primary pull-right">Nuevo</a>
		 </h2>
		
</div>		
		
		
<div style="margin-left:8%; margin-right:8%;">

		 @if (session('mensaje'))
			<div class="alert alert-success">             
				{{ session('mensaje') }}
			</div>
		@endif
			<table class="table table-striped">
			<thead class="thead-dark">
					<tr>
						<th>Cedula</th>
						<th>Nombres y apellido</th>
						<th>Accion </th>
					</tr>
			</thead><tr>                     
			<tbody>
				@foreach($part as $item)
			<tr>
				<td>{{$item->cedula}}</td>
				<td>{{$item->name}} {{$item->last_name}}</td>
				<td>
					<a href="{{route('verPart', $item)}}"><img src="{{ asset('images/ver.png') }}">Ver</a>  
				</td>                                                                             
			<tr>
			   @endforeach
			</tbody>
			</table>

	
 </div>



	
	
	
@endsection
