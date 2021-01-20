	
	<div id="Menu" style="display:flex;"> 	
			<label class="TextMenu dropdown-item ">
				<a href="{{ route('welcome') }}">Inicio</a>
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
							
