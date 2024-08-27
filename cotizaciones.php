<?php require_once ('page_up.php') ?>


	<div class="static-content">
		<div class="page-content">
			<div class="page-heading mb0">
				<h1>Cotizaciones</h1>
				<div class="options">
					<div class="btn-toolbar">
						<a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
					</div>
				</div>
			</div>
			<div class="page-tabs">
				<ul class="nav nav-tabs">

					<li class="active"><a data-toggle="tab" href="#details">Registrar</a></li>					
					<li><a data-toggle="tab" href="#reviews">Consultar</a></li>
					


				</ul>
			</div>
			<div class="container-fluid">


				<div class="tab-content">
					<div class="tab-pane active" id="details">			<!-- 	REGISTRAR	 -->
							<div class="panel-body">
								<div class="tab-pane active" id="details">
									<div class="panel panel-default col-md-12">
										<div class="panel-heading">
											<h2>Informacion de cliente</h2>
										</div>
										<div class="panel-body">
											<table class="table mb0">
												<tbody>
													<tr>
														<th>Cotizacion No</th>
														<td class="col-md-5">1</td>
													</tr>
													<tr>
														<th>Fecha de cotizacion</th>
														<td class="col-md-5">28 July 2014, 03:34:35 PM</td>
													</tr>
													<tr>
														<th>Fecha de Requerimiento</th>
														<td>
															<div class="input-daterange input-group"
																id="datepicker-range">
																<input type="text" class="input-small form-control"
																	name="start">
																<span class="input-group-addon">a</span>
																<input type="text" class="input-small form-control"
																	name="end">
															</div>
														</td>
													</tr>
													<tr>
														<th>Correo Electronico</th>
														<td class="col-md-2"><input type="text"
																class="form-control"></input></td>
													<tr>
														<th>Razón Social</th>
														<td class="col-md-2"><input type="text"
																class="form-control"></input></td>
													</tr>
													<tr>
														<th>Solicitante</th>
														<td class="col-md-2"><input type="text"
																class="form-control"></input></td>
													</tr>
													<tr>
														<th>Ubicación de la obra</th>
														<td class="col-md-2"><input type="text"
																class="form-control"></input></td>
													</tr>
													<tr>
														<th>Telefono</th>
														<td class="col-md-2"><input type="text"
																class="form-control"></input></td>
													</tr>

												</tbody>
											</table>
										</div>

									</div>

								</div>

							</div>
							<div class="store">
								<div class="panel">
									<div class="panel-heading">
										<h2>Equipos requeridos</h2>
									</div>
									<div class="panel-body panel-no-padding">
										<table class="table-striped table table-vam" id="miTabla">
											<thead>
												<tr>
													<th>No</th>
													<th>Equipo/Maquina</th>
													<th>Dias</th>
													<th>Observaciones</th>
													<th>Cantidad</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="col-md-1">#001</td>
													<td class="col-md-3"><input type="text" class="form-control"></td>
													<td style="width: 80px;"><input type="text"
															class="form-control touchspin" value="1"></td>
													<td><input type="text" class="form-control"></td>
													<td style="width: 80px;"><input type="text"
															class="form-control touchspin" value="1"></td>
												</tr>
											</tbody>
										</table>

										<button id="agregarFila" class="btn btn-primary">Insertar nuevo</button>
										<button class="btn btn-success"><i class="fa fa-check"></i>Guardar</button>

										<script>
											document.getElementById('agregarFila').addEventListener('click', function () {
												var tabla = document.getElementById('miTabla').getElementsByTagName('tbody')[0];
												var numFilas = tabla.rows.length + 1;
												var nuevaFila = tabla.insertRow();

												var celda1 = nuevaFila.insertCell(0);
												var celda2 = nuevaFila.insertCell(1);
												var celda3 = nuevaFila.insertCell(2);
												var celda4 = nuevaFila.insertCell(3);
												var celda5 = nuevaFila.insertCell(4);

												celda1.innerHTML = '#00' + numFilas;
												celda2.innerHTML = '<input type="text" class="form-control">';
												celda3.innerHTML = '<input type="text" class="form-control touchspin" value="1">';
												celda4.innerHTML = '<input type="text" class="form-control">';
												celda5.innerHTML = '<input type="text" class="form-control touchspin" value="1">';
											});
										</script>

									</div>
								</div>

							</div>

						
					</div>
					
					<div class="tab-pane" id="reviews">                       <!-- HISTORIAL -->
						<div class="panel">
							<div class="panel-body">
								<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h2>Cotizaciones</h2>
										<div class="panel-ctrls">
										</div>
									</div>
									<div class="panel-body panel-no-padding">
										<table id="example" class="table table-striped table-bordered" cellspacing="0"
											width="100%">
											<thead>
												<tr>
													<th>No Registro</th>
													<th>Fecha</th>
													<th>Codigo Activo</th>
													<th>Tipo</th>
													<th>Observacion</th>
													<th>Accion</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td>1</td>
													<td>02/07/2024</td>
													<td>B-005</td>
													<td class="center">Correctivo</td>
													<td class="center">Comprar urgente</td>
													<td>
														<button> Ver</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>2</td>
													<td>02/07/2024</td>
													<td>B-005</td>
													<td class="center">Correctivo</td>
													<td class="center">Comprar urgente</td>
													<td>
														<button> Ver</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>3</td>
													<td>22/07/2024</td>
													<td>B-005</td>
													<td class="center">Correctivo</td>
													<td class="center">Comprar urgente</td>
													<td>
														<button> Ver</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>4</td>
													<td>12/07/2024</td>
													<td>B-005</td>
													<td class="center">Correctivo</td>
													<td class="center">Comprar urgente</td>
													<td>
														<button> Ver</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>5</td>
													<td>02/01/2024</td>
													<td>B-023</td>
													<td class="center">Preventivo</td>
													<td class="center">Comprar urgente</td>
													<td>
														<button> Ver</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>6</td>
													<td>02/07/2024</td>
													<td>B-005</td>
													<td class="center">Correctivo</td>
													<td class="center">Comprar urgente</td>
													<td>
														<button> Ver</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>7</td>
													<td>02/05/2024</td>
													<td>B-009</td>
													<td class="center">Preventivo</td>
													<td class="center">Comprar urgente</td>
													<td>
														<button> Ver</button>
													</td>
												</tr>
												<tr class="odd gradeX">
													<td>8</td>
													<td>02/08/2024</td>
													<td>B-008</td>
													<td class="center">Correctivo</td>
													<td class="center">Comprar urgente</td>
													<td>
														<button> Ver</button>
													</td>
												</tr>
												
												

												




											</tbody>
										</table>
										<div class="panel-footer"></div>
									</div>
								</div>
								</div>
							</div>	
						</div>
					</div>

					
				</div>
			</div> <!-- .container-fluid -->
		</div> <!-- #page-content -->
	</div> <!-- #static-content -->
	











