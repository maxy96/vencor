import axios from 'axios';
var producto = new Vue({
  el: '#app',
  data: {
  	productos: []
  },
   created: function(){
    this.getProductos();
  },
  methods: {
  		getProductos: function(){
  			var urlProductos = 'https://vencor.test/productos';
  			axios.get(urlProductos).then(response =>{
  				this.productos = response.data;
          console.log(this.productos);
  			})
  		}
  }
})