@extends('layouts.appAuth')
@section('title','- Cursos')
@section('content')

 <div class="title"><b> Registrar Participante</b></div><br>
 
	 <div align="right">    
	     <a href="{{ route('participants') }}" ><img src="{{ asset('images/irAtras.jpg') }}"  class="irAtras"></a>  
	</div>
		@if ($errors->has('login'))
			<span class="help-block">
				<strong>{{ $errors->first('login') }}</strong>
			</span>
		@endif    
<div class="toll">	
	<div  class="form_new" style="font-size:30px;">		              
		<form class="form-horizontal" method="POST" action="{{route('savePart')}}" id="formulario" name="formulario">
			{{ csrf_field() }}
	
				Cedula de Identidad: 
				<input type="text" name="cedula" value="{{ old('cedula') }}"  placeholder="N°"  autofocus required>
					<br> <br>
				<input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre(s)" class="" style="width:100%;"><br>
				
				<input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Apellido(s)"class=""  style="width:100%;">
			
			     	<div style="padding-top:5%; color:red;" align="center">
						<h1>Por anexar informacion</h1>
					</div>
				
			
			
				
				 <input type="submit" name="btnsave" class="bt-save tex-bt btn btn-primary" onclick="pregunta()" value="Guardar"/>
				<input type="reset" value="Cancelar" class="btn btn-danger"
		</form>
	</div> 
</div>	 
	
<script src="{{ asset('js/forms.js') }}"></script>


@endsection


