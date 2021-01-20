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
				
				<p class="display-3" >{{ $curso->title}}</p>				   
				    <div style="display:flex;">
						
						<div class="text-muted" style="padding:0; width: 60%;">	
					       	 <?php $tam = strlen($curso->description); 
							if ($tam <= 200){
								echo $curso->description;
							    echo "<br> duration: ".$curso->duracion;
							}else{ 
								echo substr($curso->description, 0, 200);
							?>
							<details>
								<summary style="font-size: 1rem;"><b>mas...</b></summary>
								<?php
									echo substr($curso->description, 200);
								?>
								<small class="text-primary" > duration: {{$curso->duracion}}   </small>
								</details>
							<?php
							 }	        		
					        ?>
					        @if (empty($curso->description))
							 <p>Descripcion No disponible</p>
							@endif
						</div>

                        <div align="right" style="padding:0; width: 40%;">
							<img src="{{ Storage::url("$curso->img") }}" alt="imagen no disponible" />  
	                    </div>	                    

			    	</div>
	   				
			    	<div align="center">
			    		<a href="{{ route('inscribirse', $curso->id )}}"  class="btn btn-success" >Participar | inscribirse</a>
			    	</div>
			    	  
					<details>
						<summary style="font-size: 1rem;">Ver Commentarios</summary>
						

							
							





				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							
							<?php $Nro = Count($curso->comments); ?>
   							@if ($Nro>0)
        					<!-- 	<label> <i><b>{{$Nro}} comentarios</b></i></label><br> -->
						        @foreach($comments as $comm)
						            @if($curso->id == $comm->curso_id)

						            <div class="card-header">					                
						                   <div class="form--group">
						                   	<img src="{{asset('images/icons/comment.png')}}" width="20">
						                          <b><i class="h5">{{$comm->name}}</i></b>
						                           <p style="font-size: 1rem; padding-right: 10%;"><i> {{$comm->comment}} </i>  - 	 @if($comm->created_at)
						                                {{ date_format($comm->created_at, 'j M Y') }}
						                            @endif
						                           </p>
						                       					                      
						                    </div>
						            @endif                  
						        @endforeach	            
					            <?php echo $comment=''; ?> 
						    @else
						        <small class="text-bold">Sin comentarios</small>
						    @endif  

						</div>
					</div>
				</div>










			    <form action="" method="POST">
			        @csrf
			        <label class="text-bold top text-viol h4 form-control" style="background: #cfebae">Comentar</label> 
			        
			        <div class="form-group" style="background:  #f0dbc5 "> <!-- class="ckeditor"-->
			           <div class="card">  <!-- text-bold h4-->
			           	<div class="card-body">
			            <b>Nombre</b> <input type="text" name="name" style="width: 40%; margin-right: 8%;">
			            <b>Email</b> <input type="text" name="email" style="width: 30%;">
			            </div>
			           </div>  
			        </div>


			              @error('name') <span class="text-danger error">Nombre</span>@enderror
			              @error('email') <span class="text-danger error">Email</span>@enderror




			                    <!-- class="ckeditor" -->
			            <textarea  name="comment" id="comment" rows="7"  align="center" class="form-control" placeholder="Añadir Commentario"></textarea>    
			            @error('comment') <span class="text-danger error">Añada un comentario</span>@enderror           
			     
			           <input type="text" name="post_id" value="{{$curso->id}}" class="toast hide" >
			      

			       <div align="right">
			            <button type="submit" class="btn btn-primary  btn-lg">Añadir</button>
			             <button type="reset" class="btn btn-warning">Limpiar</button>
			       </div>
			    </form>

         </details>
		            </div>
		
		      
                                  
     @endforeach
     <label>{{ $cursos->links()}}</label> 	
	
</div>
     
    
