<div style=" font-size: 2rem;" class="">
	 
	
	<div style="font-size: 1rem;">

		<input type="text" wire:model="cedula"  class="slideselector"  autofocus required placeholder="Cedula" onkeyUp="return ValNumero(this);"> 
		@error('cedula')
			<label class="alert-danger">Cedula Obligarotia</label>
		@enderror
     </div>
            

     <div  style="font-size: 1.5rem; margin-top:2%;">
		<input type="text"   wire:model="name" class="slideselecto"  autocomplete="on" placeholder="Nombre(s)"> 
     </div>
     
     <div  style="font-size:1.5rem; padding-top:1%;">     
		<input type="text" wire:model="last_name" autocomplete="on" placeholder="Apellidos(s)">
	 </div>
	 
	 
       <small style="color:#0000FF;">Información de contacto</small>
     
     <div class="info">   		 			
				 E-mail
				<input type="email" class="form-control" wire:model="email"  autocomplete="on" style=" font-size: 2rem;" > 
					 @error('email')
						<label class="alert-danger"> E-mail no valido</label>
					@enderror
				Telefono
				<input type="text" class="form-control"  wire:model="telef"  autocomplete="on"  onkeyUp="return ValNumero(this);" style=" font-size: 2rem;" >  
				 @error('telef')
					<span class="alert-danger"> Numero no valido!!</span>
				@enderror    
		           
     </div>

 </div>



<script src="{{ asset('js/validar.js') }}"></script>

