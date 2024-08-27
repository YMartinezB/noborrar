<?php require_once('page_up.php') ?>
<div class="static-content">
	<div class="page-content">
		<div class="page-heading mb0">
			<h1>Registro de Mantenimiento</h1>
			<div class="options">
				<div class="btn-toolbar">
					<a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
				</div>
			</div>
		</div>
		<div class="page-tabs">
			<ul class="nav nav-tabs">

				<li class="active"><a data-toggle="tab" href="#details">Registrar</a></li>
				<li><a data-toggle="tab" href="#invoices">Consultar</a></li>
				


			</ul>
		</div>
		<div class="container-fluid">
			<div class="tab-content">
				<div class="tab-pane active" id="details">

					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2>Registro de mantenimiento</h2>
								</div>
								<div class="panel-body">
									<table class="table mb0">
										<select class="form-control">
											<option value="">PREVENTIVO</option>
											<option value="">CORRECTIVO</option>
										</select>
										<br>
										<div class="form-group">
											<textarea name="txtarea1" id="txtarea1" cols="50" rows="4"
												class="form-control" placeholder="Observaciones adicionales..."
												style="resize: none; height: 100px;"></textarea>
										</div>

										<tbody>
											<tr>
												<th>No Registro</th>
												<td style="width: 80px;"><input type="text"
														class="form-control touchspin" value="1">
												</td>
											</tr>
											<tr>
												<th>Fecha</th>
												<td style="width: 80px;"><input type="date"
														class="form-control touchspin" value="1">
												</td>
											</tr>
											<tr>
												<th>Codigo_Activo</th>
												<td style="width: 80px;"><input type="text"
														class="form-control touchspin" value="1">
												</td>
											</tr>
											<tr>
												<th>Descripcion</th>
												<td>Bulldozer D8R 001 </td>
											</tr>
											<tr>
												<th>Horometro</th>
												<td style="width: 80px;"><input type="text"
														class="form-control touchspin" value="1">
												</td>
											</tr>
											<tr>
												<th>Responsable</th>
												<td style="width: 80px;"><input type="text"
														class="form-control touchspin" value="Gabriel Amador">
												</td>
											</tr>
											<tr>
												<th>Ubicacion</th>
												<td style="width: 80px;"><input type="text"
														class="form-control touchspin" value="Obra Magangue">
												</td>
											</tr>											
										</tbody>
									</table>
									<br>
									<ul class="demo-btns">
                                        <li><a class="btn btn-lg btn-success-alt btn-label" href="#"><i class="fa fa-save"></i> Guardar</a></li>                 
                                    </ul>
								</div>							
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel-heading"></div>
							<div class="panel-body">
								<h3 class="mt0 mb20">Parte o componente intervenido</h3>
								<!-- CONTENEDOR DE CATEGORIAS---------------------------------------------------- -->
								<div class="tab-container tab-default mb0">
									<ul class="nav nav-tabs">
										<li class="dropdown pull-right tabdrop hide"><a class="dropdown-toggle"
												data-toggle="dropdown" href="#"><i class="fa fa-angle-down"></i> </a>
											<ul class="dropdown-menu"></ul>
										</li>
										<li class="active"><a href="#all-cat" data-toggle="tab"
												aria-expanded="true">Parte / Componente</a></li>
										<li class=""><a href="#most-cat" data-toggle="tab" aria-expanded="false">Accion
												tomada</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="all-cat">
											<ul class="list-unstyled mb0">
												<li><label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Sistema Electrico
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Alarmas
													</label>
												</li>
												<li><label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Baterias
													</label>
												</li>
												<li><label>
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Bornes
													</label>
												</li>
												<li><label>
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Terminales
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Filtros
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Aceites
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Rodillo Superior
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Gatos
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Carril inferior
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Kit sellos de gatos de inclinacion
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Gatos de levante
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Bombillas
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Cabina
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Pitos
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Asiento del conductor
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Pintura
													</label>
												</li>
												<li>
													<label class="">
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Otro
													</label>
												</li>

											</ul>
										</div>
										<div class="tab-pane" id="most-cat">
											<ul class="list-unstyled mb0">
												<li><label>
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Revision
													</label>
												</li>
												<li><label>
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Cambio
													</label>
												</li>
												<li><label>
														<div class="checkbox-inline icheck">
															<div class="icheckbox_minimal-blue"
																style="position: relative;"><input type="checkbox"
																	style="position: absolute; opacity: 0;"><ins
																	class="iCheck-helper"
																	style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
															</div>
														</div> Montaje
													</label>
												</li>

											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>



					</div>
					<div class="row"> <!-- CONTENEDOR VACIO INGRESAR EL RESTO DE DATOS  -->


						<!-- CONTENEDOR VACIO INGRESAR EL RESTO DE DATOS  -->


					</div>
									
				</div>

				<div class="tab-pane" id="invoices">
					<div class="panel">
						<div class="panel-body panel-no-padding">
							<br>
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h2>Requerimientos</h2>
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
</div>
</div><!--  CIERRE STATIC CONTENT WRAPPER -->
</div> <!-- CIERRE LAYOUT STATIC -->
</div> <!-- CIERRE WRAPPER -->




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

<script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script> <!-- Touchspin -->
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script> <!-- Calendar Plugin -->
<script src="assets/demo/demo-calendar.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="assets/demo/demo-datatables.js"></script>