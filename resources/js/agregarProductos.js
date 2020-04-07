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
  			var urlProductos = 'productos';
  			axios.get(urlProductos).then(response =>{
          console.log(response.data);
  				this.productos = response.data
  			})
  		}
  }
})