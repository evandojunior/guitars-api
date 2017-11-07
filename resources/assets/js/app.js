/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var axios = require('axios')
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
import ExampleComponent from './components/ExampleComponent.vue';

const app = new Vue({
  components: {
    ExampleComponent
  },
  el: '#app',
  data() {
    return {
      msg: "Booora Vue.js",
      title: "Titulo que vai pro Component",
      url: 'https://swapi.co/api/',
      dadosDaTabela: []
    }
  },
  methods: {
    getStartWars(param) {
      axios.get(this.url + param).then(response => {
        this.dadosDaTabela = response.data.results
        console.log(this.dadosDaTabela)
      }).catch(error => {
        console.log(error)
        alert('deu erro')
      })
    }
  },
  mounted() {
    this.getStartWars('people')
  }
});
