@extends('layouts.app')
@section('title','- Nuevo Usuario')
@section('content')

<!--Hasta este momento solo usuario administrador tiene acceso a esta vistta de registro-->

    <div class="title"><b> Registrar Usuario</b></div><br>
		
<div class="toll">
	<div class="form_new"> 
		
		<form class="form-horizontal" method="POST" action="{{ route('createUser') }}" name="formulario" id="formulario">
          {{ csrf_field() }}
         
<!--
			<h2> Cedula de Identidad: <input id="cedula" type="text" class="" name="cedula" value="{{ old('cedula') }}"  placeholder="N°"  autofocus required></h2>
-->		<div class="form-group">
			<h3>
				<input type="text" placeholder="Nombre(s)" class="" name="name" value="{{ old('name') }}" style="width:100%;"required></h3>				
			<h3>
				<input type="text" placeholder="Apellido(s)"class="" name="last_name" value="{{ old('last_name') }}" style="width:100%;"required></h3> 
			
		</div>		  
		
				
				
          <!--USERNAME - PRIVILEGES-->
			        <div style=" width:100%; display:flex;">
						
						<label for="username" class="" align="center"><b  style="font-size:24px; color:#7A551E;" >Nombre de Usuario</b>   <br>           
							<input id="username" type="text" class="" name="username" value="{{ old('username') }}"    style="font-size:20px; color:#7A331E;" required>
						</label>
                        @if ($errors->has('username'))
                            <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif  
						<br>
						<span align="center" class="text-center" style="font-size:0.5rem; color:red; margin-top:25px; margin-right:1%;">
							 Debe contener: entre 5-10 caractes Alfa-numericos<br>						
						</span>
                            
                  
                            <div for="privileges" class=""><b   style="font-size:24px; color:#7A551E; widht:100%;" align >Privilegios</b><br>
                               <select name="privileges" id="privileges" class="form-control"    style="font-size:20px; color:#7A331E; width:100%;"required>
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
			 <div style="display: flex; font-size:20px;"class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
					<label style="width:100%;">E-Mail<br>
					   <input id="email" type="email" style="width:100%;" name="email" value="{{ old('email') }}"  placeholder="direccion@example.com" style="width:100%;" required>
					</label>
					  @if ($errors->has('email'))
						 <span class="help-block">
							 <strong>{{ $errors->first('email') }}</strong>
						</span>
					 @endif   				
			       <label style="width:100%;"> Confirme E-mail<br>
					   <input id="email_verified_at" type="email" name="email_verified_at" placeholder="Confirmatión"  style="width:100%;" required >
				   </label>
			</div>

			
<!-- password - CONFIRME password-->
			   <div style="display: flex; font-size:1.5rem;" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				  <label style="width:100%;">Password<br>
					<input id="password" type="password" class="" name="password" placeholder="Ingrese su Password"  style="width:100%;" required>
				 </label>
					   @if ($errors->has('password'))
						 <span class="help-block">
							 <strong>{{ $errors->first('password') }}</strong>
						 </span>
					  @endif
								
				 <label style="width:100%">Confirme Password<br>
					<input id="password-confirm" type="password" class="" name="password_confirmation"  placeholder="Confirmatión"  style="width:100%;" required>
				</label>				
			 </div>	
			 <span style="font-size:0.5rem; color:red;">
					Password -> debe contener: entre 5-10 caractes Alfa-numericos					
				</span>	
							
	<input type="text" name="id_user_created" value="{{ Auth::user()->id }}" style="visibility:hidden"  size="0">
		
	<div align="center">  
		
         <input type="submit" name="btnsave" class="bt-save tex-bt btn btn-primary" onclick="pregunta()" value="Guardar"/>  <br>
		<input type="reset" value="Cancelar" class="btn btn-danger bt-canc" >			   
	 </div>
  </form>
  </div>

 
		<a href="{{ route('AdmUser') }}" ><img src="{{ asset('images/irAtras.jpg') }}" class="irHome"></a>  

 </div>  

 <script src="{{ asset('js/forms.js') }}"></script>
 
@endsection
