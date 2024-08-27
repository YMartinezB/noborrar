<?php require_once('page_up.php') ?>


<div class="static-content">
    <div class="page-content">
        <div class="page-heading mb0">
            <h1>Gestion de Inventario</h1>
        </div>
        <div class="page-tabs">
            <ul class="nav nav-tabs">

                <li class="active"><a data-toggle="tab" href="#details">Registro</a></li>

                <li><a data-toggle="tab" href="#reviews">Consultar</a></li>

            </ul>
        </div>
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane active" id="details">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="tab-pane active" id="details">

                                <form action="" class="form-horizontal tabular-form">
                                    <div class="form-group">
                                        <label class="control-label col-md-1">Codigo Activo</label>
                                        <div class="col-md-1">                                                                                      
                                            <select class="form-control" id="source">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>                                               
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                </optgroup>
                                            </select>                                            
                                        </div>
                                        <label class="control-label col-md-1">Tipo</label>
                                        <div class="col-md-1">                                           
                                            <select name="" id="" class="form-control">
                                                <option value="">Vehiculo</option>
                                                <option value="">Maquina</option>
                                                <option value="">Otro</option>
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1">Descripción</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                        </div>

                                        <label class="control-label col-md-1">Pin / Serial</label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control">
                                        </div>                                   
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-1">Marca</label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control">
                                        </div>

                                        <label class="control-label col-sm-1">Modelo</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-1">Año de Fabricacion</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-1">Motor</label>
                                        <div class="col-md-3 ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">                                       
                                        <label class="control-label col-sm-1">Cilindrada</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-1">Potencia</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-1">Voltaje</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-1">Capacidad</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">                                       
                                        <label class="control-label col-sm-1">Maxima Elevacion</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-2">Llantas Delanteras</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-2">Llantas traseras</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-2">Peso Maquina</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-1">Largo</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-1">Ancho</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-1">Alto</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label class="control-label col-sm-1">Baterias</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                                                    
                                    <div class="form-group">
                                        <label class="control-label col-sm-1">Observaciones</label>
                                        <div class="col-sm-8 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-1">Horometro</label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control">
                                        </div>                                                             
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-1">Orugas</label>
                                        <div class="col-md-2">                                           
                                            <select name="" id="" class="form-control">
                                                <option value="">Instalado</option>
                                                <option value="">N/A</option>                            
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1">Cabina</label>
                                        <div class="col-md-2">                                           
                                            <select name="" id="" class="form-control">
                                                <option value="">Instalado</option>
                                                <option value="">N/A</option>                            
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1">Luces</label>
                                        <div class="col-md-2">                                           
                                            <select name="" id="" class="form-control">
                                                <option value="">Instalado</option>
                                                <option value="">N/A</option>
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1">Pito</label>
                                        <div class="col-md-2">                                           
                                            <select name="" id="" class="form-control">
                                                <option value="">Instalado</option>
                                                <option value="">N/A</option>
                                            </select>
                                        </div>
                                                                                                       
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-1">Asiento del conductor</label>
                                        <div class="col-md-2">                                           
                                            <select name="" id="" class="form-control">
                                                <option value="">Instalado</option>
                                                <option value="">N/A</option>   
                                            </select>
                                        </div>   
                                        <label class="control-label col-md-1">Estado de pintura</label>
                                        <div class="col-md-2">                                           
                                            <select name="" id="" class="form-control">
                                                <option value="">Instalado</option>
                                                <option value="">N/A</option>
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1">LLantas</label>
                                        <div class="col-md-2">                                           
                                            <select name="" id="" class="form-control">
                                                <option value="">Instalado</option>
                                                <option value="">N/A</option>
                                            </select>
                                        </div>
                                        <label class="control-label col-md-1">Baterias</label>
                                        <div class="col-md-2">                                           
                                            <select name="" id="" class="form-control">
                                                <option value="">Instalado</option>
                                                <option value="">N/A</option>
                                            </select>
                                        </div>
                                                                                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"> <!-- aceites -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h2>Filtros</h2>                                              
                                                </div>
                                                <div class="panel-body">				
                                                    <table class="table mb0">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipo</th>
                                                                <th>Codigo/Ref</th>
                                                                <th>Marca</th>
                                                                <th>Estado</th> 
                                                                                                                            
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="hidden">Aire Externo</td>
                                                                <td><input type="text"></td>
                                                                <td><input type="text"></td>
                                                                <td>
                                                                    <select name="" id="">
                                                                        <option value="">Instalado</option>
                                                                        <option value="">N/A</option>                                
                                                                    </select>
                                                                </td>     
                                                            </tr> 
                                                            <tr>
                                                                <td><input type="hidden">Aire Interno</td>
                                                                <td><input type="text"></td>
                                                                <td><input type="text"></td>
                                                                <td>
                                                                    <select name="" id="">
                                                                        <option value="">Instalado</option>
                                                                        <option value="">N/A</option>                                
                                                                    </select>
                                                                </td>      
                                                            </tr> 
                                                            <tr>
                                                                <td><input type="hidden">Combustible primario</td>
                                                                <td><input type="text"></td>
                                                                <td><input type="text"></td>
                                                                <td>
                                                                    <select name="" id="">
                                                                        <option value="">Instalado</option>
                                                                        <option value="">N/A</option>                                
                                                                    </select>
                                                                </td>      
                                                            </tr> 
                                                            <tr>
                                                                <td><input type="hidden">Combustible Secundario</td>
                                                                <td><input type="text"></td>
                                                                <td><input type="text"></td>
                                                                <td>
                                                                    <select name="" id="">
                                                                        <option value="">Instalado</option>
                                                                        <option value="">N/A</option>                                
                                                                    </select>
                                                                </td>      
                                                            </tr> 
                                                            <tr>
                                                                <td><input type="hidden">Aceite hidraulico</td>
                                                                <td><input type="text"></td>
                                                                <td><input type="text"></td>
                                                                <td>
                                                                    <select name="" id="">
                                                                        <option value="">Instalado</option>
                                                                        <option value="">N/A</option>                                
                                                                    </select>
                                                                </td>      
                                                            </tr> 
                                                            <tr>
                                                                <td><input type="hidden">Aceite motor</td>
                                                                <td><input type="text"></td>
                                                                <td><input type="text"></td>
                                                                <td>
                                                                    <select name="" id="">
                                                                        <option value="">Instalado</option>
                                                                        <option value="">N/A</option>                                
                                                                    </select>
                                                                </td>      
                                                            </tr>                                                       
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> <!-- filtros -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h2>Aceites</h2>                                              
                                                </div>
                                                <div class="panel-body">				
                                                    <table class="table mb0">
                                                        <thead>
                                                            <tr>
                                                                <th>Tipo</th>
                                                                <th>Referencia</th>
                                                                <th>Cantidad</th>                                     
                                                                                                                           
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="hidden">Hidraulico</td>
                                                                <td><input type="text"></td>                                                               
                                                                <td><input type="number"></td>     
                                                            </tr> 
                                                            <tr>
                                                                <td><input type="hidden">Motor</td>
                                                                <td><input type="text"></td>                                                                
                                                                <td><input type="number"></td>     
                                                            </tr>
                                                            <tr>
                                                                <td><input type="hidden">Transmision</td>
                                                                <td><input type="text"></td>                                                                
                                                                <td><input type="number"></td>     
                                                            </tr>                                                      
                                                        </tbody>
                                                    </table>
                                                    



                                                </div>
                                                
                                            </div>
                                            <ul class="demo-btns">
                                                <li><a class="btn btn-lg btn-success-alt btn-label" href="#"><i class="fa fa-save"></i> Guardar</a></li>                 
                                            </ul>
                                        </div>
                                    </div>
                                     
                                                                                                                                                                                                                                                                                         
                                                                                                                                                                                                                         
                                </form>
                                
                                
                            </div>
                            
                        </div>                      
                    </div>
                </div>

                <div class="tab-pane" id="reviews">   <!-- CONSULTAR -->
                    <div class="panel">
                        <div class="panel-body panel-no-padding">
                            <br>
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h2>Activos</h2>
                                        <div class="panel-ctrls">
                                        </div>
                                    </div>
                                    <div class="panel-body panel-no-padding">
                                        <table id="example" class="table table-striped table-bordered" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No Registro</th>
                                                    <th>Fecha de registro</th>
                                                    <th>Codigo Activo</th>
                                                    <th>Descripcion</th>
                                                    <th>Tipo</th>                                               
                                                    <th>Estado</th>
                                                    <th>Accion</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>1</td>
                                                    <td>02/07/2024</td>
                                                    <td>B-005</td>
                                                    <td class="center">BULLDOZER XD3 </td>
                                                    <td class="center">Maquina</td> 
                                                    <td class="center">Disponible</td>                                                     
                                                    <td>
                                                        <button> Ver</button>
                                                    </td>
                                                    
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>2</td>
                                                    <td>02/07/2024</td>
                                                    <td>B-005</td>
                                                    <td class="center">EXCAVADORA RT56D</td>
                                                    <td class="center">Maquina</td>  
                                                    <td class="center">Disponible</td>                                                  
                                                    <td>
                                                        <button> Ver</button>
                                                    </td>
                                                       
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>3</td>
                                                    <td>22/07/2024</td>
                                                    <td>B-005</td>
                                                    <td class="center">BULLDOZER YT45E</td>
                                                    <td class="center">Vehiculo</td> 
                                                    <td class="center">En uso</td>                                                   
                                                    <td>
                                                        <button> Ver</button>
                                                    </td>
                                                     
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>4</td>
                                                    <td>12/07/2024</td>
                                                    <td>B-005</td>
                                                    <td class="center">SIDEBOOM RYF3453E</td>
                                                    <td class="center">Otro</td>     
                                                    <td class="center">Mantenimiento</td>                                               
                                                    <td>
                                                        <button> Ver</button>
                                                    </td>
                                                      
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>5</td>
                                                    <td>02/01/2024</td>
                                                    <td>B-023</td>
                                                    <td class="center">GENERADOR ELECTRICO</td>
                                                    <td class="center">Maquina</td>  
                                                    <td class="center">En Uso</td>                                                  
                                                    <td>
                                                        <button> Ver</button>
                                                    </td>
                                                     
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>6</td>
                                                    <td>02/07/2024</td>
                                                    <td>B-005</td>
                                                    <td class="center">GRUA TR3TW35</td>
                                                    <td class="center">Maquina</td>    
                                                    <td class="center">Disponible</td>                                                
                                                    <td>
                                                        <button> Ver</button>
                                                    </td>
                                                      
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>7</td>
                                                    <td>02/05/2024</td>
                                                    <td>B-009</td>
                                                    <td class="center">MOTO 2353</td>
                                                    <td class="center">Vehiculo</td>
                                                    <td class="center">Disponible</td>
                                                    <td>
                                                        <button> Ver</button>
                                                    </td>
                                                      
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>8</td>
                                                    <td>02/08/2024</td>
                                                    <td>B-008</td>
                                                    <td class="center">CAMIONETA RT45</td>
                                                    <td class="center">Vehiculo</td>
                                                    <td class="center">Disponible</td>                                                   
                                                    <td>
                                                        <button> Ver</button>
                                                    </td>
                                                      
                                                </tr>








                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
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

<script src="assets/demo/demo-formcomponents.js"></script>



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
