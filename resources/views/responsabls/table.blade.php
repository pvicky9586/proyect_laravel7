<div>

      @if (session('mensaje'))
		<div class="alert alert-success">             
			{{ session('mensaje') }}
		</div>
	 @endif
	<br>
	<input type="text" class="search-input" wire:model="searchResp" placeholder="Buscar" >
	<table class="table">
		<thead class="thead-dark">
		<tr align="center">
			<th>Nombres(s)</th>
			<th>Apellido(s)</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
		@foreach($resps as $resp)
		<tr>
			<td>{{ $resp->name }}</td>
			<td>{{ $resp->last_name }}</td>
			<td align="center">
				<button wire:click="edit({{ $resp->id }})" class="btn btn-info">editar | ver</button>

<!--
				&npsn; <button wire:click="destroy({{ $resp->id }})" class="btn btn-danger">Eliminar</button>
-->

			</td>
		</tr>
		
		@endforeach

	</tbody>
	</table>
	
     <div style="color:blue;">
			{{ $resps->links() }}
     </div>
     
     
 </div>
