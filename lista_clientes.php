<?php require_once ("conectar.php");

$registrosClientes = mysqli_query($conn, "SELECT * FROM clientes");

require_once ("page_up.php"); ?>

<!-- CONTENEDOR TABLA CONSULTA DE CLIENTES -->
<!-- <div class="row">  
                <div class="panel panel-midnightblue">

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding-right:100px">Nombre</th>
                                        <th style="padding-right:100px">Razon Social</th>
                                        <th>Correo Electronico</th>
                                        <th>Telefono</th>
                                        <th>Direccion</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    while ($reg = mysqli_fetch_array($registrosClientes)) {
                                        echo ("<tr>");
                                        echo ("<td align='left'><i>$reg[nombre]</i></td>");
                                        echo ("<td align='left'><i>$reg[razon_social]</i></td>");
                                        echo ("<td align='left'><i>$reg[email]</i></td>");
                                        echo ("<td align='left'><i>$reg[telefono]</i></td>");
                                        echo ("<td align='left'><i>$reg[direccion]</i></td>");
                                        echo ("</tr>");
                                    }

                                    ?>
                                </tbody>
                                <caption>Listado de clientes </caption>
                            </table>













                        </div>








                    </div>
                </div>
            </div> -->
<!-- </div> -->

<div class="page-content">
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default" id="panel-inline">
                    <div class="panel-heading">
                        <h2>Inline Data Tables editing</h2>
                        <div class="panel-ctrls">
                            
                            <i class="separator"></i>
                            
                        </div>
                    </div>
                    <div class="panel-body panel-no-padding">

                        <div id="editable_wrapper" class="dataTables_wrapper form-inline no-footer">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <table cellpadding="0" cellspacing="0" border="0"
                                class="table table-striped table-bordered datatables dataTable no-footer" id="editable"
                                role="grid" aria-describedby="editable_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="editable" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column ascending"
                                            style="width: 166.333px;">Rendering engine</th>
                                        <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending"
                                            style="width: 239.333px;">
                                            Browser</th>
                                        <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 214.333px;">Platform(s)</th>
                                        <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending"
                                            style="width: 141.333px;">Engine version</th>
                                        <th class="sorting" tabindex="0" aria-controls="editable" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                            style="width: 98px;">CSS
                                            grade</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="gradeA odd" role="row">
                                        <td data-edit-event="click.textEditor" class="sorting_1">Gecko</td>
                                        <td data-edit-event="click.textEditor">Firefox 1.0</td>
                                        <td data-edit-event="click.textEditor">Win 98+ / OSX.2+</td>
                                        <td class="center" data-edit-event="click.textEditor">1.7</td>
                                        <td class="center" data-edit-event="click.textEditor">A</td>
                                    </tr>
                                    <tr class="gradeA even" role="row">
                                        <td data-edit-event="click.textEditor" class="sorting_1">Gecko</td>
                                        <td data-edit-event="click.textEditor">Firefox 1.5</td>
                                        <td data-edit-event="click.textEditor">Win 98+ / OSX.2+</td>
                                        <td class="center" data-edit-event="click.textEditor">1.8</td>
                                        <td class="center" data-edit-event="click.textEditor">A</td>
                                    </tr>
                                    <tr class="gradeA odd" role="row">
                                        <td data-edit-event="click.textEditor" class="sorting_1">Gecko</td>
                                        <td data-edit-event="click.textEditor">Firefox 2.0</td>
                                        <td data-edit-event="click.textEditor">Win 98+ / OSX.2+</td>
                                        <td class="center" data-edit-event="click.textEditor">1.8</td>
                                        <td class="center" data-edit-event="click.textEditor">A</td>
                                    </tr>
                                    <tr class="gradeA even" role="row">
                                        <td data-edit-event="click.textEditor" class="sorting_1">Gecko</td>
                                        <td data-edit-event="click.textEditor">Firefox 3.0</td>
                                        <td data-edit-event="click.textEditor">Win 2k+ / OSX.3+</td>
                                        <td class="center" data-edit-event="click.textEditor">1.9</td>
                                        <td class="center" data-edit-event="click.textEditor">A</td>
                                    </tr>
                                    <tr class="gradeA odd" role="row">
                                        <td data-edit-event="click.textEditor" class="sorting_1">Gecko</td>
                                        <td data-edit-event="click.textEditor">Camino 1.0</td>
                                        <td data-edit-event="click.textEditor">OSX.2+</td>
                                        <td class="center" data-edit-event="click.textEditor">1.8</td>
                                        <td class="center" data-edit-event="click.textEditor">A</td>
                                    </tr>
                                    <tr class="gradeA even" role="row">
                                        <td data-edit-event="click.textEditor" class="sorting_1">Gecko</td>
                                        <td data-edit-event="click.textEditor">Camino 1.5</td>
                                        <td data-edit-event="click.textEditor">OSX.3+</td>
                                        <td class="center" data-edit-event="click.textEditor">1.8</td>
                                        <td class="center" data-edit-event="click.textEditor">A</td>
                                    </tr>
                                    <tr class="gradeA odd" role="row">
                                        <td data-edit-event="click.textEditor" class="sorting_1">Gecko</td>
                                        <td data-edit-event="click.textEditor">Netscape 7.2</td>
                                        <td data-edit-event="click.textEditor">Win 95+ / Mac OS 8.6-9.2</td>
                                        <td class="center" data-edit-event="click.textEditor">1.7</td>
                                        <td class="center" data-edit-event="click.textEditor">A</td>
                                    </tr>
                                    <tr class="gradeA even" role="row">
                                        <td data-edit-event="click.textEditor" class="sorting_1">Gecko</td>
                                        <td data-edit-event="click.textEditor">Netscape Browser 8</td>
                                        <td data-edit-event="click.textEditor">Win 98SE+</td>
                                        <td class="center" data-edit-event="click.textEditor">1.7</td>
                                        <td class="center" data-edit-event="click.textEditor">A</td>
                                    </tr>
                                    <tr class="gradeA odd" role="row">
                                        <td data-edit-event="click.textEditor" class="sorting_1">Gecko</td>
                                        <td data-edit-event="click.textEditor">Netscape Navigator 9</td>
                                        <td data-edit-event="click.textEditor">Win 98+ / OSX.2+</td>
                                        <td class="center" data-edit-event="click.textEditor">1.8</td>
                                        <td class="center" data-edit-event="click.textEditor">A</td>
                                    </tr>
                                    <tr class="gradeA even" role="row">
                                        <td data-edit-event="click.textEditor" class="sorting_1">Gecko</td>
                                        <td data-edit-event="click.textEditor">Mozilla 1.0</td>
                                        <td data-edit-event="click.textEditor">Win 95+ / OSX.1+</td>
                                        <td class="center" data-edit-event="click.textEditor">1</td>
                                        <td class="center" data-edit-event="click.textEditor">A</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--end table-->
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dataTables_info" id="editable_info" role="status" aria-live="polite">
                                        </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="dataTables_paginate paging_bootstrap" id="editable_paginate">
                                        <ul class="pagination pull-right">
                                            <li class="previous disabled"><a href="#">Previous</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li class="next"><a href="#">Next</a></li>
                                        </ul>
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