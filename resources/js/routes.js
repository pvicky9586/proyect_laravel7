import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router);

export default new Router({
	routes: [
	{
		path: '/',
		name: 'home',
		component:() => import('./views/Home')
	},
	
	{
		path: '/nosotros',
		name: 'nosotros',
		component:() => import('./views/Nosotros')
	},
	{
		path: '/libros',
		name: 'libros',
		component:() => import('./views/Libros')
	},	
	{
		path: '/Contactos',
		name: 'Contactos',
		component:() => import('./views/Contactos')
	},
	{
		path: '/aulavirtual',
		name: 'aulavirtual',
		component:() => import('./views/Aula Virtual')
	},
	{
		path: '/cursos',
		name: 'cursos',
		component:() => import('./views/Cursos'),
	},

		{
		path: '/cursodetail',
		name: 'cursodetail',
		component:() => import('./components/Detailcurso')
	},
		
		//{
		//path: ':slug',
		//name: 'post',
		//component:() => import('../views/Post'),
		//props: true
	//},

	//{
		//path: ':slug',
		//name: 'post',
		//component:() => import('../views/Post'),
		//props: true
	//},
	{
		path: '*',
		component:() => import('./views/404')
	}	
    ],
    
		mode: 'history' //elimina el #(has) de la URL
	});
