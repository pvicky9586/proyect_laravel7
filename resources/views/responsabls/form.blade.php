<div style=" font-size: 2rem;" class="">
	 
	
		<div style="font-size: 1rem;">
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

 </div>
<script src="{{ asset('js/validar.js') }}"></script>


</script>

