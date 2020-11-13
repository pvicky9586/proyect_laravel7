<div style=" font-size: 2rem;" class="">
	 
	
	<div style="font-size: 1rem;">

		<input type="text" wire:model="cedula"  class="slideselector"  autofocus required placeholder="Cedula"  onkeyUp="return ValNumero(this);" wire:keydown.enter="verif">   <small>Pulse la tecla enter</small>
		@error('cedula')
			<label class="alert-danger">Cedula obligarotia</label>
		@enderror
     </div>
              @if (session('mensaje'))
					<div class="alert alert-success">             
						{{ session('mensaje') }}
					</div>
				 @endif

     <div  style="font-size: 1.5rem; margin-top:2%;">
		<input type="text"   wire:model="name" class="slideselecto"  autocomplete="on" placeholder="Nombre(s)"> 
     </div>
     
     <div  style="font-size:1.5rem; padding-top:1%;">     
		<input type="text" wire:model="last_name" autocomplete="on" placeholder="Apellidos(s)">
	 </div>
	 <br>
	   
	<div>

	    <select wire:model="id_curso">
			<option value="">seleccione</option>
			@foreach($cursos as $item)
				<option style="color:red;" value="{{$item->id}}">{{ $item->title }}</option>              
			@endforeach
	    </select>
	 </div>
	 <div>
		Metodo de pago: <select wire:model="Met_pago">
			<option value="">Seleccione</option>
			<option value="Credito">Tarjeta de Cedito</option>  		
	    </select>
	</div>
	<div>
		<input type="text" wire:model="pago"  placeholder="Nro de referencia">
	 </div>
	 
	 <br>
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

