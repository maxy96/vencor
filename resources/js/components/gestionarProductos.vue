<template>
	<div class="container my-4">
		
		<div class="mb-2 text-left">
			<button type="button" data-toggle="modal" data-target="#nuevoProducto" class="btn btn-primary">nuevo</button>
		</div>

		<div class="modal fade bd-example-modal-lg" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Nuevo producto</h5>
			        <div class="dropdown d-inline-block mx-4">
					  <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nuevo tipo de producto</button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					      <form class="px-4 py-3" method="POST" v-on:submit.prevent="addNewTipoProducto" >
					        <div class="form-group">
					          <label for="descripcion">Nuevo Tipo de producto</label>
					          <input type="text" v-model="newTipoProductoDescripcion" class="form-control" id="descripcion" placeholder="Ejemplo: harina.">
					        </div>
					        <button type="submit" :class="{disabled: (!newTipoProductoDescripcion)}" class="btn btn-primary">Guardar</button>
					      </form>
					  </div>
					</div>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      </div>
		      <form @submit.prevent="addNewProducto"  enctype="multipart/form-data">
			      <div class="modal-body">
				      	<div class="form-group row">
					        <label for="newTipoProducto" class="col-md-4 col-form-label text-md-right">Tipo producto</label>
				            <div class="col-md-6">
				                <select v-model="newProducto.newTipoProducto" id="newTipoProducto" class="form-control">
				                    <option value="">-- Seleccionar tipo de producto --</option>
				                    <option v-for="tipoProducto in tiposProductos" v-bind:value="tipoProducto.id_tipoProducto" >{{tipoProducto.tp_descripcion}}</option>
				                </select>
				            </div>
			            </div>
			           	<div class="form-group row">
			                <label for="newNombre" class="col-md-4 col-form-label text-md-right">Nombre producto</label>

			                <div class="col-md-6">
			                    <input v-model="newProducto.newNombre" id="newNombre" type="text" class="form-control" required>
			                </div>
			            </div>
			            <div class="form-group row">
			                <label for="newMarca" class="col-md-4 col-form-label text-md-right">Marca</label>
			                <div class="col-md-6">
			                    <input v-model="newProducto.newMarca" id="newMarca" type="text" class="form-control" required>
			                </div>
			            </div>
			            <div class="form-group row">
			                <label for="newStock" class="col-md-4 col-form-label text-md-right">Stock</label>

			                <div class="col-md-6">
			                    <input v-model="newProducto.newStock" id="newStock" type="number" class="form-control" required>
			                    <small v-if="noPositiveStock(newProducto.newStock)" class="text-danger">El stock debe ser mayor que 0</small>
			                </div>
			            </div>
			            <div class="form-group row">
			                <label for="newPrecio" class="col-md-4 col-form-label text-md-right">Precio</label>
			                <div class="col-md-6">
			                    <input v-model="newProducto.newPrecio" id="newPrecio" type="number" placeholder="0.00" step="0.01" class="form-control" required>
			                    <small v-if="noPositivePrecio(newProducto.newPrecio)" class="text-danger">El precio debe ser mayor que 0</small>
			                </div>
			            </div>
			            <div class="form-group row">
			                <label for="newImagen" class="col-md-4 col-form-label text-md-right">Imagen</label>
			                <div class="col-md-6">
			                    <input @change="obtenerImagen" id="newImagen" type="file" accept="image/*" ref="fileImage" required>
			                </div>
			            </div>
			            <div class="row justify-content-center">
			            	<div class="col-md-4">
					            <div class="card">
					      			<img :src="newProducto.newImagen" class="card-img-top" alt="Card image cap" style="height: 160px;">
							  		<h5 class="card-header">{{newProducto.newNombre}}</h5>
							 	 	<div class="card-body">
							   			 <p class="card-text">Marca: {{newProducto.newMarca}}</p>
							   			 <p class="card-text">Stock: {{newProducto.newStock}}</p>
							 		</div>
							 		<div class="card-footer ">
								    	<span class="card-link">${{newProducto.newPrecio}}</span>
							  		</div>
					      		</div>
			            	</div>
			            </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			        <button type="submit" :class="{disabled: (noPositivePrecio(newProducto.newPrecio) || noPositiveStock(newProducto.newStock) )}" class="btn btn-primary">Guardar producto</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>
		<div class="table-responsive">
			<table class="table table-hover table-striped">
				<thead class="thead-bluelight">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Imagen</th>
						<th scope="col">Producto</th>
						<th scope="col">Tipo</th>
						<th scope="col">Marca</th>
						<th scope="col">Precio</th>
						<th scope="col">Stock</th>
						<th scope="col">Estado</th>
						<th scope="col">Accion</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="producto in productos">
						<td>{{producto.id_producto}}</td>
						<td><img :src="`${url}image/${producto.p_imagen}`" height="60px" width="60px"></td>
						<td>{{producto.nombre}}</td>
						<td>{{producto.tp_descripcion}}</td>
						<td>{{producto.marca}}</td>
						<td>{{producto.precio}}</td>
						<td>{{producto.stock}}</td>
						<td><button class="btn" :class="esDisponible(producto.estadoProducto_id)" v-on:click="deleteProducto(producto)">{{producto.ep_descripcion}}</button></td>
						<td><button class="btn btn-primary" v-on:click.prevent="capturarProducto(producto)" data-toggle="modal" data-target="#editarProducto">Editar</button></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="modal fade bd-example-modal-lg" id="editarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
			        <div class="dropdown d-inline-block mx-4">
					  <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nuevo tipo de producto</button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					      <form class="px-4 py-3" method="POST" v-on:submit.prevent="addNewTipoProducto" >
					        <div class="form-group">
					          <label for="descripcion">Nuevo Tipo de producto</label>
					          <input type="text" v-model="newTipoProductoDescripcion" class="form-control" id="descripcion" placeholder="Ejemplo: harina.">
					        </div>
					        <button type="submit" :class="{disabled: (!newTipoProductoDescripcion)}" class="btn btn-primary">Guardar</button>
					      </form>
					  </div>
					</div>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      </div>
		      <form @submit.prevent="editarProducto"  enctype="multipart/form-data">
			      <div class="modal-body">
				      	<div class="form-group row">
					        <label for="editTipoProducto" class="col-md-4 col-form-label text-md-right">Tipo producto</label>
				            <div class="col-md-6">
				                <select v-model="editProducto.editTipoProducto" id="editTipoProducto" class="form-control">
				                    <option value="">-- Seleccionar tipo de producto --</option>
				                    <option v-for="tipoProducto in tiposProductos" v-bind:value="tipoProducto.id_tipoProducto" >{{tipoProducto.tp_descripcion}}</option>
				                </select>
				            </div>
			            </div>
			           	<div class="form-group row">
			                <label for="editNombre" class="col-md-4 col-form-label text-md-right">Nombre producto</label>

			                <div class="col-md-6">
			                    <input v-model="editProducto.editNombre" id="editNombre" type="text" class="form-control" >
			                </div>
			            </div>
			            <div class="form-group row">
			                <label for="editMarca" class="col-md-4 col-form-label text-md-right">Marca</label>
			                <div class="col-md-6">
			                    <input v-model="editProducto.editMarca" id="editMarca" type="text" class="form-control" >
			                </div>
			            </div>
			            <div class="form-group row">
			                <label for="editStock" class="col-md-4 col-form-label text-md-right">Stock</label>

			                <div class="col-md-6">
			                    <input v-model="editProducto.editStock" id="editStock" type="number" class="form-control" >
			                    <small v-if="noPositiveStock(editProducto.editStock)" class="text-danger">El stock debe ser mayor que 0</small>
			                </div>
			            </div>
			            <div class="form-group row">
			                <label for="editPrecio" class="col-md-4 col-form-label text-md-right">Precio</label>
			                <div class="col-md-6">
			                    <input v-model="editProducto.editPrecio" id="editPrecio" type="number" placeholder="0.00" step="0.01" class="form-control">
			                    <small v-if="noPositivePrecio(editProducto.editPrecio)" class="text-danger">El precio debe ser mayor que 0</small>
			                </div>
			            </div>
			            <div class="form-group row">
			                <label for="editImagen" class="col-md-4 col-form-label text-md-right">Imagen</label>
			                <div class="col-md-6">
			                    <input @change="obtenerImagen" id="editImagen" type="file" accept="image/*" ref="fileImage" >
			                </div>
			            </div>
			            <div class="row justify-content-center">
			            	<div class="col-md-4">
					            <div class="card">
					      			<img :src="editProducto.imagenPrevia" class="card-img-top" alt="Card image cap" style="height: 160px;">
							  		<h5 class="card-header">{{editProducto.editNombre}}</h5>
							  		{{editProducto.id_producto}}
							 	 	<div class="card-body">
							   			 <p class="card-text">Marca: {{editProducto.editMarca}}</p>
							   			 <p class="card-text">Stock: {{editProducto.editStock}}</p>
							 		</div>
							 		<div class="card-footer ">
								    	<span class="card-link">${{editProducto.editPrecio}}</span>
							  		</div>
					      		</div>
			            	</div>
			            </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			        <button type="submit" class="btn btn-primary">Guardar cambios</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>
	</div>
