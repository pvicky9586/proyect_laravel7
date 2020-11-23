@extends('layouts.appAuth')
@section('title','- Bienvenidos')
@section('content')

<h1 class="title-curs" align="center">{{ $curso->title}}</h1>
<div style="margin-left:10%; margin-right:10%;">
			   
    
     <form  method="POST" action="{{ route('inscribir')}}" name="formulario" id="formulario"  onsubmit="return confirm('¿Seguro de cursar este curso?');">
			{{ csrf_field() }}
		<div class="title-div">
			 <small class="title-op">Información personal</small>
			<input type="checkbox" name="curso_id" value="{{ $curso->id }}" style="visibility:hidden" checked>
			<div style="font-size: 1rem;">  
				<input type="text" name="cedula"  class="slideselector"   autofocus placeholder="Cedula"  onkeyUp="return ValNumero(this);"  > 
				@error('cedula')
					<label class="alert-danger">Cedula obligarotia</label>
				@enderror
			 </div>
			 <div  style="font-size: 1.5rem; padding-top:2%;">
				<input type="text"   name="name" class="slideselecto" style="width:100%;" autocomplete="on" placeholder="Nombre(s)"> 
				@error('name')
					<label class="alert-danger">Ingrese su nombre</label>
				@enderror        
				<input type="text" name="last_name" autocomplete="on" style="width:100%;" placeholder="Apellidos(s)">
				@error('last_name')
					<label class="alert-danger">Indique al menos un apellido</label>
				@enderror
			 </div> 
		</div>
				<br><br><br>
	   <div class="title-div"> 
		  <div>
		   <small class="title-op">Curso | Pago</small>    
		 </div>                                                                 
		 <div>
			Metodo de pago: <select name="meth_pago">
				<option value="">Seleccione</option>
				<option value="Credito">Tarjeta de Cedito</option>  		
			</select>
		 </div> 		   
		 <div>
			Referencia<input type="text" name="pago" style="padding:1%;font-size:1.5rem;" placeholder="Nro">
		 </div>
	  </div>
	 <br><br><br>
	  <div class="title-div">
		<small class="title-op">Información de contacto</small>
     
     </div>
		
     <div class="info">   		 			
		<DIV>E-mail
			<input type="email" class="form-control" name="email"  autocomplete="on" style=" font-size: 2rem;" > 
					 @error('email')
						<label class="alert-danger"> E-mail no valido</label>
					@enderror
		</DIV>
		<div>Telefono
			<input type="text" class="form-control"  name="telef"  autocomplete="on"  onkeyUp="return ValNumero(this);" style=" font-size: 2rem;" >  
	    </div>
        <div>
			<label>WhatsApp</label> 
			<input  type="text" name="NroWp" class="form-control" style=" font-size: 2rem;" />
	    </div>
	            
	           
	 </div>
		 <input type="submit" name="btnsave" class="bt-save tex-bt btn btn-primary" value="Guardar"/>
         <input type="reset" value="Cancelar" class="btn btn-danger bt-canc" >
      </form>
 </div>



@endsection

<script src="{{ asset('js/validar.js') }}"></script>


<script src="{{ asset('js/forms.js') }}"></script>
