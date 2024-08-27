<?php require_once ("page_up.php") ?>


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

                                <form action="" class="form-horizontal tabular-form">
                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-2">Codigo_Activo</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2 ">Descripcion</label>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2 ">Numero de
                                            Modelo</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-2">Pin/Serial</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2">Año de
                                            Fabricacion</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2">Modelo</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-2">Motor</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2">Cilindrada</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2">Potencia</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-2">Peso
                                            Maquina</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2">Capacidad</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2">Maxima
                                            Elevacion</label>
                                        <div class="col-md-2 ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-2">Llantas
                                            Delanteras</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2">Llantas
                                            traseras</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2">Baterias</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-2">Largo</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2">Ancho</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-2">Alto</label>
                                        <div class="col-md-1 ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <!-- FECHA DESDE HASTA FUNCIONAL EN CONTRATACION
                                                        <div class="form-group">
                                                        <label for="" class="control-label col-sm-2">AvailableDate</label>
                                                        <div class="col-sm-8 tabular-border">
                                                            <div class="input-daterange input-group"
                                                                id="datepicker-range">
                                                                <input type="text" class="input-small form-control"
                                                                    name="start" />
                                                                <span class="input-group-addon">to</span>
                                                                <input type="text" class="input-small form-control"
                                                                    name="end" />
                                                            </div>
                                                        </div>
                                                    </div> -->
                                    <div class="form-group">
                                        <label for="" class="control-label col-sm-2">Observaciones</label>
                                        <div class="col-sm-6 ">
                                            <input type="text" class="form-control">
                                        </div>
                                        <label for="" class="control-label col-sm-1">Horometro</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Image Upload
                                            Widgets</label>
                                        <div class="col-sm-5">
                                            <div class="fileinput fileinput-new" style="width: 100%;"
                                                data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail mb20" data-trigger="fileinput"
                                                    style="width: 100%; height: 150px;"></div>
                                                <div>
                                                    <a href="#" class="btn btn-default fileinput-exists"
                                                        data-dismiss="fileinput">Remove</a>
                                                    <span class="btn btn-default btn-file"><span
                                                            class="fileinput-new">Select
                                                            image</span><span
                                                            class="fileinput-exists">Change</span><input type="file"
                                                            name="..."></span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="alert alert-info">Image preview only works in
                                                IE10+, FF3.6+,
                                                Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers
                                                the filename is
                                                shown instead.</div>
                                        </div>
                                        <div class="panel-footer ml0 mb0 mr0">
                                            <div class="pull-right">

                                                <button class="btn btn-success"><i class="fa fa-check"></i>
                                                    Guardar</button>

                                            </div>
                                        </div>




                                    </div>

                                </form>
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


<?php require_once ("load-scripts.php") ?>;

<?php require_once ("page_down.php") ?>