</template>
<script>
	export default{
		mounted(){
			this.getProductos();
			this.getTiposProductos();
		},//end mounted
		data(){
			return{
				url: "https://vencor.test/",
				
				productos: [],
				tiposProductos: [],
				
				newProducto: {
					newTipoProducto: "",
					newNombre: "",
					newMarca: "",
					newStock: "",
					newPrecio: "",
					newImagen: "",
				},

				editProducto: {
					id_producto: "",
					editTipoProducto: "",
					editNombre: "",
					editMarca: "",
					editStock: "",
					editPrecio: "",
					editImagen: "",
					imagenPrevia: ""
				},

				newTipoProductoDescripcion: "",
			}
		},//end data

		methods:{

			noPositiveStock(stock){
				return (stock < 0);
			}, //end IsPositiveStock
			noPositivePrecio(precio){
				return (precio < 0);
			}, //end IsPositiveStock
			esDisponible(disponible){
				if (disponible == 1) {
					return 'btn-success';
				}
				return 'btn-danger';
			},

			getProductos(){
				axios.get('/api/producto').then(response => {
					this.productos = response.data
				});
			}, //end getProductos

			capturarProducto(producto){
				this.editProducto.id_producto = producto.id_producto;
				this.editProducto.editTipoProducto = producto.tipoProducto_id;
				this.editProducto.editNombre = producto.nombre;
				this.editProducto.editMarca = producto.marca;
				this.editProducto.editStock = producto.stock;
				this.editProducto.editPrecio = producto.precio;
				this.editProducto.editImagen = producto.p_imagen;
				this.editProducto.imagenPrevia = this.url+'image/'+producto.p_imagen;
				
			},
			editarProducto(){
				axios.put('/api/producto/'+this.editProducto.id_producto, {
					tipoProducto_id: this.editProducto.editTipoProducto,
					nombre: this.editProducto.editNombre,
					marca: this.editProducto.editMarca,
					stock: this.editProducto.editStock,
					precio: this.editProducto.editPrecio,
					imagen: this.editProducto.editImagen
				}).then(response => {
						toastr.success('Producto modificado');
						this.$refs.fileImage.value = '';
						this.getProductos();
						$('#editarProducto').modal('hide');
					}).catch(error => {
						console.log(error.response.data);
						toastr.error('Error al moficar el producto');	
					});
			},

			deleteProducto(producto){
				axios.delete('/api/producto/'+producto.id_producto)
					.then(response => {
						this.getProductos();
						toastr.success('Estado del producto modificado');
					});
			}, //end deleteProductos

			addNewProducto(){
				let formData = new FormData();
				formData.append('tipoProducto', this.newProducto.newTipoProducto);
				formData.append('nombre', this.newProducto.newNombre);
				formData.append('marca', this.newProducto.newMarca);
				formData.append('stock', this.newProducto.newStock);
				formData.append('precio', this.newProducto.newPrecio);
				formData.append('imagen', this.newProducto.newImagen);
				axios.post('/api/producto', formData)
					.then(response => {
						toastr.success('Nuevo producto registrado');
						$('#nuevoProducto').modal('hide');
						this.getProductos();
						this.$refs.fileImage.value = '';
						this.newProducto.newTipoProducto = "";
						this.newProducto.newNombre = "";
						this.newProducto.newMarca = "";
						this.newProducto.newStock = "";
						this.newProducto.newPrecio = "";
						this.newProducto.newImagen = "";
					})
					.catch(error => {
						//this.error.newStock = error.
						//console.log(error.response.data);
						toastr.error('Error en el registro del producto');
					});
			}, // end addNewProducto

			getTiposProductos(){
				axios.get('/api/tipos-productos').then(response => {
					this.tiposProductos = response.data
				});
			}, //end getTiposProductos

			addNewTipoProducto(){
				axios.post('/api/tipos-productos', {
					descripcion: this.newTipoProductoDescripcion
				}).then(response => {
					toastr.success('Nuevo tipo de proucto agregado');
					this.newTipoProductoDescripcion = "";
					this.getTiposProductos();
				});
			}, //end addNewTipoProducto

			obtenerImagen(e){
				let file = e.target.files[0];
				let fileReader = new FileReader();
				fileReader.readAsDataURL(file);
				
				fileReader.onload = (e) =>{
					this.newProducto.newImagen = e.target.result;
					this.editProducto.editImagen = e.target.result;
					this.editProducto.imagenPrevia = e.target.result;
				}
			}, //end obtenerImagen
		}// end methods
	}//end
</script>