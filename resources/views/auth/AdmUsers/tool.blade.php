@extends('layouts.appAuth')
@section('title','- Usuarios ')
@section('content')

<div class="title" ><b>Usuario | Cursos | Paticipantes | Responsables</b></div>
	
           
<div class="toll" style="margin-top:5%;">	
	               <!-- CURSOS -->
	<div  class="toll-enl" >
		<img src="{{ asset('images/cursos-online.jpeg') }}"  width="400" height="300" style="opacity:0.5;"> <br>
		<a href="{{ route('cursos') }}" style="font-size:24px;">  
				Click aqui
		</a><BR> para entrar a la seccion de cursos
	</div>
				<!-- RESPONSABLS -->
	 <div class="toll-enl-2">
	      <a href="{{ route('resp-livew')}}" title="Responsabls">
			  <img src="{{asset('images/resp.png')}}" width="150" height="300" ><br>Responsables
		  </a>
	
	 </div>
	  
				<!-- PARTICIPANTS -->
	
   <div class="toll-enl-2">
		<a href="{{ route('part-livew') }}">
			<img src="{{asset('images/participants.jpg')}}" width="400" height="300" style="opacity:0.3;"><br>
			Participants
		</a>
	</div>
	
</div>


        
				<!-- IINSCRIPCION-->
	
   <div class="toll-enl-2">
		<a href="{{ route('insc-auth') }}">
			<img src="{{asset('images/reg.jpg')}}" width="400" height="300" style="opacity:0.8;"><br>
			Inscripcion
		</a>
	</div>





	<!-- USUARIOS -->
	<div style=" margin-top:8%; margin-left:2%;" align="center">
		  @if (session('mensaje'))
			<div class="alert alert-success">             
				{{ session('mensaje') }}
			</div>
		 @endif
		 <label style="" align="center">
			<a href="{{ route('register') }}">
				<img src="{{ asset('images/bt-new.jpg') }}" class="img-bt-new">
				<img src="{{asset('images/loguear.jpeg')}}" class="img-bt-user"> 					
			</a> 				
		</label> 		
		<table class="table table-striped" >
				<thead class="thead-dark">
					<tr>      
						<th scope="col">Usuario</th>
						<th scope="col">Nombres</th>
						<th scope="col">Privilegios</th>
					</tr>
				</thead>			
			@foreach($users as $item)
				<tbody> 
					<tr style="">   
						<td style="text-align: center;" ><a href="{{route('ver', $item)}}"><?php echo (strtoupper($item->username)) ?></a></td>  
						<td scope="row">{{$item->name}}  {{ $item->last_name }}</td>    
						@if($item->privileges === 1) 
							 <td style="text-align: center;">Aministrador</td> 
						@endif
						@if($item->privileges === 2) 
							 <td style="text-align: center;">Super Usuario</td> 
						@endif
						@if($item->privileges === 3) 
							 <td style="text-align: center;">Invitado</td> 
						@endif 			  
					</tr>				
				</tbody>
			@endforeach
		</table>           
		<label>{{ $users->links()}}</label>                              	  
	</div>
		

	
	
	
@endsection
