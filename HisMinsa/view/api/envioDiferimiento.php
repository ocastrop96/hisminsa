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
<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "8243",
  CURLOPT_URL => "https://apimanager.minsa.gob.pe:8243/token",
  CURLOPT_POST => 1,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_ENCODING => "",
  // CURLOPT_MAXREDIRS => 10,
  // CURLOPT_TIMEOUT => 30,
  // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  // CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "username=user_heves&password=user_heves&grant_type=password",
  CURLOPT_HTTPHEADER => array(
    // "Accept: */*",
    // "Accept-Encoding: gzip, deflate",
    "Authorization: Basic U1VvbEZrbklsRGJHX1FKZ2tHOV90Y1JLZnFZYTp5RmVGSW5vZ1FNXzkwQ1Q4cThDMXhqaEdrOGNh",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    // "Content-Length: 61",
    "Content-Type: application/x-www-form-urlencoded",
    "Host: apimanager.minsa.gob.pe:8243",
    "cache-control: no-cache"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $dtos = json_decode($response);
  // echo   $dtos->{"access_token"};
}
?>
<body style="background-color: #fafafa;">
  <div class="elemento-padre" id="hijo">
    <div class="elemento-hijo">
      Cargando...
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="row" style="padding: 5px; border-top: 1px dashed #BAD8F4; border-bottom: 1px dashed #BAD8F4; border-left: 1px dashed #BAD8F4; border-right: 1px dashed #BAD8F4; background-color: #E0EFF5;">
        
        <div class="col-md-6" style="font-size: 50px; color: #1565c0; text-align: left;">
          <img src="assets/img/logo_ficha.png" width="300px;  height:75px;">
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-2">
          <select id="tipo-envio" name="tipo-envio" class="selectpicker form-control" title="&nbsp;">
            <option value="1" selected="selected">Desarrollo</option>
            <option value="2">Producción</option>
          </select>
        </div>
      </div> <br>
      <div class="row" style="padding: 5px; border-top: 1px dashed #BAD8F4; border-bottom: 1px dashed #BAD8F4; border-left: 1px dashed #BAD8F4; border-right: 1px dashed #BAD8F4; background-color: #E0EFF5; display: none">
        <br>
        <div class="col-md-10">
          <p id="datosEmpleado" name="datosEmpleado"></p>
        </div>
      </div><br />
      <div class="row">
        <div class="col-md-1" id="col-form-referencia-apoyo-diagnostico-no" style="">
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
        <div class="col-md-1">
          
          <div class="form-group">
              <a href="?c=api&a=tiempoEspera" target="_blank">
                  <button type="button" class="btn btn-danger" style="background-color:#0e1658; background-color: #0e1658;border-top: 1px dashed #0e1658; border-bottom: 1px dashed #0e1658; border-left: 1px dashed #0e1658; border-right: 1px dashed #0e1658;">
                      <i class="icon ion-md-list-box"></i> &nbsp;&nbsp;Enviar tiempo espera&nbsp;&nbsp;
                  </button>
              </a>
          </div>
        </div>
        <input type="hidden" name="valor-token" id="valor-token" value="<?php echo $dtos->{'access_token'} ?>">
      </div>
      <div class="row" style="padding: 5px; border-top: 1px dashed #BAD8F4; border-bottom: 1px dashed #BAD8F4; border-left: 1px dashed #BAD8F4; border-right: 1px dashed #BAD8F4; background-color: #E0EFF5;">
        <br>
        <div style="border: 0px solid black;font-size: 20px; color: #337ab7">
           <center><b>DIFERIMIENTO DE CONSULTORIOS EXTERNOS MEDICOS Y POR SERVICIOS</b></center></div>
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

      <div class="scrolltable" style="border: 0.5px solid #e0e0e0;">
        <div style="border-top: 1px solid #e0e0e0; border-bottom: 1px solid #e0e0e0; border-left: 1px solid #e0e0e0; border-right: 1px solid #e0e0e0; width: 100%!important">

          <table id="lista-tabla" class="table table-responsive table-striped results" style="background-color: #fff; width: 100% !important">
            <thead>
              <tr>
                <th>
                  <center>N°</center>
                  <!-- 0 -->
                </th>
                <th>
                  <center>Cuenta</center>
                  <!-- 1 -->
                </th>
                <th style="display: none">
                  <center>id_cita</center>
                  <!-- 2 -->
                </th>
                <th style="display: none">
                  <center>seguro_sis</center>
                  <!-- 3 -->
                </th>
                <th style="display: none">
                  <center>tipo</center>
                  <!-- 4 -->
                </th>
                <th>
                  <center>N°Documento</center>
                  <!-- 5 -->
                </th>
                <th>
                  <center>Nombre y apellidos</center>
                  <!-- 6 -->
                </th>
                <th>
                  <center>Atención</center>
                  <!-- 7 -->
                </th>
                <th style="display: none">
                  <center>nombres</center>
                  <!-- 8 -->
                </th>
                <th style="display: none">
                  <center>apellido_paterno</center>
                  <!-- 9 -->
                </th>
                <th style="display: none">
                  <center>apellido_materno</center>
                  <!-- 10 -->
                </th>
                <th style="display: none">
                  <center>departamento_id</center>
                  <!-- 11 -->
                </th>
                <th style="display: none">
                  <center>provincia_id</center>
                  <!-- 12 -->
                </th>
                <th style="display: none">
                  <center>distrito_id</center>
                  <!-- 13 -->
                </th>
                <th>
                  <center>inicio</center>
                  <!-- 14 -->
                </th>
                <th>
                  <center>fin</center>
                  <!-- 15 -->
                </th>
                <th>
                  <center>Codigo </center>
                  <!-- 16 -->
                </th>
                <th>
                  <center>Mensaje</center>
                  <!-- 17 -->
                </th>
                <th></th>
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
      <div>
      </div>
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
<div id="footer" style="  background-color: #E0EFF5;">
  <div class="container" style="  background-color: #E0EFF5;">
    <div class="footer-block" style=" margin:0px 0px;background-color: #E0EFF5;">
      <div class="row" style=" color: #1565c0;">
        <div class="col-xs-6">
          <span id="footer-datos-empleado"></span>
        </div>
      </div>
    </div>
  </div>
