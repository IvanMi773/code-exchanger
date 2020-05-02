import Vue from 'vue'
import router from './router'
import store from './store'
import { createProvider } from './vue-apollo'
import Vuelidate from 'vuelidate'

// CSS import
import '@/assets/scss/index.scss'
import 'materialize-css/dist/js/materialize';

// Components import
import App from './App.vue'

Vue.use(Vuelidate)

Vue.config.productionTip = false

new Vue({
  router,
  store,
  apolloProvider: createProvider(),
  render: h => h(App)
}).$mount('#app')
