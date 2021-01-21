 <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-success bt-new">	Añadir New </button>  <img src="{{asset('images/AddNew.jpeg')}}" width="200" height="100"> 

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	 
	
	  <div class="modal-content">
		      <div class="modal-header">
		         <h5 class="display-4 text-primary" id="exampleModalLabel">New Faciliator</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		           <span aria-hidden="true close-btn"><img src="{{asset('images/icons/close.png')}}" width="50"></span>
		        </button>
	     	 </div>
	     	   <form enctype="multipart/form-data">

		     <div class="modal-body" style="" align="left">
				<input type="text" wire:model="cedula"  class="slideselector" style=" font-weight:bold;"  autofocus required placeholder="Cedula" onkeyUp="return ValNumero(this);" wire:change="verif"> 
				@error('cedula')
					<label class="alert-danger">Cedula Obligarotia</label>
				@enderror
		    </div>
              @if (session('mensaje'))
					<div class="alert alert-success">             
						<small>{{ session('mensaje') }}  </small>
					</div>
				 @endif

		     <div  style="font-size: 1.5rem; margin-top:2%;">
				<input type="text"   wire:model="name" class="slideselecto"  autocomplete="on" placeholder="Nombre(s)"> 
		     </div>
     
		     <div  style="font-size:1.5rem; padding-top:1%;">     
				<input type="text" wire:model="last_name" autocomplete="on" placeholder="Apellidos(s)">
			 </div>

			 <div class="form-gruop">
				 <div  style="font-size:1.5rem; padding-top:1%;">Profession: 
				 	<select wire:model="profession_id">
				 		<option value="">Seleccione</option>
				 		@foreach($professions as $profession)
				 		<option value="{{$profession->id}}">{{$profession->name}} - {{$profession->abrev}}</option>
				 		@endforeach
				 	</select>
				 </div>
			 </div>

	 
             <small style="color:#0000FF;">Información de contacto</small>
     
       
             <div class="info">   		 			
				<DIV>E-mail
					<input type="email" class="form-control" wire:model="email"  autocomplete="on" style=" font-size: 2rem;" > 
					 @error('email')
						<label class="alert-danger"> E-mail no valido</label>
					@enderror
				</DIV>
				<div>Telefono
					<input type="text" class="form-control"  wire:model="telef"  autocomplete="on"  onkeyUp="return ValNumero(this);" style=" font-size: 2rem;" >  
	    
                </div>
                <div>
					<label>WhatsApp</label> 
					<input  type="text" wire:model="NroWp" class="form-control" style=" font-size: 2rem;" />
	            </div>
	         </div>
	         <button wire:click="store"  class="btn btn-primary bt-save">
				Guardar
			</button>
	     </form>
  		</div>
	</div>
</div>
<script src="{{ asset('js/validar.js') }}"></script>


</script>