</div>



<input type="hidden" id="tipo-busquea" value="0">
<script>
  var idempl = "";
  $(document).ready(function() {
    $('#hijo').hide();
    $(".fakeloader").fakeLoader({
      timeToHide: 100,
      bgColor: "#f0f0f0",
      imagePath: "assets/precarga/logo.png",
      spinner: "spinner1"
    });
    var ffin = $('#ffin').val();
    var fini = $('#fini').val();
    fechasBuscar(fini, ffin);
    $("#categoria-busqueda").on("change", function() {
      if($(this).val() == 1) {
        $(".avance").show();
      } else {
        $(".avance").hide();
      }
      fechasBuscar($("#fini").val(), $("#ffin").val()); 
    });
    $("#fini").change(function() {
      $("#procesar").prop("disabled", true);
      var FechaIn = $("#fini").val();
      var FechaFi = $("#ffin").val();
      var DateIn = new Date(FechaIn);
      var DateFi = new Date(FechaFi);
      var Res = DateIn - DateFi;
      if (Res > 0) {
        swal("SELECCIONE UNA FECHA MENOR A LA FECHA FIN", "", "error")
        $("#fini").val(FechaFi);
      }
    });
    $("#ffin").change(function() {
      $("#procesar").prop("disabled", true);
      var FechaIn = $("#fini").val();
      var FechaFi = $("#ffin").val();
      var DateIn = new Date(FechaIn);
      var DateFi = new Date(FechaFi);
      var Res = DateIn - DateFi;
      if (Res > 0) {
        swal("SELECCIONE UNA FECHA MAYOR A LA FECHA INICIO", "", "error")
        $("#ffin").val(FechaIn);
      }
    });

  });
