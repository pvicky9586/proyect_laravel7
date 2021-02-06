<div style="margin-top: 10%;">

				 @if (session('mensaje'))
					<div class="alert alert-success">             
						{{ session('mensaje') }}
					</div>
				 @endif
	<table class="table">   		
		<thead class="thead-dark"> 			
		<tr align="center">   
				<th>Course</th>
				<th>Participants Nª</th>
				<th><img src="{{asset ('images/icons/show.png')}}" width="50"></th>
			</tr>
		</thead>
		@foreach($cursos as $curso) 
		<tbody>			
			<tr>
				<td class="text-primary text-center text-uppercase" style="height: auto;width: 60%;">
					{{$curso->title}}
				</td>

				<td class="display-5 text-center" style="display: flex;">{{$curso->inscs_count}}
					<img src="{{asset ('images/icons/nosotros-cont.png')}}" wire:click="ConfIns({{ $curso->id }})" class="all-scroll" width="80" height="50" title="confirmar inscripción">
					
				</td>					
	
				<td align="center" class="ver-insc">
					<img src="{{asset ('images/icons/ver.png')}}" wire:click="ver({{ $curso->id }})" class="all-scroll" width="30" title="ver">		
				</td>

			</tr>			
		</tbody>
		@endforeach
	</table>

	 <div style="color:blue;">
			{{ $cursos->links() }}
     </div>
     
 </div>