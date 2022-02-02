<html>

<head>
  <title>SIS Galen</title>
  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/recursos/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link href='assets/form/custom.css' rel='stylesheet' type='text/css'>
  <link href="assets/precarga/css/fakeLoader.css" rel="stylesheet">

  <script src="assets/recursos/jquery-1.12.0.min.js"></script>
  <script src="assets/recursos/bootstrap.min.js"></script>
  <script src="assets/form/validator.js"></script>
  <script src="assets/form/contact.js"></script>
  <script src="assets/precarga/js/fakeLoader.min.js"></script>
  <script src="assets/recursos/bootstrap3-typeahead.min.js"></script>
  <script src="assets/recursos/bootbox.min.js"></script>
  <link rel="stylesheet" href="assets/css/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/bootstrap-select/bootstrap-select.min.css">
  <script src="assets/bootstrap-select/bootstrap-select.min.js"></script>
  <link rel="stylesheet" href="assets/css/fixed-footer.css" />
  <script src="assets/sweetalert/sweetalert.min.js"></script>

  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
  <link rel="stylesheet" href="assets/bootstrap-select/bootstrap-select.min.css">
  <!-- <link rel="stylesheet" href="assets/styles.css"> -->
  <link rel="stylesheet" href="assets/theme_google_fluid1.css">
  <link rel="stylesheet" href="assets/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/introjs/introjs.min.css" />
  <link rel="stylesheet" href="assets/introjs/template.css" />

  <style type="text/css">
    .modal-header {
      border: 0;
      padding: 0;
      position: relative;
    }

    .modal-header .close {
      margin: 0;
      position: absolute;
      top: 0px;
      right: -40px;
      width: 28px;
      height: 28px;
      border-radius: 28px;
      background-color: #B71C1C;
      color: #f1f1f1;
      font-size: 14px !important;
      opacity: 1;
      z-index: 10;
      /* text-shadow: none; */
    }

    .results tr[visible='false'],
    .no-result {
      display: none;
    }

    .results tr[visible='true'] {
      display: table-row;
    }

    .counter {
      padding: 8px;
      color: #bbb;
    }

    .scrolltable {
      max-height: 600px;
      overflow-y: scroll;
    }

    .elemento-padre {
      display: flex;
      width: 100vw;
      height: 100vh;
      justify-content: center;
      align-items: center;
      background: #fff;
      z-index: 100;
      position: absolute;
      opacity: 0.8;
    }

    .elemento-hijo {
      display: flex;
      width: 100px;
      height: 100px;
      /* background: #999; */
    }

    /*estilo checkbox*/
    .funkyradio div {
      clear: both;
      overflow: hidden;
    }

    .funkyradio label {
      width: 100%;
      border-radius: 3px;
      border: 1px solid #D1D3D4;
      font-weight: normal;
    }

    .funkyradio input[type="radio"]:empty,
    .funkyradio input[type="checkbox"]:empty {
      display: none;
    }

    .funkyradio input[type="radio"]:empty~label,
    .funkyradio input[type="checkbox"]:empty~label {
      position: relative;
      line-height: 2.5em;
      text-indent: 3.25em;
      /*margin-top: 2em;*/
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .funkyradio input[type="radio"]:empty~label:before,
    .funkyradio input[type="checkbox"]:empty~label:before {
      position: absolute;
      display: block;
      top: 0;
      bottom: 0;
      left: 0;
      content: '';
      width: 2.5em;
      background: #D1D3D4;
      border-radius: 3px 0 0 3px;
    }

    .funkyradio input[type="radio"]:hover:not(:checked)~label,
    .funkyradio input[type="checkbox"]:hover:not(:checked)~label {
      color: #888;
    }

    .funkyradio input[type="radio"]:hover:not(:checked)~label:before,
    .funkyradio input[type="checkbox"]:hover:not(:checked)~label:before {
      content: '\2714';
      text-indent: .9em;
      color: #C2C2C2;
    }

    .funkyradio input[type="radio"]:checked~label,
    .funkyradio input[type="checkbox"]:checked~label {
      color: #777;
    }

    .funkyradio input[type="radio"]:checked~label:before,
    .funkyradio input[type="checkbox"]:checked~label:before {
      content: '\2714';
      text-indent: .9em;
      color: #333;
      background-color: #ccc;
    }

    .funkyradio input[type="radio"]:focus~label:before,
    .funkyradio input[type="checkbox"]:focus~label:before {
      box-shadow: 0 0 0 3px #999;
    }

    .funkyradio-default input[type="radio"]:checked~label:before,
    .funkyradio-default input[type="checkbox"]:checked~label:before {
      color: #333;
      background-color: #ccc;
    }

    .funkyradio-primary input[type="radio"]:checked~label:before,
    .funkyradio-primary input[type="checkbox"]:checked~label:before {
      color: #fff;
      background-color: #337ab7;
    }

    .funkyradio-success input[type="radio"]:checked~label:before,
    .funkyradio-success input[type="checkbox"]:checked~label:before {
      color: #fff;
      background-color: #5cb85c;
    }

    .funkyradio-danger input[type="radio"]:checked~label:before,
    .funkyradio-danger input[type="checkbox"]:checked~label:before {
      color: #fff;
      background-color: #d9534f;
    }

    .funkyradio-warning input[type="radio"]:checked~label:before,
    .funkyradio-warning input[type="checkbox"]:checked~label:before {
      color: #fff;
      background-color: #f0ad4e;
    }

    .funkyradio-info input[type="radio"]:checked~label:before,
    .funkyradio-info input[type="checkbox"]:checked~label:before {
      color: #fff;
      background-color: #5bc0de;
    }

    .table-hover tbody tr:hover td,
    .table-hover tbody tr:hover th {
      background-color: #FFFFC0;
    }

    #modalHistorial {
      width: 65% !important;
      height: 400px;
    }
  </style>

  <script>
    $(document).ready(function() {

      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
</head>

<body style="background-color: #fafafa;">
  <div class="elemento-padre" id="hijo">
    <div class="elemento-hijo">
      Cargando...
    </div>
  </div>
  <div class="container" style="padding-top: 10px; width: 80%!important">
    <div class="panel panel-success">
      <div class="panel-heading">
        <!-- <div class="col-md-6" style="font-size: 50px; color: #1565c0; text-align: left;"> -->
          <img src="assets/img/logo_ficha.png" width="300px;  height:75px;">
        <!-- </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-2">
          <select id="tipo-envio" name="tipo-envio" class="selectpicker form-control" title="&nbsp;">
            <option value="1" selected="selected">Desarrollo</option>
            <option value="2">Producción</option>
          </select>
        </div> -->
      </div>
      <div class="panel-heading">
        <div class="row">
          <div class="col-md-1" id="col-form-referencia-apoyo-diagnostico-no">
            <div class="form-group">
              <p style="font-size:15px; text-align: right;color: #337ab7"><b>Vista: </b></p>
            </div>
          </div>
          <div class="col-md-2" id="col-form-referencia-apoyo-diagnostico-no" >
            <select id="categoria-busqueda" name="categoria-busqueda" class="selectpicker form-control" title="&nbsp;">
              <option value="1" selected="selected">Sin enviar</option>
              <option value="2">Enviados</option>
            </select>
          </div>
          
          <div class="col-md-1" style="float: right;">
            
          </div>
          <div class="col-md-1" id="col-form-referencia-apoyo-diagnostico-no" style="">
            <div class="form-group">
              <p style="font-size:15px; text-align: right;color: #337ab7"><b>Fecha: </b></p>
            </div>
          </div>
          <div class="col-md-2" id="col-form-referencia-apoyo-diagnostico-no" style="">
            <div class="form-group">
              <input type="date" id="fini" name="fini" step="1" value="<?php date_default_timezone_set('America/Lima');
                                                                        echo  date('Y-m-d'); ?>" class="form-control bloquear fecha-actual">
            </div>
          </div>
          <div class="col-md-2" id="col-form-referencia-apoyo-diagnostico-no" style="">
            <div class="form-group">
              <input type="date" id="ffin" name="ffin" value="<?php date_default_timezone_set('America/Lima');
                                                              echo date('Y-m-d'); ?>" class="form-control bloquear fecha-actual">
            </div>
          </div>
          
          <div class="col-md-2" id="col-form-referencia-apoyo-diagnostico-no" >
            <button type="submit" id="buscar" name="buscar" onclick="fechasBuscar($('#fini').val(), $('#ffin').val());" onchange="cambioFecha();" class="btn btn-primary">Cargar</button>
          </div>
          <div class="col-md-1" style="display: none;">
            <button type="button" class="btn btn-danger" id="exportar" name="exportar" onclick="exportaExcelFechas($('#fini').val(),$('#ffin').val(), $('.search').val(), $('#tipo-busquea').val(),$('#categoria-busqueda').val())"><i class="icon ion-md-download" style="font-size: 16px; color: #fff;"></i> Exportar Excel</button>
          </div>
          <!-- <div class="col-md-1">
            
            <div class="form-group">
                <a href="?c=api&a=principal" target="_blank">
                    <button type="button" class="btn btn-danger" style="background-color:#0e1658; background-color: #0e1658;border-top: 1px dashed #0e1658; border-bottom: 1px dashed #0e1658; border-left: 1px dashed #0e1658; border-right: 1px dashed #0e1658;">
                        <i class="icon ion-md-list-box"></i> &nbsp;&nbsp;Enviar tiempo espera&nbsp;&nbsp;
                    </button>
                </a>
            </div>
          </div> -->
          <input type="hidden" name="valor-token" id="valor-token" value="<?php echo $dtos->{'access_token'} ?>">
        </div>
      </div>
      <div class="panel-heading"><div class="row" style="padding: 5px;">
        <br>
        <div style="border: 0px solid black;font-size: 20px; color: #337ab7">
           <center><b>ENVIO DE CONSULTAS EXTERNAS</b></center></div>
        <div class="col-md-10 avance">
          <table>
            <tr>
              <td><p style="font-size:15px; text-align: right;margin: 20px; color: #337ab7"><b>Actual: </b></td>
              <td colspan="9"><input type="text" id="nombre-acutla" class="form-control" disabled></td>
            </tr>
            <tr>
              <td></td>
              <td colspan="9">
                <div class="progress">
                  <div id="dynamic" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    <span id="current-progress"></span>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <td style="width: 10%; font-size: 20px"><p style="font-size:15px; text-align: right;margin: 20px; color: #337ab7"><b>Procesados: </b> </td>
              <td style="width: 5%; font-size: 20px"> <input type="text" id="procesados" class="form-control" disabled value="0"> </td>
              <td style="width: 10%; font-size: 20px"><p style="font-size:15px; text-align: right;margin: 20px; color: #337ab7"><b>Falantes: </b> </td>
              <td style="width: 5%; font-size: 20px"> <input type="text" id="faltante" class="form-control" disabled  value="0"> </td>
              <td style="width: 10%; font-size: 20px"><p style="font-size:15px; text-align: right;margin: 20px; color: #337ab7"><b>Registrados: </b> </td>
              <td style="width: 5%; font-size: 20px"> <input type="text" id="registrados" class="form-control" disabled value="0"></td>
              <td style="width: 10%; font-size: 20px"><p style="font-size:15px; text-align: right;margin: 20px; color: #337ab7"><b>Observados: </b> </td>
              <td style="width: 5%; font-size: 20px"> <input type="text" id="observados" class="form-control" disabled  value="0"></td>
              <td style="width: 10%; font-size: 20px"><p style="font-size:15px; text-align: right;margin: 20px; color: #337ab7"><b>Total: </b> </td>
              <td style="width: 5%; font-size: 20px"> <input type="text" id="total" class="form-control" disabled  value="0"></td>
            </tr>
          </table>            
        </div>
        <div class="col-md-2 avance" style="text-align: right; margin-top: -6px;">
          <table>
            <tr>
              <td style="margin: 10px; padding: 5px">
                  <button type="button" id="procesar" name="procesar" onclick="enviar();" class="btn btn-primary">Procesar</button>
              </td>
            </tr>
            <tr>
              <td style="margin: 10px; padding: 5px">
                  
              </td>
            </tr>
          </table>          
        </div>  
      </div>
    </div>
      <div class="panel-body">
        <table id="lista-tabla" class="table table-responsive table-striped results" style="background-color: #fff; width: 100% !important">
            <thead>
              <tr>
                <th>
                  <center>N°</center>
                  <!-- 0 -->
                </th>
                <!-- DATOS REGISTRA -->
                <th style="display: none">
                  <center>pr_nrodocumento</center>
                  <!-- 1 -->
                </th>
                <th style="display: none">
                  <center>pr_apematerno</center>
                  <!-- 2 -->
                </th>
                <th style="display: none">
                  <center>pr_idpais</center>
                  <!-- 3 -->
                </th>
                <th style="display: none">
                  <center>pr_idprofesion</center>
                  <!-- 4 -->
                </th>
                <th style="display: none">
                  <center>pr_fechanacimiento</center>
                  <!-- 5 -->
                </th>
                <th style="display: none">
                  <center>pr_nombres</center>
                  <!-- 6 -->
                </th>
                <th style="display: none">
                  <center>pr_idtipodoc</center>
                  <!-- 7 -->
                </th>
                <th style="display: none">
                  <center>pr_apepaterno</center>
                  <!-- 8 -->
                </th>
                <th style="display: none">
                  <center>pr_idsexo</center>
                  <!-- 9 -->
                </th>
                <th style="display: none">
                  <center>pr_idcondicion</center>
                  <!-- 10 -->
                </th>
                <!-- DATOS ATIENDE -->
                <th style="display: none">
                  <center>pat_nrodocumento</center>
                  <!-- 11 -->
                </th>
                <th style="display: none">
                  <center>pat_apematerno</center>
                  <!-- 12 -->
                </th>
                <th style="display: none">
                  <center>pat_idpais</center>
                  <!-- 13 -->
                </th>
                <th style="display: none">
                  <center>pat_idprofesion</center>
                  <!-- 14 -->
                </th>
                <th style="display: none">
                  <center>pat_fechanacimiento</center>
                  <!-- 15 -->
                </th>
                <th style="display: none">
                  <center>pat_nombres </center>
                  <!-- 16 -->
                </th>
                <th style="display: none">
                  <center>pat_idtipodoc</center>
                  <!-- 17 -->
                </th>
                <th style="display: none">
                  <center>pat_apepaterno</center>
                  <!-- 18 -->
                </th>
                <th style="display: none">
                  <center>pat_idsexo</center>
                  <!-- 19 -->
                </th>
                <th style="display: none">
                  <center>pat_idcondicion</center>
                  <!-- 20 -->
                </th>
          <!-- DATOS PACIEWNTE -->
                <th style="display: none">
                  <center>pa_nrodocumento</center>
                  <!-- 21 -->
                </th>
                <th style="display: none">
                  <center>pa_apematerno</center>
                  <!-- 22 -->
                </th>
                <th style="display: none">
                  <center>pa_idflag</center>
                  <!-- 23 -->
                </th>
                <th style="display: none">
                  <center>pa_nombres</center>
                  <!-- 24 -->
                </th>
                <th style="display: none">
                  <center>pa_nrohistoriaclinica</center>
                  <!-- 25 -->
                </th>
                <th style="display: none">
                  <center>pa_idtipodoc</center>
                  <!-- 26 -->
                </th>
                <th style="display: none">
                  <center>pa_apepaterno</center>
                  <!-- 27 -->
                </th>
                <th style="display: none">
                  <center>pa_idetnia</center>
                  <!-- 28 -->
                </th>
                <th style="display: none">
                  <center>pa_fechanacimiento</center>
                  <!-- 29 -->
                </th>
                <th style="display: none">
                  <center>pa_idestablecimiento</center>
                  <!-- 30 -->
                </th>
                <th style="display: none">
                  <center>pa_idpais</center>
                  <!-- 31 -->
                </th>
                <th style="display: none">
                  <center>pa_idsexo</center>
                  <!-- 32 -->
                </th>
                <!-- DATOS CITA -->
                <th>
                  <center>numeroafiliacion</center>
                  <!-- 33 -->
                </th>
                <th style="display: none">
                  <center>fechaatencion</center>
                  <!-- 34 -->
                </th>
                <th style="display: none">
                  <center>estadoregistro</center>
                  <!-- 35 -->
                </th>
                <th style="display: none">
                  <center>idups</center>
                  <!-- 36 -->
                </th>
                <th style="display: none">
                  <center>idestablecimiento</center>
                  <!-- 37 -->
                </th>
                <th style="display: none">
                  <center>diaedad</center>
                  <!-- 38 -->
                </th>
                <th style="display: none">
                  <center>edadregistro</center>
                  <!-- 39 -->
                </th>
                <th style="display: none">
                  <center>idturno</center>
                  <!-- 40 -->
                </th>
                <th style="display: none">
                  <center>idtipedadregistro</center>
                  <!-- 41 -->
                </th>
                <th style="display: none">
                  <center>fgdiag</center>
                  <!-- 42 -->
                </th>
                <th style="display: none">
                  <center>mesedad</center>
                  <!-- 43 -->
                </th>
                <th style="display: none">
                  <center>componente</center>
                  <!-- 44 -->
                </th>
                <th style="display: none">
                  <center>idfinanciador</center>
                  <!-- 45 -->
                </th>
                <th style="display: none">
                  <center>annioedad</center>
                  <!-- 46 -->
                </th>
                <!-- examenfisico -->
                <th style="display: none">
                  <center>peso</center>
                  <!-- 47 -->
                </th>
                <th style="display: none">
                  <center>talla</center>
                  <!-- 48 -->
                </th>
                <th style="display: none">
                  <center>hemoglobina</center>
                  <!-- 49 -->
                </th>
                <th style="">
                  <center>IdCuentaAtención</center>
                  <!-- 50 -->
                </th>
                <th style="display: none">
                  <center>idAtencion</center>
                  <!-- 51 -->
                </th>
                <th>
                  <center>Fecha atención</center>
                  <!-- 52 -->
                </th>
                <th>
                  <center>Tipo documento</center>
                  <!-- 53 -->
                </th>
                <th>
                  <center>Documento</center>
                  <!-- 54 -->
                </th>
                <th>
                  <center>Paciente</center>
                  <!-- 55 -->
                </th>
                <th>
                  <center>Sexo</center>
                  <!-- 56 -->
                </th>
                <th>
                  <center>Estado Rsta</center>
                  <!-- 57 -->
                </th>
                <th>
                  <center>idCita Rsta</center>
                  <!-- 58 -->
                </th>
                <th>
                  <center>Descripción</center>
                  <!-- 59 -->
                </th>
                <th>
                  <center>Fecha envio</center>
                  <!-- 60 -->
                </th>
              </tr>
            </thead>
            <tbody style="font-size: 16px; ">
              <tr class="warning no-result">
                <td colspan="10" style="text-align: center; font-size: 14px;">No se encontraron coincidencias</td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
  <div style="display: none">
    <div>
      <button id="ubigeo">UBIGEO</button>
    </div>
    <div >
      <table id="tabla-paciente" border="1">
        <thead>
          <th>n°</th>
          <th>dni</th>
          <th>ubigeo</th>
          <th>ubigeo</th>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
  <div class="modal fade bs-example-modal-lg" id="modalPdf" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md">
      <div class="modal-content" style="height: auto;">
        <div class="modal-header" style="margin: auto;padding: auto;height: 40px">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
            <center><h1>Datos paciente</h1></center>
        </div>
        <div class="modal-body">
          <div id="datos-enviar">
            <table id="lista-enviar" class="table table-responsive table-striped results" style="background-color: #fff; width: 100% !important">
              <tbody>
                   
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<div id="footer" style="  background-color: #F5F5BF;">
  <div class="container" style="  background-color: #F5F5BF;">
    <div class="footer-block" style=" margin:0px 0px;background-color: #F5F5BF;">
      <div class="row" style=" color: #1565c0;">
        <div class="col-xs-6">
          <span id="footer-datos-empleado"></span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 
  dni
  direccion
  
-->

<input type="hidden" id="tipo-busquea" value="0">
<script src="view/api/principal.js"></script>

</html>