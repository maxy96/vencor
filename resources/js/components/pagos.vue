<template>
	<div class="container my-4">
		<div class="mb-2 text-left">
			<button type="button" data-toggle="modal" data-target="#nuevoPago" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo</button>
		</div>
		<div class="modal fade " id="nuevoPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Nuevo ingreso/costo</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      </div>
		      <form @submit.prevent="addNewPago">
			      <div class="modal-body">
				      	<div class="form-group row">
					        <label for="newTipoPago" class="col-md-4 col-form-label text-md-right">Seleccionar</label>
				            <div class="col-md-6">
				                <div v-for="tipoPago in tiposPagos" class="custom-control custom-radio custom-control-inline">
				                	<input class="custom-control-input" type="radio" :value="tipoPago.id_tipoPago" v-model="newPago.newTipoPago" :id="tipoPago.descripcion">
				                	<label class="custom-control-label" :for="tipoPago.descripcion">{{tipoPago.descripcion}}</label>
				                </div>
				            </div>
			            </div>
			            <div class="form-group row">
					        <label for="newFecha" class="col-md-4 col-form-label text-md-right">Fecha y hora limite</label>
				            <div class="col-md-6">
				            	<div class="input-group">
					            	<div class="input-group-prepend">
							          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
							        </div>
									<datetime
									  v-model="newPago.newFecha" 
									  type="datetime"
									  value-zone="America/Buenos_Aires"
	  								  zone="America/Buenos_Aires"
									  input-class="form-control"
									  :max-datetime="maxDatetime"
									  :min-datetime="minDatetime"
									  :format="{ year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: '2-digit'}"
									  :phrases="{ok: 'Continuar', cancel: 'Salir'}"
									  auto>									
									</datetime>
								</div>
				            </div>
			            </div>
			            <div class="form-group row">
			            	<label for="newImporte" class="col-md-4 col-form-label text-md-right">Importe</label>
			            	<div class="col-md-6">
			            		<input v-model="newPago.newImporte" id="newImporte" type="number" placeholder="0.00" step="0.01" class="form-control" required>
			            	</div>
			            </div>
			            <div class="form-group row">
			            	<label for="newRazon" class="col-md-4 col-form-label text-md-right">Razon</label>
			            	<div class="col-md-6">
			            		<input v-model="newPago.newRazon" id="newRazon" type="text" class="form-control" required>
			            	</div>
			            </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			        <button type="submit" class="btn btn-primary">Guardar</button>
			      </div>
		      </form>
		    </div>
		  </div>
		</div>
		<div class="table-responsive">
			<table class="table table-hover table-striped">
				<thead class="thead-bluelight">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Tipo</th>
						<th scope="col">Razon</th>
						<th scope="col">Fecha limite</th>
						<th scope="col">Importe</th>
						<th scope="col">Fecha pagado</th>
						<th scope="col">Ticket</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="pago in pagos">
						<td> {{pago.id_pago}}</td>
						<td> {{pago.descripcion}}</td>
						<td> {{pago.razon}}</td>
						<td> {{pago.fecha | fecha}}hs</td>
						<td> {{pago.dinero}}</td>
						<td> {{pago.FechaPagado}}</td>
						<td> {{pago.ticket}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</template>
<script>
import  {Datetime}  from 'vue-datetime';
import moment from 'moment';
import 'vue-datetime/dist/vue-datetime.css';
	export default{
		components: {
      	 datetime: Datetime
   		},
		mounted(){
			this.getPagos();
			this.getTiposPagos();
		},
		data(){
			return {
				date: new Date(2020, 5, 3),
				pagos: [],

				tiposPagos: [],

				datetimeMin: new Date('01 may 2020 00:00 UTC'),
				datetimeMax: new Date(),

				newPago: {
					newTipoPago: "",
		    		newFecha: "",
		    		//newFechaPagado: "",
		    		newImporte: "",
		    		newRazon: "",
		    		//newTicket: ""
				}
			}
		},
		filters:{
			fecha(value){
				return moment(String(value)).format('MM/DD/YYYY hh:mm');
			}
		},
		computed:{
			minDatetime(){
				return this.datetimeMin.toISOString();//formato (ISO 8601)
			},
			maxDatetime(){
				return this.datetimeMax.toISOString();//formato (ISO 8601)
			}
		},

		methods:{	
			getPagos(){
				axios.get('/api/pagos').then(response => {
					this.pagos = response.data
				}).catch(error => {
					console.log(error);
				});
			}, // end getPagos

			addNewPago(){
				axios.post('/api/pagos', {
					tipoPago_id: this.newPago.newTipoPago,
		    		fecha: this.newPago.newFecha,
		    		//fechaPagado: this.newPago.newFechaPagado,
		    		importe: this.newPago.newImporte,
		    		razon: this.newPago.newRazon
		    		//ticket: this.newPago.newTicket
				}).then(response => {
					toastr.success('Registro exitoso');
					$('#nuevoPago').modal('hide');
					this.getPagos();
					this.newPago = {
						newTipoPago: "",
		    			newFecha: "",
		    			newFechaPagado: "",
		    			newImporte: "",
		    			newRazon: "",
		    			newTicket: ""
					}
				})
				.catch(error => {
					//console.log(error);
					toastr.error('Error al registrar');
				});
			}, // end addNewPagos

			getTiposPagos(){
				axios.get('/api/tipos-pagos').then(response => {
					this.tiposPagos = response.data
				})
			}, // end getTiposPagos
		}// end methods
	}//end export default
</script>