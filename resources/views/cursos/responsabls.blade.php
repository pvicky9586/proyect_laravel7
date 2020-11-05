@extends('layouts.appAuth')
@section('title','- Facilitador')
@section('content')

<div class="title"><b> Agregar Responsable</b></div>
		
		@if ($errors->has('login'))
			<span class="help-block">
				<strong>{{ $errors->first('login') }}</strong>
			</span>
		@endif   
		@if (session('mensaje'))
					<div class="alert alert-success">             
						{{ session('mensaje') }}
					</div>
				@endif	
<div class="toll">
	<div  class="form_new" style="font-size:30px;">			
	<form  action="{{ route('SaveResp') }}" method="POST" class="form-horizontal" name="formulario"onsubmit="return confirm('¿Seguro que desea Guardar?');">
			  {{ csrf_field() }}
			
		
				Cedula de Identidad: <input type="text" name="cedula" value="{{ old('cedula') }}"  placeholder="N°"  autofocus required >  
				@error('cedula')
					<span class="alert alert-danger" style="font-size:12px;">{{ $message }}</span>
				@enderror<br><br>
				
				<input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre(s)" class="form-control tex-inp" style="width:100%;font-size:22px; padding:4%;"><br>
				
				<input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Apellido(s)"class="form-control tex-inp"  style="width:100%; font-size:22px; padding:4%;"><br><br>
				
				
	<div style="padding-top:5%; color:red;" align="center">
			<h1>Por anexar informacion</h1>
		</div>
				
				<input type="submit" name="btnsave" class="bt-save tex-bt btn btn-primary" value="Guardar" >	
				<input type="reset" value="Cancelar" class="btn btn-danger bt-canc">
		
	</form>
	</div>
	<div>
		<a href="{{ route('cursos') }}" ><img src="{{ asset('images/irAtras.jpg') }}" title="Salir" class="irAtras" align="left"></a>  
	</div>
</div>


<script src="{{ asset('js/forms.js') }}"></script>







@endsection
