/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
import GuitarListComponent from './components/GuitarListComponent.vue';

const app = new Vue({
  components: {
    GuitarListComponent
  },
  el: '#app',
  data() {
    return {
      apiUrl: 'http://localhost:8000/api/guitars/',
      tableTitle: '',
      tableData: []
    }
  },
  methods: {
    getGuitars() {
      axios.get(this.apiUrl).then(response => {
        this.tableTitle = "Guitar List"
        this.tableData = response.data
      }).catch(error => {
        console.log(error)
        alert('deu erro')
      })
    }
  },
  mounted() {
    this.getGuitars()
  }
});