<!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script src="assets/js/jquery-1.10.2.min.js"></script> <!-- Load jQuery -->
<script src="assets/js/jqueryui-1.9.2.min.js"></script> <!-- Load jQueryUI -->
<script src="assets/js/bootstrap.min.js"></script> <!-- Load Bootstrap -->

<script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script> <!-- Sparkline -->
<script src="assets/plugins/jstree/dist/jstree.min.js"></script> <!-- jsTree -->

<script src="assets/plugins/codeprettifier/prettify.js"></script> <!-- Code Prettifier  -->
<script src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> <!-- Swith/Toggle Button -->

<script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script> <!-- Bootstrap Tabdrop -->

<script src="assets/plugins/iCheck/icheck.min.js"></script> <!-- iCheck -->

<script src="assets/js/enquire.min.js"></script> <!-- Enquire for Responsiveness -->

<script src="assets/plugins/bootbox/bootbox.js"></script> <!-- Bootbox -->

<script src="assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> <!-- Weather plugin-->

<script src="assets/js/application.js"></script>
<script src="assets/demo/demo.js"></script>
<script src="assets/demo/demo-switcher.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="assets/demo/demo-datatables.js"></script>


<!-- End loading site level scripts -->

<!-- Load page level scripts-->

<script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script> <!-- Touchspin -->

<script>
	$(function () {
		$("input.touchspin").TouchSpin({
			verticalbuttons: true
		});
	});
</script>


