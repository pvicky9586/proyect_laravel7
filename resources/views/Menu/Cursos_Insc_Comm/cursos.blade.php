<!-- VIEW CURSOS & COMMENT-->

<div>
         @if (session('mensaje'))
				<div class="alert alert-success">             
					<label>{{ session('mensaje') }}  </label>
				</div>
			@endif  
@foreach( $cursos as $curso)
<div class="listCurs" > 
		<p class="display-4 text-primary text-center text-uppercase" >{{ $curso->title}}</p>				   
	    <div style="display:flex;">


			<div  style="padding:0; width: 60%;">	
		       	 <?php $tam = strlen($curso->description); ?>
				@if ($tam <= 200)                
					<small class="text-muted">{{$curso->description}}</small>
                    <br> 
                    @if($curso->duracion)
                        <small class="text-primary">- duration: {{$curso->duracion}}</small>
                    @endif
                
				@elseif ($tam > 200)
					<small class="text-muted"> <?php echo substr($curso->description, 0, 200); ?> </small>
                   
    			<details>
					<summary style="font-size: 1rem;"><b>mas...</b></summary>
					   <small class="text-muted"><?php echo substr($curso->description, 200);?></small>
                    @if($curso->duracion)
						<small class="text-primary" > - duration: {{$curso->duracion}}   </small>
                    @endif
				</details>
				@else
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
			  

    <!--VER COMMENTS-->
					<details>
						<summary style=""><i class="fa fa-share"></i> See all Comments</summary>						
							<?php $Nro = Count($curso->comments); ?>
   							@if ($Nro>0)
        					<!-- 	<label> <i><b>{{$Nro}} comentarios</b></i></label><br> -->
						        @foreach($comments as $comm)
						            @if($curso->id == $comm->curso_id)	           					                  
						              	<div class="media-body">
                                          <h4 class="media-heading">
                                            <img src="{{asset('images/icons/comment.png')}}" width="80">
                                                <a href="#fakelink">{{$comm->name}}</a> 
                                            <small> @if($comm->created_at)
                                                        {{ date_format($comm->created_at, 'j M Y') }}
                                                    @endif
                                            </small>
                                          </h4>
                                          <p>{{$comm->comment}}</p>
                                        </div>
						                    
						            @endif                  
						        @endforeach	            
					            <?php echo $comment=''; ?> 
						    @else
						        <small class="">sin comentarios...</small>
						    @endif  			
                   


<!--FORM COMMENT-->
<!--     <div class="">
          <form>
              @csrf
         
    			<label class="text-muted">Comentar</label> 
    		    <div class="form-group" >

                       <input type="text" wire:model="name" name="name" class="form-control" class="form-control" placeholder="Name">
                          @error('name') <span class="text-danger error">indique su nombre</span> @enderror
                       <input type="text" wire:model="email" name="email" class="form-control" placeholder="email">
                          @error('email') <span class="text-danger error col-8">ingrese un email valido</span>@enderror
                </div>
    			<div class="form-group">
    			 	   class="ckeditor"
    			       <textarea wire:model="comment" name="comment" id="comment"  align="center" class="form-control" placeholder="">añadir Commentario
    			       	</textarea>    
    			        @error('comment') <span class="text-danger error">añada un comentario</span>@enderror    
    			 </div>
    		                        
    	       <div align="left">
        	       	<input type="text" wire:model="curso_id" name="curso_id" value="{{$curso->id}}" class="toast hide" >
    	        	     <button type="submit" class="btn btn-primary  btn-lg" wire:click="comment()" name="btnsave">Añadir</button>
    		             <button type="reset" class="btn btn-warning">Borrar</button>
    	       </div>
         </form>
    </div>			       -->
        
    <div class="" style="border: 1px solid; border-color:   #c5c2c2; padding: 0; ">
        <ul class="nav nav-tabs nav-justified">
          <li class="active"><a href="#comments" data-toggle="tab" style="text-decoration: none;"><i class="fa fa-comments"></i> New Comments</a></li>
        </ul>
    <form action="{{route('comment')}}" method="POST">
        @csrf
        <div class="form-group">
           <!--  <label class="text-muted" align="center" >Comentario</label>  -->
              
                <label style="display: flex;">
                 <!--   <img src="{{asset('images/icons/comment.png')}}" width="80" height="50"> -->
                   <input type="text" name="name" placeholder="name" style="font-weight: bold; font-size: 1.5rem;" class="form-control">
                </label>
                    @error('name') <span class="text-danger error">enter name</span>@enderror
                   

                   <input type="text" name="email" class="form-control" placeholder="email@example.com">
                   @error('email') <span class="text-danger error">enter a valid email</span>@enderror
             
            
             <div class="form-group"><!-- class="ckeditor" -->  
                 <small><i class="text-muted">comentar</i></small>                               
                   <textarea  name="comment" id="comment" align="center" class="form-control"> 
                   </textarea>        
                    @error('comment') <span class="text-danger error">enter comment</span>@enderror                   
             </div>
            
            <input type="text" name="curso_id" value="{{$curso->id}}" class="toast hide" >
        </div>

        </div> 
        <div align="right"> 
            <button type="submit" class="btn btn-primary" name="btnsave">Submit</button>
            <button type="reset" class="btn btn-warning">Clear</button>
         </div>         
    </form>     

</div>
</details>


 @endforeach
   <label>{{ $cursos->links()}}</label> 	
	
</div>
  


<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
<div class="col-sm-6">
    <!-- Begin tab comment and popular posts -->
    <div class="box-info full">
        <!-- Tab comments and popular posts -->
    
    
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Pane comments -->
          <div class="tab-pane active animated fadeInRight" id="comments">
            <!-- Begin scroll wrappper -->
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 325px;"><div class="scroll-widget">
          

            </div>
            <div class="slimScrollBar" style="width: 3px; position: absolute; top: 11px; opacity: 0.4; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; left: 1px; height: 209.5734126984127px; background: rgb(134, 134, 134);"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.3; z-index: 90; left: 1px; background: rgb(51, 51, 51);"></div></div><!-- End div .scroll-widget -->
           <!--  <div class="box-footer">
            <p><a href="#fakelink"><i class="fa fa-share"></i> See all comments</a></p>
            </div> -->
          </div><!-- End div .tab-pane -->
          
          <!-- Pane popular posts -->
          <div class="tab-pane animated fadeInRight" id="popular">
            <!-- Begin scroll wrappper -->
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 325px;"><div class="scroll-widget" style="overflow: hidden; width: auto; height: 325px;">
              

            </div>
            <div class="slimScrollBar" style="width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; left: 1px; background: rgb(134, 134, 134);"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.3; z-index: 90; left: 1px; background: rgb(51, 51, 51);"></div></div><!-- End div .scroll-widget -->
          <!--   <div class="box-footer">
                  <p><a href="#fakelink"><i class="fa fa-share"></i> See all posts</a></p>
            </div> -->
          </div><!-- End div .tab-pane -->
        </div><!-- End div .tab-content -->
    </div><!-- End div .box-info .full -->
    <!-- End tab comment and popular posts -->
    </div>    
</div>                            











