@extends('layouts.appAdmin')
@section('title','- Detalles')
@section('content')

     
<div class="title" ><b>Usuario -> <small>{{ Auth::user()->username }}</small></b></div><br>

<div align="center" style="">
	 <img src="{{ asset('images/icons/user.png') }}"  class="irAtras"></a> 
	<div>
		  <h1>{{ $user->name}} {{ $user->last_name}}</h1>
		<h3>E-mail: {{ $user->email}}</h3><br>
			@if($user->privileges === 1) 
			 <label>usuario Aministrador</label> 
		@endif
		 @if($user->privileges === 0) 
			 <label>usuario Invitado</label> 
		@endif

	</div>
  
 </div>
    
  <div align="left" style="margin-left:60%;">
	<a href="{{ route('AdmUser') }}" title="ir atras">
	   <img src="{{ asset('images/icons/back.png') }}"  class="irAtras"></a> 
	</div>
<br><br><br>
@endsection
