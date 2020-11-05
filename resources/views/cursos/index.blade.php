@extends('layouts.appAuth')
@section('title','- Cursos')
@section('content')

<div class="title"><b>Cursos</b></div>


				  @if (session('mensaje'))
					<div class="alert alert-success">             
						{{ session('mensaje') }}
					</div>
				  @endif
				  
				 <div style="margin-top:5%;  display:flex; margin-left:2%; ">	
			      <div>
					  <a href="{{ route('Newcurso') }}"  style="font-size:18px;" title="Nuevo Curso"><img src="{{asset('images/bt-new.jpg')}}" class="img-bt-new" >Nuevo Curso</a>
			      </div >
			       <div align="left" style="margin-left:60%;">
			           <a href="{{ route('AdmUser') }}" title="ir atras">
						   <img src="{{ asset('images/irAtras.jpg') }}"  class="irAtras"></a> 
			       </div>
			    </div>
			    
			 	    
			    
		<div  style=" margin-left:5%; margin-top:2%; heidht:100%;  ">
			@if(empty($cursos))	
				<h1>No hay Cursos Registrados</h1>
			
			@else 
				@foreach($cursos as $item)	
				          <div class="listCurs">  							
							
								<div align="center">
									<label style="font-size:30px;"><a href="" title="Ver detalles" ><?php echo (strtoupper($item->title)) ?></a> </label>
									<small style="font-size:16px;"><img src="/images/Img-cursos/{{$item->img}}" alt="Imagen No disponible" class="img-curso" align="right" title="imagen del curso"></small> 
								</div> 
								<div class="desc">
								@if (!empty($item->description))
									  <p >{{ $item->description}}</p>
								@else
								      <p>Descripcion no tiene disponible</p>
								@endif
								</div>
						          <br>
								<div  align="center">
									<a href="{{ route('EditCurs', $item) }}" title="editar"> 
									<img src="{{ asset('images/editar.png') }}" class="edit" align="center">Editar</a>
								</div>   
					     </div>
						  <br><br> 
				     @endforeach
				     <label>{{ $cursos->links()}}</label> 	
						
			@endif		
	      </div>	
	
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			    
			    
			    
			    
		

@endsection