function fechasBuscar(fini, ffin) {
  $("#procesados").val("0");
    $("#faltante").val("0");
    $("#registrados").val("0");
    $("#observados").val("0");
    $("#nombre-acutla").val("");
    $("#dynamic")
      .css("width", "0%")
      .attr("aria-valuenow", 0)
      .text("0% Complete");

    $("#lista-tabla  tbody tr").remove();
    var cnt = 0;
    $("#procesar").prop("disabled", false);
    $.ajax({
      data: {
        ffin: ffin,
        fini: fini,
        tipoEnvio : $("#tipo-envio").val(),
        categoria: $("#categoria-busqueda").val(),
      },
      url: '?c=api&a=ListarFechasDiferiencia',
      type: 'POST',
      dataType: 'json',
      beforeSend: function() {
        $('#hijo').show();
      },
      success: function(r) {
        $(r).each(function(i, v) {
          cnt ++;
          var dts = '';
          var editar = '<button type="button" class="btn btn-warning btn-enviar-indicador" title="Enviar indicador" style=" padding: 3px 6px;"  onclick="enviarUno(\'' + cnt + '\');" data-toggle="tooltip" data-placement="top"><i style="font-size: 1.2em;" class="ion ion-md-send"></i></button>';
          var ver = '<button type="button" class="btn btn-warning btn-enviar-indicador" title="Enviar indicador" style=" padding: 3px 6px;"  onclick="verDatos(\'' + cnt + '\');" data-toggle="tooltip" data-placement="top"><i style="font-size: 1.2em;" class="ion ion-md-eye"></i></button>';
          dts +='<tr style="font-size: 10px">';
            dts +='<td >'+cnt+'</td>'; //0
            dts +='<td>'+v.IdCuentaAtencion+'</td>'; //1
            dts +='<td style="display: none">'+v.IdCita+'</td>';// 2
            dts +='<td style="display: none">'+v.sis+'</td>';//3
            dts +='<td style="display: none">'+v.IdDocIdentidad+'</td>';// 4
            dts +='<td>'+v.NroDocumento+'</td>';//5
            dts +='<td>'+v.nombres+' '+v.ApellidoPaterno+' '+v.ApellidoMaterno+'</td>';//6
            dts +='<td>'+v.DESCRIPCION+'</td>';//7
            dts +='<td style="display: none">'+v.nombres+'</td>';//8
            dts +='<td style="display: none">'+v.ApellidoPaterno+'</td>';//9
            dts +='<td style="display: none">'+v.ApellidoMaterno+'</td>'; //10
            dts +='<td style="display: none">'+v.idDep+'</td>';//11
            dts +='<td style="display: none">'+v.idprovVerdadero+'</td>';// 12
            dts +='<td style="display: none">'+v.idDistritoVerdadero+'</td>';// 13
            dts +='<td>'+v.FECHASOLICITUD+'</td>';//14
            dts +='<td>'+v.Fecha_programada+'</td>'; // 15
            dts +='<td>'+(v.codigo_resp == null ? '':v.codigo_resp) +'</td>'; // 16
            dts +='<td>'+(v.mensaje_resp == null ? '':v.mensaje_resp) +'</td>'; // 17
            dts +='<td>'+editar+' '+ver+'</td>';  //18
            dts +='<td style="display: none">'+v.distrito+'</td>';  //19
            dts +='<td style="display: none">'+v.provincia+'</td>';  //20
            dts +='<td style="display: none">'+v.departamente+'</td>';  //21
            dts +='<td style="display: none">'+v.DireccionDomicilio+'</td>';  //22
            dts +='<td style="display: none">'+v.nombreDocumento+'</td>';  //23
          dts +='</tr>';
          $("#lista-tabla tbody").append(dts);
        });
      $("#total").val(cnt);
      $("#faltante").val(cnt);
      },
      complete: function() {
        $('#hijo').hide();
        $(".search").val("");
      },
      error: function() {}
    });
}
function enviar() {
  var total = $("#total").val();
  var cnt = 0;
  var faltante = total;
  var obs = 0;
  var registrados  = 0;
  var porcentaje = 0;
  var dialog = swal("¿Está seguro que desea enviar los datos?", {
      buttons: {
        cancel: "Cancelar",
        si: "Si"
      }
    }).then(value => {
      switch (value) {
        case "si":
          $("#procesar").prop("disabled", true);
          $("#buscar").prop("disabled", true);
          var totaltt = $("#total").val();
          $("#lista-tabla tbody tr").each(function() {
            // var valor = total /100;
            var tr = $(this).closest('tr');
            var tds = tr.children('td');
            var idCuenta = $(this).closest('tr').children('td').eq(1).text();
            cnt++;
            faltante--;
            $("#procesados").val(cnt);
            $("#faltante").val(faltante);
            $("#nombre-acutla").val($(this).closest('tr').children('td').eq(6).text());
            var cod = $(this).closest('tr').children('td').eq(16).text();
            if(cod != "0000") {
                $.ajax({
                  data: {
                    id_referencia: $(this).closest('tr').children('td').eq(1).text(),
                    id_cita: $(this).closest('tr').children('td').eq(2).text(),
                    tipo: 1, // 1= diferimiento; 2=tiempo de espera
                    //paciente
                    seguro_sis: $(this).closest('tr').children('td').eq(3).text(),
                    //documento
                    tipoDoc: $(this).closest('tr').children('td').eq(4).text(),
                    numero: $(this).closest('tr').children('td').eq(5).text(),
                    //nombre 
                    prenombres: $(this).closest('tr').children('td').eq(8).text().replace("'", "\\'"),
                    apellido_paterno: $(this).closest('tr').children('td').eq(9).text(),
                    apellido_materno: $(this).closest('tr').children('td').eq(10).text(),
                    //ubigeo_domicilio
                    departamento_id: $(this).closest('tr').children('td').eq(11).text(),
                    provincia_id: $(this).closest('tr').children('td').eq(12).text(),
                    distrito_id: $(this).closest('tr').children('td').eq(13).text(),
                    // registro
                    inicio: $(this).closest('tr').children('td').eq(14).text(),
                    fin: $(this).closest('tr').children('td').eq(15).text(),
                    categoria: $("#categoria-busqueda").val(),
                    token: $("#valor-token").val(),
                    tipoEnvio : $("#tipo-envio").val(),
                  },
                  url: "?c=api&a=EnviarCita",
                  type: "POST",
                  dataType: "json",
                  success: function (r) {
                    $(r).each(function (i, v) {
                      tds.eq(17).text(v.mensaje);
                      tds.eq(16).text(v.codRes);
                      if(v.codRes != "0000") {
                        obs++;
                        $("#observados").val(obs);
                        tr.css('background','#F9CFCF');
                      } else {
                        registrados++;
                        $("#registrados").val(registrados);
                        tr.css('background','#DCF9CF');
                      }
                    });
                  },
                  complete: function(r){
                    
                  },
                  error: function () {
                    tds.eq(17).text("ERROR AL INSERTAR LOS DATOS ");
                  }
                });
            }
            porcentaje = (cnt/totaltt).toFixed(0);
            porcentaje = porcentaje*100;
            $("#dynamic")
              .css("width", porcentaje + "%")
              .attr("aria-valuenow", porcentaje)
              .text(porcentaje + "% Complete");
          });
          totaltt--;
          $("#buscar").prop("disabled", false);
          break;
      }
    });  
}

