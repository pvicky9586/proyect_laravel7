<div class="row">
	<div class="col-sm-3">
		@include("livewire.$view") <!--llamando a la vista de creacion o edit segun sea el caso, esta a su vez utilizan ambas el mismo formulario del archivo 'form'-->
	</div>
   <div class="col-sm-9">
		@include('livewire.table')   
   </div>	
</div>
