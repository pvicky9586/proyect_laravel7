@extends('layouts.appAuth')
@section('title','- Participants')
@section('content')

 <div class="title" ><b>{{ $watch->name }} {{$watch->last_name}}</b></div><br>


<div align="right">    
	<a href="{{ route('participants') }}" ><img src="{{ asset('images/irAtras.jpg') }}"  class="irAtras"></a> 
</div>
<div class="tool">

	<div class="ver">
		<label> Nombre(s): <b> {{ $watch->name}} </b></label> <br>
		<label>   Apelllido(s):<b>{{ $watch->last_name}}</b></label>  <br><br>
		  
		  <h2>Email: {{ $watch->email}}</h2>   <br><br><br><br>
		  
		  <a href="{{route('EditPart', $watch->id)}}"><img src="{{ asset('images/editar.png') }}">Actualizar datos</a>
	</div>   	   
	
</div>

 
@endsection


