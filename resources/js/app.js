/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('welcome', require('./views/welcome.vue').default);
// Vue.component('group-users', require('./components/GroupUsers.vue').default);
// Vue.component('back', require('./components/Back.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

// import Vue from 'vue'
// import router from './router'
// import store from './store'
// import { createProvider } from './vue-apollo'
// import Vuelidate from 'vuelidate'

// // CSS import
// import '@/assets/scss/index.scss'
// import 'materialize-css/dist/js/materialize';

// // Components import
// import App from './App.vue'

// Vue.use(Vuelidate)

// Vue.config.productionTip = false

// new Vue({
//   router,
//   store,
//   apolloProvider: createProvider(),
//   render: h => h(App)
// }).$mount('#app')
