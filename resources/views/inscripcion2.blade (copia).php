@extends('layouts.appAuth')
@section('title','- Bienvenidos')
@section('content')
         

     <div style="margin-left:10%; margin-right:10%;">
			   {{ $curso->title}}
    
     <form  method="POST" action="{{ route('inscribir')}}" name="formulario" id="formulario"  onsubmit="return confirm('¿Seguro de cursar este curso?');">
			{{ csrf_field() }}
	
	 <small style="color:#BFBFBF; font-size: 2rem;">Información personal</small>
	                          
	<div style="font-size: 1rem;">  
		<input type="text" name="cedula"  class="slideselector"   autofocus required placeholder="Cedula"  onkeyUp="return ValNumero(this);"  > 
		@error('cedula')
			<label class="alert-danger">Cedula obligarotia</label>
		@enderror
     </div>
      <div  style="font-size: 1.5rem; padding-top:2%;">
		<input type="text"   name="name" class="slideselecto" style="width:100%;" autocomplete="on" placeholder="Nombre(s)"> 
      
		<input type="text" name="last_name" autocomplete="on" style="width:100%;" placeholder="Apellidos(s)">
	 </div>
            <input type="submit" name="btnsave" class="bt-save tex-bt btn btn-primary" value="Guardar"/>
            <input type="reset" value="Cancelar" class="btn btn-danger bt-canc" >
      </form>
<!--
              @if (session('mensaje'))
					<div class="alert alert-success">             
						<small>{{ session('mensaje') }}  </small>
					</div>
				 @endif

     
	 <br>
	 
	   <small style="color:#BFBFBF;font-size: 2rem;">Curso | Pago</small>  
	<div>

	    <select wire:model="id_curso">
			<option value="">seleccione</option>
		
	    </select>
	 </div>
	 <div>
		Metodo de pago: <select wire:model="meth_pago">
			<option value="">Seleccione</option>
			<option value="Credito">Tarjeta de Cedito</option>  		
	    </select>
	</div>
	<div>
		<input type="text" wire:model="pago"  placeholder="Nro de referencia">
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
-->)
 </div>
   </div>


@endsection
  <script src="{{ asset('js/SelcDinam.js') }}"></script>  
<script src="{{ asset('js/public.js') }}"></script>

<script src="{{ asset('js/forms.js') }}"></script>
