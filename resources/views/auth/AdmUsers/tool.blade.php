@extends('layouts.appAdmin')
@section('title','- Section Admin')
@section('content')

<div class="title" >
	<small>Welcome Section Admin</small>
</div>
	<p >Courses | Participants | Responsible | Inscription | Virtual Class | User | Reports</p>
	
           
<div class="toll" style="margin-top:5%;">	

	


	<!-- USERS -->
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


</div>
		


	   	
	
	
	
	
@endsection
