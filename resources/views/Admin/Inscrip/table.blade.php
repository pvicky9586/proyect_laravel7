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
				<th><img src="{{asset ('images/icons/impress.png')}}" width="50"></th>
			</tr>
		</thead>
		@foreach($cursos as $curso) 
		<tbody>			
			<tr>
				<td class="text-primary text-center text-uppercase" style="height: auto;width: 60%;">
					{{$curso->title}}
				</td>

				<td class="display-5 text-center" style="display: flex;">{{$curso->inscs_count}}
					<small style="font-size: 0.8rem; height: auto;width: 60%; color: red;"><i>'¿pueden haber aspirantes sin confirmar?',</i> pinche para confirmar</small>	
					<img src="{{asset ('images/icons/nosotros-cont.png')}}" wire:click="ConfIns({{ $curso->id }})" class="all-scroll" width="80" height="50">
					
				</td>
					
	
				<td align="center" style="height: auto;width: 10%; flex-direction: 5%;">
				<!-- 	<img src="{{asset ('images/icons/ver.png')}}" wire:click="show({{ $curso->id }})" class="all-scroll" width="20">	 -->

					<img src="{{asset ('images/icons/ver.png')}}" wire:click="pdf({{ $curso->id }})" class="all-scroll" width="40">				
				<!-- <button wire:click="edit({{ $curso->id }})" class="btn btn-info">Ver</button> -->
                 
<!--
				&npsn; <button wire:click="destroy({{ $curso->id }})" class="btn btn-danger">Eliminar</button>
-->

			</td>

			</tr>			
		</tbody>
		@endforeach
	</table>

     
 </div>