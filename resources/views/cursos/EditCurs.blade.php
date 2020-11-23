@extends('layouts.appAuth')
@section('title','- Cursos')
@section('content')
	
	 <div class="title"><b> Actualizar Curso</b></div><br>

		@if ($errors->has('login'))
			<span class="help-block">
				<strong>{{ $errors->first('login') }}</strong>
			</span>
		@endif  
  
<div class="tool">	
  <div  class="form_edit">		              
	<form class="form-horizontal" method="POST" action="{{ route('UpCurso', $edit->id) }}" name="formulario" enctype="multipart/form-data" onsubmit="return confirm('¿Desea Actualizar?');" id="formulario">
	@method('PUT')
    @csrf
		@error('title')
			<span class="alert alert-danger">El nombre del curso no puede quedar vacio</span>
		@enderror  
		<div  style="font-size:22px; text-align:center;">
			<div class="title-2">
				Nombre del curso:
				<input type="text" name="title" value="{{ $edit->title }}"  style="width:100%; " autofocus >
			</div>
			<div>  <br>
				Descripcion:
				<textarea name="description" placeholder="Descripcion/Intencion o proposito del curso"   value="{{ old('description') }}" style="width:100%; height:80px; " >{{$edit->description}}
				</textarea>  
			</div>	
		</div>
				
		
			
						 
			@if($edit->img == '')
				Abjuntar Imagen
				<input type="file" name="img" value="" id="miArchivo" accept="image/png, .jpeg, .jpg, image/gif"> 
			@else
				<div style="display:flex; padding-left:2%;">	
					<label style="margin-top:5%;">Cambiar Imagen </label>
					<input type="file" name="img" value="" id="miArchivo" style="color: transparent; margin-top:5%;" accept="image/png, .jpeg, .jpg, image/gif">   
					<img src=" {{ Storage::url("$edit->img")}}" alt="Imagen no encontada" class="img-curso"/>	
				</div>
			@endif
		 
		
		
	
		         <h3 style="margin-top:3%; color: #F1671D;">Volver a configurar el/los Resposable(s) del curso<span> de lo conrio no habra registro</span>:</h3> 
		    @error('resp')
				<h3 style="margin-top:3%; color: #F1671D;">Debe volver a configurar el/los Resposable(s) del curso<span>de lo conrio no habra registro</span>:</h3> 
			@enderror
		    <div style="display:flex;font-weight:bold; margin-top:2%;">   				
			<div class="resp"  id="Resp">  				
					<input type="radio" id="Resp" name="cant_resps" value="1" onclick="SelecDinam()">Uno
					<input type="radio" id="Resp" name="cant_resps"  value="2" onclick="SelecDinam()">varios				
			</div>	
			<div  align="center" class="Add-Resp" >
					Si responsable No esta en la lista de <a href="{{ route('resp-livew')}}" title="Responsabls">click aqui</a>
			</div>
			</div>	
		
		<div id="uno" style="display:none; padding:10;"> 		
			<select name="resp">
				<option value="">Seleccione</option>
					@foreach($resp as $item)
						<option value="{{$item->id}}">{{ $item->name }} {{ $item->last_name }}</option>
					@endforeach
				</select>
		</div>		
	 	<div id="mas" style="display:none;">
			@foreach($resp as $item)
					<input type="checkbox" name="resp[]" value="{{$item->id}}">{{ $item->name }} {{ $item->last_name }}
			@endforeach
        </div>
              
		<div style="margin-left:5%; margin-top:5%;">
			<h1> Duraccion
			<input type="text" name="duracion" size="10" value="{{ $edit->duracion }}"  placeholder="Ejem: 5 hras">  </h1> 
       </div> 
       <br>
       <div style="display:flex;">
       @if($edit->statud== 1)
			
				 <label id="msj"  class="plublic" Style="color:blue; font-weight:bold;">Curso Publica, &nbsp;<span style="color:#BF4040">dejar publicado</span></label>
				<input type="radio" id="public" name="statud" value="1"  onclick="Public()">Si &nbsp;&nbsp;
				<input type="radio" id="public" name="statud"  value="0" onclick="Public()">No			
	   @else
		     <label id="msj"  class="publicNo" >¡curso no publicado aun! &nbsp; 'cambiar' </label> &nbsp; &nbsp;&nbsp;
			<input type="radio" id="public" name="statud" value="1"  onclick="Public()" >Si  &nbsp;&nbsp;&nbsp;
			<input type="radio" id="public" name="statud"  value="0" onclick="Public()">No 
	   @endif
		</div>
           <br><br> 
           <div align="center">	
			  <input type="submit" name="btnsave" class=" bt-save tex-bt btn btn-success" value="Actualizar"/>	
			  <input type="reset" value="Cancelar" class="btn btn-danger bt-canc" >
          </div>

	</form>
	</div>	
	
			
	<div>
		<a href="{{ route('cursos') }}" >
			<img src="{{ asset('images/irAtras.jpg') }}"  align="left" class="irAtras">
		</a>  
	</div>	
</div>	        
<script src="{{ asset('js/SelcDinam.js') }}"></script>  
<script src="{{ asset('js/public.js') }}"></script> 
<script src="{{ asset('js/forms.js') }}"></script> 

@endsection
