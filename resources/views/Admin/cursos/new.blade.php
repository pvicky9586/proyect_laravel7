@extends('layouts.app')
@section('title','- Cursos')
@section('content')

 <div class="title"><b> Registrar Curso</b></div><br>
 
	
		@if ($errors->has('login'))
			<span class="help-block">
				<strong>{{ $errors->first('login') }}</strong>
			</span>
		@endif    
<div class="toll">	
	<div  class="form_new">		              
		<form class="form-horizontal" method="POST" action="{{ route('SaveCurso') }}" name="formulario" id="formulario" enctype="multipart/form-data" onsubmit="return confirm('¿confirmar si desea guardar?');">
			{{ csrf_field() }}
	            @error('title')
					<span class="alert alert-danger" style="font-size:12px;">{{ $message }}</span>
				@enderror  
				<div style="font-size:20px;">
					&nbsp;&nbsp; Nombre del curso:<br>
					
					<input type="text" name="title" value="{{ old('title') }}" class="slideselector" style="width:100%;" autofocus required autocomplete="on">&nbsp;&nbsp; Descripcion:<br>
					
					<textarea  name="description" placeholder="Description / Intent or purpose of the course" value="{{ old('description') }}"></textarea>
				</div>	
		Abjuntar Imagen<input type="file" name="img" accept="image/png, .jpeg, .jpg, image/gif"/>
		  @error('img')
				<span class="alert alert-danger" style="font-size:12px;">{{ $message }}</span>
		  @enderror
		<br><br>
					
		<br>
		<div style="display:flex;font-weight:bold;">		
				<div class="resp" onclick="SelecDinam()" id="Resp">
					Facilitador(es):		
					<input type="radio" id="Resp" name="cant_resps" value="1" >Uno? 
					<input type="radio" id="Resp" name="cant_resps"  value="2">varios?					
				</div>	
					<div  align="center" class="Add-Resp" >
					Si responsable No esta en la lista de <a href="{{ route('resp-livew')}}" title="Responsibls">click aqui</a>

				</div>
		</div>	
	
	
	
    <div id="uno" style="display:none; padding:10;"> 		
			<select name="resp_id">
				<option>Seleccione</option>
					@foreach($resp as $item)
						<option value="{{$item->id}}">{{ $item->name }}- {{ $item->last_name }}</option>
					@endforeach
				</select>
		</div>		
	 	<div id="mas" style="display:none;">
			@foreach($resp as $item)
					<input type="checkbox" name="resp[]" value="{{$item->id}}">{{ $item->name }} - {{ $item->last_name }}
					
			@endforeach
        </div>
        
  
        
        
		<div style="margin-left:5%; margin-top:5%;">
			<h1> Duraccion<input type="text" name="duracion" size="10" placeholder="Ejem: 10 hrs">  </h1> 
        </div> 
          
		Publicar<input type="radio" id="public" name="statud" value="1" onclick="Public()">Si 
		<input type="radio" id="public" name="statud"  value="0" onclick="Public()" >No
		
           <br><br> 
		   <input type="submit" name="btnsave" class="bt-save tex-bt btn btn-primary" value="Guardar"/>
           <input type="reset" value="Cancelar" class="btn btn-danger bt-canc" >
 
	</form>
	        
<script src="{{ asset('js/SelcDinam.js') }}"></script>  
<script src="{{ asset('js/public.js') }}"></script>

<script src="{{ asset('js/forms.js') }}"></script>

@endsection


<style scoped>

.input{
		 font-family : inherit;
		 font-size   : 100%font-weight: bold;;
		 font-family : inherit;
		 width: 100%; 
		 color:#0E7822;
		 -webkit-box-sizing: border-box; 
		 -moz-box-sizing: border-box;
          box-sizing: border-box;}
          
textarea{ width: 100%; 
		  color:#800080;
		 -webkit-box-sizing: border-box; 
		 -moz-box-sizing: border-box;
          box-sizing: border-box;
          font-weight: bold;
          padding:2%;}
</style>
