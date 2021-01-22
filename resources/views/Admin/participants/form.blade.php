<div style=" font-size: 2rem;" class="">
	 
	 <small style="color:#BFBFBF; font-size: 2rem;">Información personal</small>
	 
	<div style="font-size: 1rem;">  
		<input type="text" wire:model="cedula"  class="slideselector"  autofocus required placeholder="Cedula"  onkeyUp="return ValNumero(this);" wire:change="verif"> 
		@error('cedula')
			<label class="alert-danger">Cedula obligarotia</label>
		@enderror
     </div>
        <!--       @if (session('mensaje'))
					<div class="alert alert-success">             
						<small>{{ session('mensaje') }}  </small>
					</div>
				 @endif
 -->
     <div  style="font-size: 1.5rem; padding-top:2%;">
		<input type="text"   wire:model="name" class="slideselecto"  autocomplete="on" placeholder="Nombre(s)"> 
      
		<input type="text" wire:model="last_name" autocomplete="on" placeholder="Apellidos(s)">
	 </div>
	 <br>

       <small style="color:#BFBFBF; font-size: 2rem;">Información de contacto</small>
     
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

