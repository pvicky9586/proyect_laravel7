	
	<div id="Menu" >
		<header>
			<div class="menu_bar">
				<a href="#" class="bt-menu" ><span class="icon-list2"></span>Menu</a>
			</div>

			<nav>
				<ul>
					<li class=" dropdown-item {{ request()->routeIs('welcome') ? 'd-lg-none' : ''}}">
						<a href="{{ route('welcome') }}"><img src="{{asset('images/icons/home.png')}}" width="70" height="60"></a>
					</li>
					<li class="TextMenu  {{ request()->routeIs('nosotros') ? 'active' : ''}}">
						<a href="{{ route('nosotros') }}"><span class="icon-suitcase {{ request()->routeIs('welcome') ? 'd-lg-none' : ''}}"></span>Nosotros</a>
					</li>			
					<li class="TextMenu {{ request()->routeIs('cursos.index') ? 'active' : ''}}" >
						<a href="{{ route('cursos.index') }}"><span class="icon-rocket"></span>Cursos</a>
					</li>  





					<li class="nav-item dropdown">
						<a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><img src="{{asset('images/icons/idea.jpeg')}}" class="icon-book"></span>
							IDEAS
						</a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#"style="padding-left: 5%;" >Articulos</a><br>
				          <a class="dropdown-item" href="#" style="padding-left: 5%;" >Libros</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#" style="padding-left: 5%;" >Publicaciones</a>
				          <a class="dropdown-item" href="#" style="padding-left: 5%;" >Relexiones</a>
				        </div>
					</li>			














					<li class="TextMenu">
						<a href=""><span class="icon-earth">AulaVirtual</a>
					</li>
					<li class="TextMenu">
						<a href="" title="un souvenir para tí">Tienda</a>				
					</li>
					<li class="TextMenu">
						<a href=""><span class="icon-mail">Contactos</a>
					</li>
				</ul>
			</nav>
		</header>
		
	</div>
