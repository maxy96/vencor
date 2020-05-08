<template>
	<div class="container my-4">
		<div class="mb-2 text-left">
			<button type="button" data-toggle="modal" data-target="#nuevoProveedor" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo</button>
		</div>
		<div class="modal fade bd-example-modal-lg" id="nuevoProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header" style="border-bottom: 0px;">
			        <nav class="w-100">
					  <div class="nav nav-tabs" id="nav-tab" role="tablist">
					    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Proveedor</a>
					    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Canales de pagos</a>
					    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Nuevo pedido</a>
					  </div>
					</nav>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      </div>
		      <div class="tab-content" id="nav-tabContent">
		      	   <!--Proveedor -->
		      	  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
				      <form @submit.prevent="addNewProveedor">
					    	<div class="modal-body">
								<div class="row">
									<div class="col-md-12 my-2"><h4>Datos de la empresa</h4></div>
									<div class="col-md-6">
										<div class="form-group row">
								            <label for="empresa" class="col-md-4 col-form-label text-md-right">Empresa</label>
										    <div class="col-md-8">
										        <input v-model="newProveedores.newEmp" id="empresa" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
									        <label for="direccion_empresa" class="col-md-4 col-form-label text-md-right">Direccion</label>
									        <div class="col-md-8">
									            <input v-model="newProveedores.newDireccionEmp" id="direccion_empresa" type="text" class="form-control" required>
									        </div>
									    </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="cuit" class="col-md-4 col-form-label text-md-right">CUIT</label>
										    <div class="col-md-8">
											    <input v-model="newProveedores.newCuit" id="cuit" type="text" class="form-control" required>
											</div>
										</div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="tel_empresa" class="col-md-4 col-form-label text-md-right">Telefono</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newTelEmp" id="tel_empresa" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="email_empresa" class="col-md-4 col-form-label text-md-right">Email</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newEmailEmp" id="email_empresa" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>

									<div class="col-md-12 my-2"><h4>Datos del revendedor</h4></div>						
									<div class="col-md-6">
										<div class="form-group row">
								            <label for="revendedor" class="col-md-4 col-form-label text-md-right">Revendedor</label>
										    <div class="col-md-8">
										        <input v-model="newProveedores.newRev" id="revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
									        <label for="direccion_revendedor" class="col-md-4 col-form-label text-md-right">Direccion</label>
									        <div class="col-md-8">
									            <input v-model="newProveedores.newDireccionRev" id="direccion_revendedor" type="text" class="form-control" required>
									        </div>
									    </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="cuil" class="col-md-4 col-form-label text-md-right">CUIL</label>
										    <div class="col-md-8">
											    <input v-model="newProveedores.newCuil" id="cuil" type="text" class="form-control" required>
											</div>
										</div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="tel_revendedor" class="col-md-4 col-form-label text-md-right">Telefono</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newTelRev" id="tel_revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="email_revendedor" class="col-md-4 col-form-label text-md-right">Email</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newEmailRev" id="email_revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>						
					    		</div>
					    	</div>
					    	<div class="modal-footer">
					      		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					      		<button type="submit" class="btn btn-primary">Guardar proveedor</button>
					   	 	</div>
				      </form>		      	  	
		      	  </div>
		      	  <!--Canales de pago -->
		      	  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		      	  		<form @submit.prevent="addNewProveedor">
					    	<div class="modal-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
								            <label for="empresa" class="col-md-2 col-form-label text-md-right">CBU</label>
										    <div class="col-md-10">
										        <input v-model="newProveedores.newEmp" id="empresa" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
									        <label for="direccion_empresa" class="col-md-4 col-form-label text-md-right">Banco/Nombre</label>
									        <div class="col-md-8">
									            <input v-model="newProveedores.newDireccionEmp" id="direccion_empresa" type="text" class="form-control" required>
									        </div>
									    </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="cuit" class="col-md-4 col-form-label text-md-right">Nombre</label>
										    <div class="col-md-8">
											    <input v-model="newProveedores.newCuit" id="cuit" type="text" class="form-control" required>
											</div>
										</div> 
									</div>
									<div class="col-md-6 pl-5">
										<div class="form-group row">
										    <div class="custom-control custom-checkbox custom-control-inline">
							                	<input class="custom-control-input" type="checkbox" data-toggle="collapse" data-target="#cuentaCorriente" id="cuentaCorrienteCheck">
							                	<label class="custom-control-label" for="cuentaCorrienteCheck">Cuenta Corrientes</label>
							                </div>
							                <div class="custom-control custom-checkbox custom-control-inline">
							                	<input class="custom-control-input" type="checkbox" data-toggle="collapse" data-target="#cajaAhorro" id="cajaAhorroCheck">
							                	<label class="custom-control-label" for="cajaAhorroCheck">Caja de ahorro</label>
							                </div>
								        </div> 
									</div>

									<div class="col-md-6">
										<div class="form-group row">
										    <label for="email_empresa" class="col-md-4 col-form-label text-md-right">Apellido</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newEmailEmp" id="email_empresa" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									
									<div class="col-md-6">
										<div class="form-group row collapse" id="cajaAhorro">
											<label class="col-md-6 offset-md-3 col-form-label text-md-center border rounded-pill border-secondary">Caja de ahorro</label>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group row">
								            <label for="revendedor" class="col-md-4 col-form-label text-md-right">Direccion</label>
										    <div class="col-md-8">
										        <input v-model="newProveedores.newRev" id="revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row collapse" id="cajaAhorro">
									        <label for="direccion_revendedor" class="col-md-4 col-form-label text-md-right">Numero sucursal</label>
									        <div class="col-md-8">
									            <input v-model="newProveedores.newDireccionRev" id="direccion_revendedor" type="text" class="form-control" required>
									        </div>
									    </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="cuil" class="col-md-4 col-form-label text-md-right">Telefono</label>
										    <div class="col-md-8">
											    <input v-model="newProveedores.newCuil" id="cuil" type="text" class="form-control" required>
											</div>
										</div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row collapse" id="cajaAhorro">
										    <label for="tel_revendedor" class="col-md-4 col-form-label text-md-right">Numero cuenta</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newTelRev" id="tel_revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="email_revendedor" class="col-md-4 col-form-label text-md-right">Cuil</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newEmailRev" id="email_revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>	
									<div class="col-md-6">
										<div class="form-group row collapse" id="cuentaCorriente">
											<label class="col-md-6 offset-md-3 col-form-label text-md-center border rounded-pill border-secondary">Cuenta corrientes</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="email_revendedor" class="col-md-4 col-form-label text-md-right">Codigo Postal</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newEmailRev" id="email_revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row collapse" id="cuentaCorriente">
										    <label for="tel_revendedor" class="col-md-4 col-form-label text-md-right">Numero sucursal</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newTelRev" id="tel_revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="tel_revendedor" class="col-md-4 col-form-label text-md-right">Telefono 2</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newTelRev" id="tel_revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>	
									<div class="col-md-6">
										<div class="form-group row collapse" id="cuentaCorriente">
										    <label for="tel_revendedor" class="col-md-4 col-form-label text-md-right">Numero cuenta</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newTelRev" id="tel_revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row">
										    <label for="tel_revendedor" class="col-md-4 col-form-label text-md-right">Email</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newTelRev" id="tel_revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>
									<div class="col-md-6">
										<div class="form-group row collapse" id="cuentaCorriente">
										    <label for="tel_revendedor" class="col-md-4 col-form-label text-md-right">Nombre cuenta</label>
											<div class="col-md-8">
										        <input v-model="newProveedores.newTelRev" id="tel_revendedor" type="text" class="form-control" required>
										    </div>
								        </div> 
									</div>					
					    		</div>
					    	</div>
					    	<div class="modal-footer">
					      		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					      		<button type="submit" class="btn btn-primary">Guardar proveedor</button>
					   	 	</div>
				      </form>
		      	  </div> 
		      	  <!--Solicitud -->
		      	  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
		      	  	<div class="modal-body">
			      	  	<div class="container mb-2 row">
			      	  		<div class="col-6">
			      	  			<h6 class="text-center">Empresa</h6>
			      	  		</div>
			      	  		<div class="col-6">
								<h6 class="text-center">Fecha: {{fechaHoy | dateFormat}}</h6>
			      	  		</div>
			      	  	</div>
		      	  		<div class="table-responsive">
		      	  			<table class="table">
		      	  				<thead>
		      	  					<tr>
		      	  						<th scope="col">ID Producto</th>
		      	  						<th scope="col">Marca</th>
		      	  						<th scope="col">Color</th>
		      	  						<th scope="col">Talle</th>
		      	  						<th scope="col">Descripcion</th>
		      	  						<th scope="col">Motivo</th>
		      	  						<th scope="col">Precio de fabrica</th>
		      	  						<th scope="col">Cantidad</th>     	  			
		      	  						<th scope="col">Subtotal</th>
		      	  					</tr>
		      	  				</thead>
		      	  				<tbody>
		      	  					<tr>
		      	  						<td>sd</td>
		      	  					</tr>
		      	  				</tbody>
		      	  				<tfoot>
		      	  					<tr>
		      	  						<th colspan="3" class="text-center">Total</th>
		      	  						<th colspan="4" class="text-center">
		      	  							 <div class="form-group row">
								            	<label for="newImporte" class="col-md-4 col-form-label text-md-right p-0">Agregar +%</label>
								            	<div class="col-md-4">
								            		<input  id="newImporte" type="number" placeholder="0.00" step="0.01" class="form-control">
								            	</div>
								            </div>
		      	  						</th>
		      	  						<th>cant12</th>
		      	  						<th>precio12</th>
		      	  					</tr>
		      	  				</tfoot>
		      	  			</table>
		      	  		</div>
		      	  	</div>
		      	  	<div class="modal-footer">
					     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					     <button type="submit" class="btn btn-primary">Guardar proveedor</button>
					</div>
		      	  </div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="table-responsive">
			<table class="table table-hover table-striped">	
				<thead class="thead-bluelight">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Empresa</th>
						<th scope="col">CUIT</th>
						<th scope="col">Direccion empresa</th>
						<th scope="col">Contacto empresa</th>
						<th scope="col">Revendedor</th>
						<th scope="col">CUIL</th>
						<th scope="col">Direccion revendedor</th>
						<th scope="col">Contacto revendedor</th>
						<th scope="col">Editar</th>					
					</tr>
				</thead>
				<tbody>
					<tr v-for="proveedor in proveedores">
						<td>{{proveedor.id_proveedor}}</td>
						<td>{{proveedor.empresa}}</td>
						<td>{{proveedor.cuit}}</td>
						<td>{{proveedor.direccion_empresa}}</td>
						<td>
							{{proveedor.tel_empresa}} <br>
							{{proveedor.email_empresa}}
						</td>
						<td>{{proveedor.revendedor}}</td>
						<td>{{proveedor.cuil}}</td>
						<td>{{proveedor.direccion_revendedor}}</td>
						<td>
							{{proveedor.tel_revendedor}} <br>
							{{proveedor.email_revendedor}}
						</td>
						<td>
							<button class="btn btn-outline-success" v-on:click.prevent="capturarProveedor(proveedor)" data-toggle="modal" data-target="#editarProveedor"><i class="fa fa-edit"></i></button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="modal fade bd-example-modal-lg" id="editarProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Editar proveedor</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      </div>
		      <form @submit.prevent="editarProveedor">
			    	<div class="modal-body">
						<div class="row">
							<div class="col-md-12 my-2"><h4>Datos de la empresa</h4></div>
							<div class="col-md-6">
								<div class="form-group row">
						            <label for="empresa" class="col-md-4 col-form-label text-md-right">Empresa</label>
								    <div class="col-md-8">
								        <input v-model="editProveedor.editEmp" id="empresa" type="text" class="form-control" required>
								    </div>
						        </div> 
							</div>
							<div class="col-md-6">
								<div class="form-group row">
							        <label for="direccion_empresa" class="col-md-4 col-form-label text-md-right">Direccion</label>
							        <div class="col-md-8">
							            <input v-model="editProveedor.editDireccionEmp" id="direccion_empresa" type="text" class="form-control" required>
							        </div>
							    </div> 
							</div>
							<div class="col-md-6">
								<div class="form-group row">
								    <label for="cuit" class="col-md-4 col-form-label text-md-right">CUIT</label>
								    <div class="col-md-8">
									    <input v-model="editProveedor.editCuit" id="cuit" type="text" class="form-control" required>
									</div>
								</div> 
							</div>
							<div class="col-md-6">
								<div class="form-group row">
								    <label for="tel_empresa" class="col-md-4 col-form-label text-md-right">Telefono</label>
									<div class="col-md-8">
								        <input v-model="editProveedor.editTelEmp" id="tel_empresa" type="text" class="form-control" required>
								    </div>
						        </div> 
							</div>
							<div class="col-md-6">
								<div class="form-group row">
								    <label for="email_empresa" class="col-md-4 col-form-label text-md-right">Email</label>
									<div class="col-md-8">
								        <input v-model="editProveedor.editEmailEmp" id="email_empresa" type="text" class="form-control" required>
								    </div>
						        </div> 
							</div>

							<div class="col-md-12 my-2"><h4>Datos del revendedor</h4></div>						
							<div class="col-md-6">
								<div class="form-group row">
						            <label for="revendedor" class="col-md-4 col-form-label text-md-right">Revendedor</label>
								    <div class="col-md-8">
								        <input v-model="editProveedor.editRev" id="revendedor" type="text" class="form-control" required>
								    </div>
						        </div> 
							</div>
							<div class="col-md-6">
								<div class="form-group row">
							        <label for="direccion_revendedor" class="col-md-4 col-form-label text-md-right">Direccion</label>
							        <div class="col-md-8">
							            <input v-model="editProveedor.editDireccionRev" id="direccion_revendedor" type="text" class="form-control" required>
							        </div>
							    </div> 
							</div>
							<div class="col-md-6">
								<div class="form-group row">
								    <label for="cuil" class="col-md-4 col-form-label text-md-right">CUIL</label>
								    <div class="col-md-8">
									    <input v-model="editProveedor.editCuil" id="cuil" type="text" class="form-control" required>
									</div>
								</div> 
							</div>
							<div class="col-md-6">
								<div class="form-group row">
								    <label for="tel_revendedor" class="col-md-4 col-form-label text-md-right">Telefono</label>
									<div class="col-md-8">
								        <input v-model="editProveedor.editTelRev" id="tel_revendedor" type="text" class="form-control" required>
								    </div>
						        </div> 
							</div>
							<div class="col-md-6">
								<div class="form-group row">
								    <label for="email_revendedor" class="col-md-4 col-form-label text-md-right">Email</label>
									<div class="col-md-8">
								        <input v-model="editProveedor.editEmailRev" id="email_revendedor" type="text" class="form-control" required>
								    </div>
						        </div> 
							</div>						
			    		</div>
			    	</div>
			    	<div class="modal-footer">
			      		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			      		<button type="submit" class="btn btn-primary">Editar proveedor</button>
			   	 	</div>
		      </form>
		    </div>
		  </div>
		</div>
	</div>