function enviarUno(fila) {
  var dialog = swal("¿Está seguro que desea enviar este información?", {
      buttons: {
        cancel: "Cancelar",
        si: "Si"
      }
    }).then(value => {
      switch (value) {
        case "si":
          $("#lista-tabla tbody tr").each(function(){
            var tr = $(this).closest('tr');
            var tds = $(this).closest('tr').children('td');
            if(  fila == parseInt($(this).closest('tr').children('td').eq(0).text())) {
              var obs = $("#observados").val();
              var registrados = $("#registrados").val();
              var procesados = $("#procesados").val();
              var faltantes = $("#faltante").val();
              var total = $("#total").val();
              var porcentaje = 0;
              $("#nombre-acutla").val($(this).closest('tr').children('td').eq(6).text());
              var cod = $(this).closest('tr').children('td').eq(16).text();
              if(cod != "0000") {
                  $.ajax({
                    data: {
                      id_referencia: $(this).closest('tr').children('td').eq(1).text(),
                      id_cita: $(this).closest('tr').children('td').eq(2).text(),
                      tipo: 1, // 1= diferimiento; 2=tiempo de espera
                      //paciente
                      seguro_sis: $(this).closest('tr').children('td').eq(3).text(),
                      //documento
                      tipoDoc: $(this).closest('tr').children('td').eq(4).text(),
                      numero: $(this).closest('tr').children('td').eq(5).text(),
                      //nombre 
                      prenombres: $(this).closest('tr').children('td').eq(8).text(),
                      apellido_paterno: $(this).closest('tr').children('td').eq(9).text(),
                      apellido_materno: $(this).closest('tr').children('td').eq(10).text(),
                      //ubigeo_domicilio
                      departamento_id: $(this).closest('tr').children('td').eq(11).text(),
                      provincia_id: $(this).closest('tr').children('td').eq(12).text(),
                      distrito_id: $(this).closest('tr').children('td').eq(13).text(),
                      // registro
                      inicio: $(this).closest('tr').children('td').eq(14).text(),
                      fin: $(this).closest('tr').children('td').eq(15).text(),
                      categoria: $("#categoria-busqueda").val(),
                      token: $("#valor-token").val(),
                      tipoEnvio : $("#tipo-envio").val(),
                    },
                    url: "?c=api&a=EnviarCita",
                    type: "POST",
                    dataType: "json",
                    success: function (r) {
                      $(r).each(function (i, v) {
                        tds.eq(17).text(v.mensaje);
                        tds.eq(16).text(v.codRes);
                        if(v.codRes != "0000") {
                          obs++;
                          $("#observados").val(obs);
                          tr.css('background','#F9CFCF');
                        } else {
                          registrados++;
                          $("#registrados").val(registrados);
                          tr.css('background','#DCF9CF');
                        }
                      });
                    },
                    complete: function(r){
                      
                    },
                    error: function () {
                      tds.eq(17).text("ERROR AL INSERTAR LOS DATOS ");
                    }
                  });
                  if(cod == "") {
                    procesados++;
                    faltantes--;
                    $("#procesados").val(procesados);
                    $("#faltante").val(faltantes);
                    porcentaje = (procesados/total).toFixed(0);
                    var p = procesados/total;
                    porcentaje = p*100;
                    $("#dynamic")
                      .css("width", porcentaje + "%")
                      .attr("aria-valuenow", porcentaje)
                      .text(porcentaje + "% Complete");
                  } 
              } else {
                swal("Mensaje", "El indicador ya fue enviado con exito anteriormente", "warning");
              }
            } 
          });
          break;
      }
    }); 
}

