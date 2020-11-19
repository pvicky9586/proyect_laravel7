<div>
<!--
     <div> 
		 <img src="{{ Storage::url("images/logo.png") }}"  width="300"> 
	 </div>
-->          @if (session('mensaje'))
				<div class="alert alert-success">             
					<label>{{ session('mensaje') }}  </label>
				</div>
			@endif  
   @foreach( $cursos as $curso)
		
	       <div class="listCurs" > 
				
				<h1 class="title-curs" align="center">{{ $curso->title}}</h1>
				   
				    <div style="display:flex;">
						<div style="padding-top:2%;">
							@if (!empty($curso->description))
								<p class="desc-curs">{{ $curso->description}}</p>
							@else
								 <p>Descripcion No disponible</p>
							@endif
						</div>									 
                        <div align="right">
							<img src="{{ Storage::url("$curso->img") }}" width="300" alt="NO ah asignado imagen o no se encontro" />  
	                     </div>
			    	</div>		   				
						<details>
							<summary>Ver mas sobre el curso</summary>
								<div>
									 Duracion: <span class="dur-cur"> {{$curso->duracion}}   </span>
								</div> 	
								
								 <a href="{{ route('inscribirse', $curso->id )}}"  class="btn btn-primary pull-right" >
							Inscripcion
							</a>	
                          </details>
		                                                           
			</div>
		
		      
                                  
     @endforeach
     <label>{{ $cursos->links()}}</label> 	
	
</div>
     
    
