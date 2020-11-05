require('./bootstrap');
import Vue from 'vue'
import router from './routes.js'
import App from './App.vue' 



window.Vue = require('vue');

//Vue.component('Cursos', require('./components/Cursos.vue').default);
//Vue.component('DetailCurso', require('./components/DetailCurso.vue').default);




Vue.config.productionTip = false

new Vue({
  render: h => h(App),  
  router, 
}).$mount('#app')


