
<!-- 
CLIENTE:
CONTRATO No: 00001
DIRECCION OBRA: Carrera 2 # 19 – 62 El Rodadero, Santa Marta.
RESPONSABLE
DOCUMENTO
SERVICIO
VALOR CONTRATO:
TERMINO DE USO DEL EQUIPO EN DIAS (  )
PRORROGA
NOVEDADES
FACTURA
FORMA DE PAGO   :     PARCIAL      TOTAL
CERTIFICACION BANCARIA
OPERADOR ASIGNADO
TIPO DE TRANSPORTE  -->

<?php require_once ('page_up.php') ?>



<div class="static-content">
    <div class="page-content">
        <div class="page-heading mb0">
            <h1>Gestion de Inventario</h1>
            <div class="options">
                <div class="btn-toolbar">
                    <a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
                </div>
            </div>
        </div>
        <div class="page-tabs">
            <ul class="nav nav-tabs">

                <li class="active"><a data-toggle="tab" href="#details">Registro</a></li>

                <li><a data-toggle="tab" href="#reviews">Consultar</a></li>

                <li><a data-toggle="tab" href="#history">Disponibilidad</a></li>

            </ul>
        </div>
        <div class="container-fluid">


            <div class="tab-content">
                <div class="tab-pane active" id="details">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="tab-pane active" id="details">

                            <div class="panel panel-default">
								<div class="panel-heading">
									<h2>CONTRATO DE ARRENDAMIENTO</h2>
								</div>
								<div class="panel-body">
									<form class="grid-form">
										<fieldset>
											<legend>SCREWDRIVER</legend>
											<div data-row-span="1">
												<div data-field-span="1">
													<label>ClIENTE</label>
													<select name="" id="">
                                                        <option value="">ADM Y ASOCIADOS</option>
                                                        <option value="">METALURGICA LOS CAS</option>
                                                        <option value="">ASPOFAR SA</option>
                                                        <option value="">TRACART ASOCIADOS</option>
                                                    </select>
												</div>
											</div>
										</fieldset>

										<br><br>

										<fieldset>
											<legend>Datos Personales</legend>

											<div data-row-span="4">
												<div data-field-span="1">
													<label>Responsable/Arrendatario</label>
													<label><input type="radio" name="customer-title[]"> Sr.</label>
													&nbsp;
													<label><input type="radio" name="customer-title[]"> Sra.</label>
													&nbsp;
													<label><input type="radio" name="customer-title[]"> Sr(es).</label>
												</div>
												<div data-field-span="3">
													<label>Nombre Completo</label>
													<input type="text">
												</div>
											</div>
											<div data-row-span="2">
												<div data-field-span="1">
													<label>DNI</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Lugar de Expedicion</label>
													<select>
                                                    <option value="Barranquilla" title="Barranquilla">Barranquilla</option>
                                                    <option value="Bogotá" title="Bogotá">Bogotá</option>
                                                    <option value="Bucaramanga" title="Bucaramanga">Bucaramanga</option>
                                                    <option value="Cali" title="Cali">Cali</option>
                                                    <option value="Cartagena" title="Cartagena">Cartagena</option>
                                                    <option value="Cúcuta" title="Cúcuta">Cúcuta</option>
                                                    <option value="Ibagué" title="Ibagué">Ibagué</option>
                                                    <option value="Manizales" title="Manizales">Manizales</option>
                                                    <option value="Medellín" title="Medellín">Medellín</option>
                                                    <option value="Pereira" title="Pereira">Pereira</option>
                                                    <option value="Santa Marta" title="Santa Marta">Santa Marta</option>
                                                    <option value="Villavicencio" title="Villavicencio">Villavicencio</option>																																									
													</select>
												</div>
											</div>
											<div data-row-span="4">
												<div data-field-span="2"
													data-field-error="Please enter a valid email address">
													<label>E-mail</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Celular</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Existing Bank Account No. (if any)</label>
													<input type="text">
												</div>
											</div>
											<div data-row-span="2">
												<div data-field-span="1">
													<label>In case of a minor please provide details (Name of parent and
														natural guardian)</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Name of father/spouse</label>
													<input type="text">
												</div>
											</div>

											<br>
											<fieldset>
												<legend>Residential address</legend>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>Flat no. and bldg. name</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Road no./name</label>
														<input type="text">
													</div>
												</div>
												<div data-row-span="4">
													<div data-field-span="3">
														<label>Area and landmark</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>City</label>
														<input type="text">
													</div>
												</div>
												<div data-row-span="4">
													<div data-field-span="1">
														<label>Telephone Residence</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Office</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Fax</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Pin code</label>
														<input type="text">
													</div>
												</div>
											</fieldset>
										</fieldset>
										<br>

										<fieldset>
											<legend>Mailing Address (If different from the First Accountholder's
												address)</legend>
											<div data-row-span="1">
												<div data-field-span="1">
													<label>Company name and department/ Flat no. and bldg. name</label>
													<input type="text">
												</div>
											</div>
											<div data-row-span="4">
												<div data-field-span="1">
													<label>Road no./name</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Area and landmark</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>City</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Pin Code</label>
													<input type="text">
												</div>
											</div>
											<div data-row-span="4">
												<div data-field-span="1">
													<label>Telephone Residence</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Office</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Fax</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Mobile No.</label>
													<input type="text">
												</div>
											</div>
											<div data-row-span="1">
												<div data-field-span="1">
													<label>E-mail</label>
													<input type="text">
												</div>
											</div>
										</fieldset>

										<br><br>

										<fieldset>
											<legend>Details of Introduction by Existing Customer (If applicable)
											</legend>
											<div data-row-span="2">
												<div data-field-span="1">
													<label>Customer Name</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Account No.</label>
													<input type="text">
												</div>
											</div>
											<div data-row-span="1">
												<div data-field-span="1">
													<label>Introducer's signature</label>
													<textarea></textarea>
												</div>
											</div>
										</fieldset>

										<br><br>

										<fieldset>
											<legend>Account Details</legend>
											<div data-row-span="2">
												<div data-field-span="1">
													<label>Choice of account</label>
													<label><input type="checkbox"> Savings</label> &nbsp;
													<label><input type="checkbox"> Current</label> &nbsp;
													<label><input type="checkbox"> Fixed deposits</label>
												</div>
												<div data-field-span="1">
													<label>Mode of funding</label>
													<label><input type="checkbox"> Cash</label> &nbsp;
													<label><input type="checkbox"> Cheque</label> &nbsp;
													<label><input type="checkbox"> NEFT</label>
												</div>
											</div>
											<div data-row-span="1">
												<div data-field-span="1">
													<label>Amount</label>
													<input type="text">
												</div>
											</div>
											<br>
											<fieldset>
												<legend>Details of Fixed Deposit</legend>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>Types of deposit</label>
														<label><input type="checkbox"> Ordinary</label> &nbsp;
														<label><input type="checkbox"> Cumulative</label>
													</div>
													<div data-field-span="1">
														<label>Mode of funding</label>
														<label><input type="checkbox"> Cash</label> &nbsp;
														<label><input type="checkbox"> Cheque</label> &nbsp;
														<label><input type="checkbox"> NEFT</label>
													</div>
												</div>
												<div data-row-span="4">
													<div data-field-span="2">
														<label>Amount</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>No. of deposits</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Individual Deposit Amount</label>
														<input type="text">
													</div>
												</div>
											</fieldset>
										</fieldset>

										<br><br>
										<fieldset>
											<legend>Personal Details</legend>
											<div data-row-span="1">
												<div data-field-span="1">
													<label>Occupation</label>
													<label><input type="checkbox"> Non-executive</label> &nbsp;
													<label><input type="checkbox"> Housewife</label> &nbsp;
													<label><input type="checkbox"> Retired</label> &nbsp;
													<label><input type="checkbox"> Student</label> &nbsp;
													<label><input type="checkbox"> Other</label> &nbsp;
													<label><input type="checkbox"> Unemployed</label>
												</div>
											</div>
											<div data-row-span="1">
												<div data-field-span="1">
													<label>Job Title</label>
													<input type="text">
												</div>
											</div>
											<div data-row-span="2">
												<div data-field-span="1">
													<label>Department</label>
													<input type="text">
												</div>
												<div data-field-span="1">
													<label>Nature of business</label>
													<input type="text">
												</div>
											</div>
											<div data-row-span="2">
												<div data-field-span="1">
													<label>Education</label>
													<label><input type="checkbox"> Under graduate</label> &nbsp;
													<label><input type="checkbox"> Graduate</label> &nbsp;
													<label><input type="checkbox"> Others</label>
												</div>
												<div data-field-span="1">
													<label>Monthly Income</label>
													<label><input type="checkbox"> Zero Income</label> &nbsp;
													<label><input type="checkbox"> Less than $10,000</label> &nbsp;
													<label><input type="checkbox"> $10,000+</label>
												</div>
											</div>
											<div data-row-span="2">
												<div data-field-span="1">
													<label>Maritial Status</label>
													<label><input type="checkbox"> Married</label> &nbsp;
													<label><input type="checkbox"> Single</label>
												</div>
												<div data-field-span="1">
													<label>Spouse name</label>
													<input type="text">
												</div>
											</div>
											<br>
											<fieldset>
												<legend>Other existing bank accounts, if any</legend>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>Name of the Bank / branch</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Name of the Bank / branch</label>
														<input type="text">
													</div>
												</div>
											</fieldset>
										</fieldset>
										<br><br>
										<fieldset>
											<legend>Reason for Account opening</legend>
											<div data-row-span="2">
												<div data-field-span="1">
													<label>Please specify</label>
													<input type="text">
												</div>
											</div>
										</fieldset>
										<br><br>
										<fieldset>
											<legend>Terms And Conditions</legend>
											<div data-row-span="1">
												<div data-field-span="1">
													<label></label>
													<label><input type="checkbox"> I/We confirm having read and
														understood the account rules of The Banking Corporation Limited
														('the Bank'), and hereby agree to be bound by the terms and
														conditions and amendments governing the account(s) issued by the
														Bank from time-to-time.</label>
												</div>
											</div>
										</fieldset>
										<div class="clearfix pt20">
											<div class="pull-right">
												<button class="btn-primary btn">Submit Form</button>
												<button class="btn-default btn">Cancel</button>
											</div>
										</div>
									</form>
								</div>
							</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="reviews">
                    <div class="panel">
                        <div class="panel-body panel-no-padding">
                            <div class="col-md-12">
                                <form class="navbar-form navbar-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-default">Buscar por
                                        codigo</button>
                                </form>
                                <form class="navbar-form navbar-left" role="Buscar">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Buscar">
                                    </div>
                                    <button type="submit" class="btn btn-default">Buscar por
                                        Descripcion</button>
                                </form>
                            </div>
                            <table class="table table-striped table-hover">

                                <thead>
                                    <tr>
                                        <th>Codigo_Activo</th>
                                        <th>Fecha de Registro</th>
                                        <th>Descripcion</th>
                                        <th>Pin/Serial</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B-001</td>
                                        <td>29/02/2014 04:12:31 PM</td>
                                        <td>BULLDOZER 8DR B001</td>
                                        <td>8DR9385XD1</td>
                                        <td>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-mail-forward"></i>
                                                Ver</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-print"></i>
                                                Imprimir</button>
                                            <button class="btn btn-default btn-xs"><i class="fa fa-pen"></i>
                                                Editar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="history">
                    <div class="panel">
                        <div class="col-md-12">
                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">Buscar por codigo</button>
                            </form>
                            <form class="navbar-form navbar-left" role="Buscar">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Buscar">
                                </div>
                                <button type="submit" class="btn btn-default">Buscar por
                                    Descripcion</button>
                            </form>
                        </div>


                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="panel panel-default">

                                        <div class="panel-body panel-no-padding">
                                            <table id="example" class="table table-striped" cellspacing="0"
                                                width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Codigo_activo</th>
                                                        <th>Fecha_registro</th>
                                                        <th>Activo</th>
                                                        <th>Marca</th>
                                                        <th>Serial</th>
                                                        <th>Precio dia</th>
                                                        <th>Estado</th>
                                                        <th style="text-align: right;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>B-001</td>
                                                        <td>19/08/2014</td>
                                                        <td>Bulldozer6dr xl</td>
                                                        <td>Caterpillar</td>
                                                        <td>X4FEZCGE22</td>
                                                        <td>$1200.000</td>
                                                        <td><span class="label label-danger">MANTENIMIENTO</span>
                                                        </td>
                                                        <td style="text-align: right;">
                                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>B-001</td>
                                                        <td>19/08/2014</td>
                                                        <td>Bulldozer6dr xl</td>
                                                        <td>Caterpillar</td>
                                                        <td>X4FEZCGE22</td>
                                                        <td>$1200.000</td>
                                                        <td><span class="label label-info">DISPONIBLE</span>
                                                        </td>
                                                        <td style="text-align: right;">
                                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>B-001</td>
                                                        <td>19/08/2014</td>
                                                        <td>Bulldozer6dr xl</td>
                                                        <td>Caterpillar</td>
                                                        <td>X4FEZCGE22</td>
                                                        <td>$1200.000</td>
                                                        <td><span class="label label-warning">EN
                                                                USO</span></td>
                                                        <td style="text-align: right;">
                                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>B-001</td>
                                                        <td>19/08/2014</td>
                                                        <td>Bulldozer6dr xl</td>
                                                        <td>Caterpillar</td>
                                                        <td>X4FEZCGE22</td>
                                                        <td>$1200.000</td>
                                                        <td><span class="label label-danger">MANTENIMIENTO</span>
                                                        </td>
                                                        <td style="text-align: right;">
                                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>B-001</td>
                                                        <td>19/08/2014</td>
                                                        <td>Bulldozer6dr xl</td>
                                                        <td>Caterpillar</td>
                                                        <td>X4FEZCGE22</td>
                                                        <td>$1200.000</td>
                                                        <td><span class="label label-info">DISPONIBLE</span>
                                                        </td>
                                                        <td style="text-align: right;">
                                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>B-001</td>
                                                        <td>19/08/2014</td>
                                                        <td>Bulldozer6dr xl</td>
                                                        <td>Caterpillar</td>
                                                        <td>X4FEZCGE22</td>
                                                        <td>$1200.000</td>
                                                        <td><span class="label label-warning">EN
                                                                USO</span></td>
                                                        <td style="text-align: right;">
                                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>B-001</td>
                                                        <td>19/08/2014</td>
                                                        <td>Bulldozer6dr xl</td>
                                                        <td>Caterpillar</td>
                                                        <td>X4FEZCGE22</td>
                                                        <td>$1200.000</td>
                                                        <td><span class="label label-danger">MANTENIMIENTO</span>
                                                        </td>
                                                        <td style="text-align: right;">
                                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>B-001</td>
                                                        <td>19/08/2014</td>
                                                        <td>Bulldozer6dr xl</td>
                                                        <td>Caterpillar</td>
                                                        <td>X4FEZCGE22</td>
                                                        <td>$1200.000</td>
                                                        <td><span class="label label-info">DISPONIBLE</span>
                                                        </td>
                                                        <td style="text-align: right;">
                                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>B-001</td>
                                                        <td>19/08/2014</td>
                                                        <td>Bulldozer6dr xl</td>
                                                        <td>Caterpillar</td>
                                                        <td>X4FEZCGE22</td>
                                                        <td>$1200.000</td>
                                                        <td><span class="label label-warning">EN
                                                                USO</span></td>
                                                        <td style="text-align: right;">
                                                            <a href="#" class="btn btn-default btn-xs">View</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div> <!-- .container-fluid -->
                    </div>
                </div>

                <footer role="contentinfo">
                    <div class="clearfix">
                        <ul class="list-unstyled list-inline pull-left">
                            <li>
                                <h6 style="margin: 0;"> &copy; 2014 Avalon</h6>
                            </li>
                        </ul>
                        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i
                                class="fa fa-arrow-up"></i></button>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>






<script src="assets/plugins/gridforms/gridforms/gridforms.js"></script> <!-- Gridforms -->

<?php require_once ("page_down.php") ?>