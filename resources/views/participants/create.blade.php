<div style="widht:100%;">
	
	<img src="{{asset('images/AddNew.jpeg')}}" class="img-AddNew">      

	@include('participants.form')

	<button wire:click="store"  class="btn btn-primary bt-save">
		Guardar
	</button>

 </div>
