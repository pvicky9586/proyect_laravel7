<div>

                 @if (session('mensaje'))
					<div class="alert alert-success">             
						{{ session('mensaje') }}
					</div>
				 @endif
				 <br>
                <div align="right">
					
			    </div>   
	<input type="text" class="search-input"  wire:model="searchPart"  placeholder="Buscar" >                            
	<table class="table">   		
		<thead class="thead-dark"> 			
		<tr align="center">        			
			<th>Nombres(s)</th>
			<th>Apellido(s)</th>
			<th>Accion</th>
		</tr>
		</thead>
		<tbody> 
@if($parts->count())
		@foreach($parts as $part)
		<tr>
			<td>{{ $part->name }}</td>
			<td>{{ $part->last_name }}</td>
			<td align="center">
				<button wire:click="edit({{ $part->id }})" class="btn btn-info">editar | ver</button>

<!--
				&npsn; <button wire:click="destroy({{ $part->id }})" class="btn btn-danger">Eliminar</button>
-->

			</td>
		</tr>
		
		@endforeach

	</tbody>
@else
	<h1>No hay registros</h1>
@endif

</table>
     <div style="color:blue;">
			{{ $parts->links() }}
     </div>
 </div>
    
  
