<div>
<img src="{{asset('images/icons/editar.png')}}" class="img-AddNew"> 

@include('Admin.participants.form')

<button wire:click="update" class="btn btn-success"> Actualizar</button>

<button wire:click="default" class="btn btn-danger"> Cancelar </button>
</div>
