<?php require_once ('page_up.php') ?>


<div class="static-content">
    <div class="page-content">
        <div class="page-heading mb0">
            <h1>Registro de clientes</h1>
            
        </div>
        <div class="page-tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#details">Registrar</a></li>
                <li><a data-toggle="tab" href="#reviews">Consultar</a></li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="tab-content">

                <div class="tab-pane active" id="details"> <!-- 	REGISTRAR	 -->
                    <div class="panel">
                        <div class="panel-body">
                            <form action="registrarcliente.php" method="POST" class="form-horizontal row-border"
                                id="validate-form" name="registrarclientes" data-parsley-validate>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nombre</label>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="" name="nombre" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Razon Social</label>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="" name="razonsocial" required
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Correo Electronico</label>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="" name="correo" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Telefono</label>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="" name="telefono" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Direccion</label>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="" name="direccion" required
                                            class="form-control">
                                    </div>
                                </div>

                                <button class="btn btn-success" style="float: right;"><i
                                            class="fa fa-check"></i>Guardar</button>


                                <!-- <div class="form-group">
                                    <label class="col-sm-3 control-label">Checkbox</label>
                                    <div class="col-sm-6">
                                    <div class="checkbox">
                                    <label>
                                    <input type="checkbox" required name="terms">
                                    Accept Terms &amp; Conditions
                                    </label>
                                        </div>
                                        </div>
                                        </div> -->
                                
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="reviews">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h2>Clientes</h2>
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
<script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script> <!-- Touchspin -->
<script src="assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="assets/demo/demo-datatables.js"></script>

<script>
    $(function () {
        $("input.touchspin").TouchSpin({
            verticalbuttons: true
        });
    });
</script>


