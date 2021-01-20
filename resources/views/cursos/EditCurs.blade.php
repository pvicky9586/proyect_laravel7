@extends('layouts.app')
@section('title','- Cursos')
@section('content')
	
	 <div class="title"><b> Actualizar Curso</b></div><br>

		@if ($errors->has('login'))
			<span class="help-block">
				<strong>{{ $errors->first('login') }}</strong>
			</span>
		@endif  
  
<div class="col-md-12">
  <div class="card">
	<div class="card-body">		              
	<form class="form-horizontal" method="POST" action="{{ route('UpCurso', $edit->id) }}" name="formulario" enctype="multipart/form-data" onsubmit="return confirm('¿Wish Update?');" id="formulario">
	@method('PUT')
    @csrf
		@error('title')
			<span class="alert alert-danger">indicate a course title</span>
		@enderror  
		<div  class="">			
			<label class="display-6 text-primary">Title a course:</label>
			<input type="text" name="title" value="{{ $edit->title }}" class="text-success form-control bold" autofocus >		
		</div>
				
		<label class="text-muted">Description:</labe>
			<textarea name="description" placeholder="Description / Intent or purpose of the course"  rows="5"  value="{{ old('description') }}" style="width: 100%; font-size: 1rem;">{{$edit->description}}
			</textarea>
			
						 
			@if($edit->img == '')
				Image
				<input type="file" name="img" value="" id="miArchivo" accept="image/png, .jpeg, .jpg, image/gif"> 
			@else
				<div style="display:flex; padding-left:2%;">	
					<label style="margin-top:5%;">¿change image?</label>
					<input type="file" name="img" value="" id="miArchivo" style="color: transparent; margin-top:5%;" accept="image/png, .jpeg, .jpg, image/gif">   
					<img src=" {{ Storage::url("$edit->img")}}" alt="Imagen no encontada" class="img-curso"/>	
				</div>
			@endif
		 
		
		<br><br>
	
		    <div style="font-size:1.2rem; color: #F1671D;"> 
		    	<small>Volver a configurar el/los Resposable(s) del curso<span> de lo contrario no habra registro</span>:</small> 
			</div>
			@error('resp')
				<small style="margin-top:3%; color: #F1671D;">Debe volver a configurar el/los Resposable(s) del curso<span>de lo conrio no habra registro</span>:</small> 
			@enderror

		    <div style="display:flex;font-weight:bold; margin-top:2%;">   				
			<div class="resp"  id="Resp">  				
					<input type="radio" id="Resp" name="cant_resps" value="1" onclick="SelecDinam()">uno &nbsp;&nbsp;&nbsp;
					<input type="radio" id="Resp" name="cant_resps"  value="2" onclick="SelecDinam()">mas...				
			</div>	
			<div  align="center" class="Add-Resp" >
					Si responsable No esta en la lista de <a href="{{ route('resp-livew')}}" title="Responsabls">click aqui</a>
			</div>
			</div>	
		
		<div id="uno" style="display:none; padding:10;"> 		
			<select name="resp">
				<option value="">Seleccione</option>
					@foreach($resp as $item)
						&nbsp;&nbsp;<option value="{{$item->id}}">{{ $item->name }} {{ $item->last_name }}</option>
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
       <div style="">
       @if($edit->statud== 1)			
			<label id="msj"  class="plublic text-primary">Published</label><br>
			¿change?
			<input type="radio" id="public" name="statud" value="0"  onclick="Public()">Si &nbsp;&nbsp;
			<input type="radio" id="public" name="statud"  value="1" onclick="Public()">No			
	   @else
    	    <label id="msj"  class="publicNo text-danger" >¡No Published!</label><br>
    	    ¿change?
			<input type="radio" id="public" name="statud" value="1"  onclick="Public()" >Si  &nbsp;&nbsp;&nbsp;
			<input type="radio" id="public" name="statud"  value="0" onclick="Public()">No 
	   @endif
		</div>
           <div align="center">	
			  <input type="submit" name="btnsave" class=" bt-save tex-bt btn btn-success" value="Actualizar"/>	
			  <input type="reset" value="Cancelar" class="btn btn-danger bt-canc" >
          </div>

	</form>
	</div>	
	</div>
			
	<div>
		<a href="{{ route('cursos') }}">
			<img src="{{ asset('images/irAtras.jpg') }}" align="left" class="irAtras">
		</a>  
	</div>	
</div>	        
<script src="{{ asset('js/SelcDinam.js') }}"></script>  
<script src="{{ asset('js/public.js') }}"></script> 
<script src="{{ asset('js/forms.js') }}"></script> 

@endsection