</template>
<script>
import moment from 'moment';
 	export default{
 		mounted(){
 			this.getProveedores();
 		},
 		data(){
 			return{
 				proveedores: [],

 				fechaHoy: new Date(),

 				newProveedores:{
 					newEmp: "", // emp = empresa
 					newCuit: "",
 					newDireccionEmp: "",
 					newTelEmp: "",
 					newEmailEmp: "",
 					newRev: "",//rev = revendedor
 					newCuil: "",
 					newDireccionRev: "",
 					newTelRev: "",
 					newEmailRev: "",
 				},

 				editProveedor:{
 					id: "",
 					editEmp: "", // emp = empresa
 					editCuit: "",
 					editDireccionEmp: "",
 					editTelEmp: "",
 					editEmailEmp: "",
 					editRev: "",//rev = revendedor
 					editCuil: "",
 					editDireccionRev: "",
 					editTelRev: "",
 					editEmailRev: "",
 				},
 			}
 		},
 		filters:{
 			dateFormat(value){
 				return moment(String(value)).format('MM/DD/YYYY');
 			}
 		},

 		methods: {
 			getProveedores(){
 				axios.get('/api/proveedores').then(response => {
 					this.proveedores = response.data
 				});
 			}, //end getProveedores

 			addNewProveedor(){
 				axios.post('/api/proveedores', {
 					empresa: this.newProveedores.newEmp,
 					cuit: this.newProveedores.newCuit,
 					direccion_empresa: this.newProveedores.newDireccionEmp,
 					tel_empresa: this.newProveedores.newTelEmp,
 					email_empresa: this.newProveedores.newEmailEmp,
 					revendedor: this.newProveedores.newRev,
 					cuil: this.newProveedores.newCuil,
 					direccion_revendedor: this.newProveedores.newDireccionRev,
 					tel_revendedor: this.newProveedores.newTelRev,
 					email_revendedor: this.newProveedores.newEmailRev
 				}).then(response => {			
	 				this.newProveedores.newEmp = ""; // emp = empresa
	 				this.newProveedores.newCuit = "";
	 				this.newProveedores.newDireccionEmp = "";
	 				this.newProveedores.newTelEmp = "";
	 				this.newProveedores.newEmailEmp = "";
	 				this.newProveedores.newRev = "";//rev = revendedor
	 				this.newProveedores.newCuil = "";
	 				this.newProveedores.newDireccionRev = "";
	 				this.newProveedores.newTelRev = "";
	 				this.newProveedores.newEmailRev = "";	
	 				this.getProveedores();
	 				$('#nuevoProveedor').modal('hide');
	 				toastr.success('Nuevo proveedor agregado');
 				})	
 				.catch(error => {
 					toastr.error('Error', 'Asegurese de poner los datos correctos');
 				});
 			}, //end AddNewProveedor

 			capturarProveedor(proveedor){
 				this.editProveedor.id = proveedor.id_proveedor;
 				this.editProveedor.editEmp = proveedor.empresa; // emp = empresa
 				this.editProveedor.editCuit = proveedor.cuit;
 				this.editProveedor.editDireccionEmp = proveedor.direccion_empresa;
 				this.editProveedor.editTelEmp = proveedor.tel_empresa;
 				this.editProveedor.editEmailEmp = proveedor.email_empresa;
 				this.editProveedor.editRev = proveedor.revendedor;//rev - revendedor
 				this.editProveedor.editCuil = proveedor.cuil;
 				this.editProveedor.editDireccionRev = proveedor.direccion_revendedor;
 				this.editProveedor.editTelRev = proveedor.tel_revendedor;
 				this.editProveedor.editEmailRev = proveedor.email_revendedor;
 			},

 			editarProveedor(){
 				axios.put('/api/proveedores/'+this.editProveedor.id, {
 					empresa: this.editProveedor.editEmp,
 					cuit: this.editProveedor.editCuit,
 					direccion_empresa: this.editProveedor.editDireccionEmp,
 					tel_empresa: this.editProveedor.editTelEmp,
 					email_empresa: this.editProveedor.editEmailEmp,
 					revendedor: this.editProveedor.editRev,
 					cuil: this.editProveedor.editCuil,
 					direccion_revendedor: this.editProveedor.editDireccionRev,
 					tel_revendedor: this.editProveedor.editTelRev,
 					email_revendedor: this.editProveedor.editEmailRev
 				}).then(response => {
 					$('#editarProveedor').modal('hide');
 					this.getProveedores();
	 				toastr.success('Proveedor editado');
 				}).catch(error => {
 					console.log(error.response.data);
 					toastr.error('Error', 'Asegurese de poner los datos correctos');
 				});
 			}
 		} //end methods
 	}
</script>