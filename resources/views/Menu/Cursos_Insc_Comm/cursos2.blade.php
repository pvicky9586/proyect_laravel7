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
						        <small class="">sin comentarios...</small>
						    @endif  

						</div>
					</div>
				</div>

         </details>
	</div>
<div class="">
	<form action="{{route('comment')}}" method="POST">
		@csrf
	  <!-- text-bold h4-->
		<div class="card-body">
			<label class="">Comentar</label> 
		    <div class="form-group" style="width: 100%;"> <!-- class="ckeditor"-->
		       
		          	
		           <label for="usr">Name:</label>
		           <input type="text" name="name" class="form-control"><br>
		            @error('name') <span class="text-danger error">indique su nombre</span>@enderror

		                      <label >Email:</label>
		           <input type="text" name="email" class="form-control">
		           @error('email') <span class="text-danger error">ingrese un email valido</span>@enderror

			 </div>

			 <div class="form-group">
			 	   <!-- class="ckeditor" -->
			       <textarea  name="comment" id="comment" rows="5"  align="center" class="form-control" placeholder="Añadir Commentario">
			       	 @error('comment') <span class="text-danger error">añada su comentario</span>@enderror 
			       	</textarea>    
			          
			 </div>
		                        
			     
			       <div align="right">
			       	<input type="text" name="curso_id" value="{{$curso->id}}" class="toast hide" >
			       	     <button type="submit" class="btn btn-primary  btn-lg" name="btnsave">Añadir</button>
			             <button type="reset" class="btn btn-warning">Limpiar</button>
			       </div>

			           </div>  
			   </div> 
	</form>
		
		      
                                  
 @endforeach
     <label>{{ $cursos->links()}}</label> 	
	
</div>
  



















<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
<div class="col-sm-6">
    <!-- Begin tab comment and popular posts -->
    <div class="box-info full">
    	<!-- Tab comments and popular posts -->
    	<ul class="nav nav-tabs nav-justified">
    	  <li class="active"><a href="#comments" data-toggle="tab"><i class="fa fa-comments"></i> New Comments</a></li>
    	  <li><a href="#popular" data-toggle="tab"><i class="fa fa-star"></i> Popular Posts</a></li>
    	</ul>
    
    	<!-- Tab panes -->
    	<div class="tab-content">
    	  <!-- Pane comments -->
    	  <div class="tab-pane active animated fadeInRight" id="comments">
    		<!-- Begin scroll wrappper -->
    		<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 325px;"><div class="scroll-widget">
    			<ul class="media-list">
    			  <li class="media">
    				<a class="pull-left" href="#fakelink">
    				  <img class="media-object" src="https://bootdey.com/img/Content/User_for_snippets.png" alt="Avatar">
    				</a>
    				<div class="media-body">
    				  <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
    				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
    				</div>
    			  </li>
    			  <li class="media">
    				<a class="pull-left" href="#fakelink">
    				  <img class="media-object" src="https://bootdey.com/img/Content/user-453533-fdadfd.png" alt="Avatar">
    				</a>
    				<div class="media-body">
    				  <h4 class="media-heading"><a href="#fakelink">Agent 007</a> <small>Yesterday at 04:00 AM</small></h4>
    				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
    				</div>
    			  </li>
    			  <li class="media">
    				<a class="pull-left" href="#fakelink">
    				  <img class="media-object" src="https://bootdey.com/img/Content/Twitter_bird_icon.png" alt="Avatar">
    				</a>
    				<div class="media-body">
    				  <h4 class="media-heading"><a href="#fakelink">Twitter man</a> <small>January 17, 2014 05:35 PM</small></h4>
    				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
    				</div>
    			  </li>
    			</ul>
    		</div><div class="slimScrollBar" style="width: 3px; position: absolute; top: 11px; opacity: 0.4; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; left: 1px; height: 209.5734126984127px; background: rgb(134, 134, 134);"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.3; z-index: 90; left: 1px; background: rgb(51, 51, 51);"></div></div><!-- End div .scroll-widget -->
    		<div class="box-footer">
    		<p><a href="#fakelink"><i class="fa fa-share"></i> See all comments</a></p>
    		</div>
    	  </div><!-- End div .tab-pane -->
    	  
    	  <!-- Pane popular posts -->
    	  <div class="tab-pane animated fadeInRight" id="popular">
    		<!-- Begin scroll wrappper -->
    		<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 325px;"><div class="scroll-widget" style="overflow: hidden; width: auto; height: 325px;">
    			<ul class="media-list">
    			  <li class="media">
    				<div class="media-body">
    				  <h4 class="media-heading"><a href="#fakelink">Cras sit amet erat sit amet lacus egestas</a>
    				  <br><small>January 17, 2014 at 11:24 PM</small></h4>
    				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    				</div>
    			  </li>
    			  <li class="media">
    				<div class="media-body">
    				  <h4 class="media-heading"><a href="#fakelink">Cras sit amet erat sit amet lacus egestas</a>
    				  <br><small>January 17, 2014 at 08:24 AM</small></h4>
    				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    				</div>
    			  </li>
    			  <li class="media">
    				<div class="media-body">
    				  <h4 class="media-heading"><a href="#fakelink">Cras sit amet erat sit amet lacus egestas</a>
    				  <br><small>January 17, 2014 at 05:24 AM</small></h4>
    				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    				</div>
    			  </li>
    			</ul>
    		</div><div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; left: 1px; background: rgb(134, 134, 134);"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.3; z-index: 90; left: 1px; background: rgb(51, 51, 51);"></div></div><!-- End div .scroll-widget -->
    		<div class="box-footer">
    			  <p><a href="#fakelink"><i class="fa fa-share"></i> See all posts</a></p>
    		</div>
    	  </div><!-- End div .tab-pane -->
    	</div><!-- End div .tab-content -->
    </div><!-- End div .box-info .full -->
    <!-- End tab comment and popular posts -->
    </div>    
</div>				              














<style type="text/css">
	.box-info.full {
    padding: 0px;
}
.box-info:hover {
    color: #393E48;
}
.box-info {
    position: relative;
    padding: 15px;
    background: #fff;
    color: #5b5b5b;
    margin-bottom: 20px;
    -webkit-transition: All 0.4s ease;
    -moz-transition: All 0.4s ease;
    -o-transition: All 0.4s ease;
    background:#FFFFFF;
    margin-top:20px;
}
.box-info .nav-tabs {
    background: #1B1E24;
}

.box-info .nav-tabs  li.active  a, .box-info .nav-tabs  li.active  a:hover, .box-info .nav-tabs  li.active  a:focus {
    cursor: default;
    border-top: none;
    border-right: none;
    border-left: none;
    border-bottom: none;
    background-color: #ffffff;
    color: #1B1E24;
}

.box-info .nav-tabs  li.active  a i, .box-info .nav-tabs  li.active  a:hover i, .box-info .nav-tabs  li.active  a:focus i {
    color: #212121;
}
.box-info .nav-tabs  li  a i {
    color: #fff;
}

.box-info.full .box-footer {
    padding: 20px 20px 15px 20px;
}

.box-info .media-list {
    margin-top: 30px;
}

.box-info .media-list .media {
    padding: 5px 20px;
    border-bottom: 1px solid #eaeaea;
}

.box-info .media-list .media .media-object {
    width: 50px;
}

.scroll-widget{
    overflow: hidden;
    width: auto;
    height: 325px;
}


</style>    
