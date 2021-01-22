<div>
{{$title}}
	  @if (session('mensaje'))
			<div class="alert alert-success">             
				{{ session('mensaje') }}
			</div>
	  @endif

	<table class="table">   		
		<thead class="thead-dark"> 			
		<tr align="center">   
				<th>Course</th>
				<th>Participants</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cursos as $curso) 
			<tr>
				<td class="text-primary text-center text-uppercase">
					{{$curso->title}}
				</td>
				<td class="display-5 text-center">{{$curso->inscs_count}}</td>
				<td align="center">
				<img src="{{asset ('images/icons/show.png')}}" wire:click="edit({{ $curso->id }})">				
				<!-- <button wire:click="edit({{ $curso->id }})" class="btn btn-info">Ver</button> -->
                 
<!--
				&npsn; <button wire:click="destroy({{ $curso->id }})" class="btn btn-danger">Eliminar</button>
-->

			</td>

			</tr>
			@endforeach
		</tbody>
	</table>




















				
				






              

         
		
     
 </div>