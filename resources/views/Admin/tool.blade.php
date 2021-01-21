@extends('layouts.appAdmin')
@section('title','- Section Admin')
@section('content')

<div class="title" >
	<small>Welcome Section Admin</small>
</div>
	<p >Courses | Participants | Responsible | Inscription | Virtual Class | User | Reports</p>
	
           
<div class="toll" style="margin-top:5%;">	

				<!-- RESPONSABLS -->
	 <div class="toll-enl-2">
	      <a href="{{ route('resp-livew')}}" title="Responsabls">
			  <img src="{{asset('images/resp.png')}}" width="150" height="300" ><br>
			  Responsibles
		  </a>	
	 </div>
	  
				<!-- PARTICIPANTS -->
	
   <div class="toll-enl-2">
		<a href="{{ route('part-livew') }}">
			<img src="{{asset('images/participants.jpg')}}" width="400" height="300" style=""><br>
			Participants
		</a>
	</div>	



	<!-- USERS -->
	<div class="toll-enl-2"> 
			<a href="{{ route('AdmUser') }}">
			<img src="{{asset('images/loguear.jpeg')}}" width="400" height="300" style="opacity: 0.3"><br>
			Users
		</a>                           	  
	</div>

</div>


<div class="toll" style="margin-top:5%;">
<!-- CURSOS -->
	<div  class="toll-enl" >
		<a href="{{ route('cursos') }}" style="font-size:24px;"> 
		<img src="{{ asset('images/cursos-online.jpeg') }}"  width="400" height="300" style="opacity:0.5;"> <br>
		 Courses
		</a>
	</div>
<!-- IINSCRIPTION-->
	
   <div class="toll-enl-2">
		<a href="{{ route('insc-auth') }}">
			<img src="{{asset('images/reg.jpg')}}" width="400" height="300" style="opacity:0.8;"><br>
			Inscription
		</a>
	</div>

<!-- Virtual Class  -->
<div class="toll-enl-2">
		<a href="{{ route('class')}}"> 
			<img src="{{ asset('images/aula-virtual.png')}}" class="" width="400" height="300" title="entrar al Aula Virtual"><br>
		</a> 
	</div> 

</div>



<div class="toll" style="margin-top:5%;">


<!-- Virtual Class  -->
<div class="toll-enl-2">
		<a href="{{ route('AV-livew')}}"> 
			<img src="{{ asset('images/list-inscrip.png')}}" class=""  title="ver registro de inscripcion"><br>
		</a> 
	</div> 

</div>


		


	   	
	
	
	
	
@endsection
