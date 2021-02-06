@extends('layouts.appAdmin')
@section('title','- Nuevo Usuario')
@section('content')

<!--Hasta este momento solo usuario administrador tiene acceso a esta vistta de registro-->

    <div class="title"><b> Registrar Usuario</b></div><br>
		
<div class="toll">
	<div class="form_new"> 
		
		<form class="form-horizontal" method="POST" action="{{ route('saveUser') }}" name="formulario" id="formulario">
          {{ csrf_field() }}
         
<!--
			<h2> Cedula de Identidad: <input id="cedula" type="text" class="" name="cedula" value="{{ old('cedula') }}"  placeholder="N°"  autofocus ></h2>
-->		<div class="form-group">
			<h3>
				<input type="text" placeholder="Nombre(s)" class="" name="name" value="{{ old('name') }}" style="width:100%;"></h3>				
			<h3>
				<input type="text" placeholder="Apellido(s)"class="" name="last_name" value="{{ old('last_name') }}" style="width:100%;"></h3> 
			
		</div>		  
		
				
				
          <!--USERNAME - PRIVILEGES-->
			        <div style=" width:100%; display:flex;">
						
						<label for="username" class="" align="center"><b  style="font-size:24px; color:#7A551E;" >Nombre de Usuario</b>   <br>           
							<input id="username" type="text" class="" name="username" value="{{ old('username') }}"    style="font-size:20px; color:#7A331E;">
						</label>
                        @if ($errors->has('username'))
                            <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif  
						<br>
						<span align="center" class="text-center notas" style="">
							 Debe contener: entre 5-10 caractes Alfa-numericos<br>						
						</span>
                            
                  
                            <div for="privileges" class=""><b   style="font-size:24px; color:#7A551E; widht:100%;" align >Privilegios</b><br>
                               <select name="privileges" id="privileges" class="form-control"    style="font-size:20px; color:#7A331E; width:100%;">
                                <option value=""> Seleccione</option>
                                <option value="3"> Invitado</option>
                                 <option value="2">Super Usuario</option>
                                <option value="1"> Administrador</option>     
                                </select>
                              </div>
                                 
                                @if ($errors->has('privileges'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('privileges') }}</strong>
                                    </span>
                               @endif
                   </div>                   
         
                       <br><br> 
            
                        

			   
<!-- EMAIL -CONFIRME EMAIL-->
			 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<label >E-Mail 	</label>
					   <input id="email" type="email"  class="form-control"  name="email" value="{{ old('email') }}"  placeholder="direccion@example.com" >
				
					  @if ($errors->has('email'))
						 <span class="help-block">
							 <strong>{{ $errors->first('email') }}</strong>
						</span>
					 @endif   				
			       <span> Confirme E-mail</span>
					   <input type="email" id="email_verified_at" name="email_verified_at" placeholder="Confirmatión"   class="form-control">
				   
			</div>

			
<!-- password - CONFIRME password-->
			   <div class="form-group">
				  <label>Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  	<span class="notas"><i>
						debe contener: entre 5-10 caractes Alfa-numericos</i>					
					</span>	
				</label>


					<input id="password" type="password" class="form-control" name="password" placeholder="Insert Password" >
				
					   @if ($errors->has('password'))
						 <span class="help-block">
							 <strong>{{ $errors->first('password') }}</strong>
						 </span>
					  @endif
								
				 <span>Confirme Password </span>
					<input id="password-confirm" type="password" name="password_confirmation"  placeholder="Confirmatión" class="form-control" >
					

			 </div>	
			 	
							
	<input type="text" name="id_user_created" value="{{ Auth::user()->id }}" style="visibility:hidden"  size="0">
		
	<div align="center">  
		
         <input type="submit" name="btnsave" class="bt-save tex-bt btn btn-primary" onclick="pregunta()" value="Guardar"/>  <br>
		<input type="reset" value="Cancelar" class="btn btn-danger bt-canc" >			   
	 </div>
  </form>
  </div>

   <div align="left" style=";">
	<a href="{{ route('AdmUser') }}" title="ir atras">
	   <img src="{{ asset('images/icons/back.png') }}"  class="irAtras">
	</a> 
 </div>


 </div>  

 <script src="{{ asset('js/forms.js') }}"></script>
 
@endsection