function verDatos(fila) {
  var datos = ""; 
  $("#lista-tabla tbody tr").each(function(){
    var tr = $(this).closest('tr');
    var tds = $(this).closest('tr').children('td');
    if(tds.eq(0).text() == fila) { 
      datos = '<tr><td>Tipo: </td><td>1</td></tr>';
      datos += '<tr><td>Referencia: </td><td>'+tds.eq(1).text()+'</td></tr>';
      datos += '<tr><td>Cita: </td><td>'+tds.eq(2).text()+'</td></tr>';
      datos += '<tr><td>Tipo documento</td><td>'+tds.eq(23).text()+'-'+tds.eq(4).text()+'</td></tr>';
      datos += '<tr><td>N° documento</td><td>'+tds.eq(5).text()+'</td></tr>';
      datos += '<tr><td>Nombres</td><td>'+tds.eq(8).text()+'</td></tr>';
      datos += '<tr><td>Apellidos</td><td>'+tds.eq(9).text()+' '+tds.eq(10).text()+'</td></tr>';  
      datos += '<tr><td>Atención</td><td>'+tds.eq(7).text()+'-'+tds.eq(3).text()+'</td></tr>';
      datos += '<tr><td>Fecha inicio</td><td>'+tds.eq(14).text()+'</td></tr>';  
      datos += '<tr><td>Fecha final</td><td>'+tds.eq(15).text()+'</td></tr>';  
      datos += '<tr><td>Domicilio</td><td>'+tds.eq(22).text()+'</td></tr>';  
      datos += '<tr><td>Departamento</td><td>'+tds.eq(21).text()+'-'+tds.eq(11).text()+'</td></tr>';
      datos += '<tr><td>Provincia</td><td>'+tds.eq(20).text()+'-'+tds.eq(12).text()+'</td></tr>';
      datos += '<tr><td>Distrito</td><td>'+tds.eq(19).text()+'-'+tds.eq(13).text()+'</td></tr>';
    }
  });
  $("#lista-enviar").html(datos);
  $("#modalPdf").modal({show: true,  Backdrop: 'static'});
}
</script>

</html>