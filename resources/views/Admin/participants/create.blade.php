<div style="widht:100%;">
	
	<img src="{{asset('images/icons/AddNew.jpeg')}}" class="img-AddNew">      

	@include('Admin.participants.form')

	<button wire:click="store"  class="btn btn-primary bt-save">
		Guardar
	</button>

 </div>
