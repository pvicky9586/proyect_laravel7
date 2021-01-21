	
	<div id="Menu" style="display:flex;"> 	
			<label class=" dropdown-item {{ request()->routeIs('welcome') ? 'd-lg-none' : ''}}">
				<a href="{{ route('welcome') }}"><img src="{{asset('images/icons/home.png')}}" width="80" height="60"></a>
			</label>
			<label class="TextMenu dropdown-item {{ request()->routeIs('nosotros') ? 'active' : ''}}">
				<a href="{{ route('nosotros') }}">Nosotros</a>
			</label>			
			<label class="TextMenu dropdown-item {{ request()->routeIs('MenuCursos') ? 'active' : ''}}" >
				<a href="{{ route('MenuCursos') }}">Cursos</a>
			</label>  		
			<label class="TextMenu dropdown-item">
				<a href="" >Libros</a>
			</label>			
			<label class="TextMenu dropdown-item">
				<a href="">AulaVirtual</a>
			</label>
			<label class="TextMenu dropdown-item">
				<a href="">Contactos</a>
			</label>
	</div>

<!--
							
