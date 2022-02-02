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

  // $ch = curl_init("http://www.example.com/reallybigfile.tar.gz");
  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  // curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
  // $output = curl_exec($ch);

  // $fh = fopen("out.tar.gz", 'w');
  // fwrite($fh, $output);
  // fclose($fh);
/*$ch = curl_init();
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Return data inplace of echoing on screen
  curl_setopt($ch, CURLOPT_URL, $strURL);
   // Skip SSL Verification
  $rsData = curl_exec($ch);
  curl_close($ch);
  return $rsData;*/


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_PORT => "8243",
  /*curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);*/
  CURLOPT_URL => "https://dapimanager.minsa.gob.pe:8243/token",
  /*curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);*/
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_SSL_VERIFYHOST => false,
  /*curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);*/
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "username=duser_heves&password=duser_heves&grant_type=password",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Basic UFhWSW9CUlR3Xzl5Z2hyMmY3RzFYd3UzNlBnYTpoRm1yUUxUcDhrNEVKRG5TekFvOUhaeXBXdzRh",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 61",
    "Content-Type: application/x-www-form-urlencoded",
    "Host: dapimanager.minsa.gob.pe:8243",
    /*"Postman-Token: 2c734403-8e56-4ac4-870e-c0c1f35380ff,a6f9a332-f18e-43d5-8af9-577a831031b7",*/
    /*"User-Agent: PostmanRuntime/7.16.3",*/
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  // echo $response;
  $dtos = json_decode($response);
  // echo "<br>access_token: ".$dtos->{'access_token'};
  // echo "<br>refresh_token: ".$dtos->{'refresh_token'};
  // echo "<br>scope: ".$dtos->{'scope'};
  // echo "<br>token_type: ".$dtos->{'token_type'};
  // echo "<br>expires_in: ".$dtos->{'expires_in'};
  // // foreach (json_encode($response, true) as $d){
  //  echo $d["access_token"];
  //  echo "<br>";
  //  echo $d["refresh_token"];
  // }
}


//////////////////////////////INSERT INTO
// $tramaDatos = array('id_referencia' => '1050466',
//             'id_cita' => '830988',
//             'tipo' => '1',
//             'ipress' => array('ipress_id' => '00023159', 
//                                 'diresa_id' => '23', 
//                                 'red_id' => '00', 
//                                 'microred_id' => '00' 
//                                 ),
//             'paciente' => array('seguro_sis' => '1', 
//                                 'documento' => array('tipo' => '1', 
//                                                     'numero' => '07021479'
//                                                     )
//                                 ),
//             'nombre' => array('prenombres' => 'BENICIO',
//                             'apellido_paterno' => 'CRUZ',
//                             'apellido_materno' => 'DIAZ'
//                              ),

//             'ubigeo_domicilio' => array('departamento_id' => '14', 
//                                         'provincia_id' => '01', 
//                                         'distrito_id' => '08' 
//                                         ),
//             'registro' => array('inicio' => '2019-10-10 00:00:00', 
//                                 'fin' => '2019-10-10 12:00:00'
//                                 )

//             );

// $tramaDatos = "{
//   'id_referencia' : '123456',
//             'id_cita' : '123456',
//             'tipo' : '1',
//             'ipress' : {'ipress_id' : '00016918', 
//                                 'diresa_id' : '20', 
//                                 'red_id' : '00', 
//                                 'microred_id' : '00'
//                                 },
//             'paciente' : {'seguro_sis' : '1', 
//                                 'documento' : {'tipo' : '1', 
//                                                     'numero' : '12547869'
//                                                     }
//                                 },
//             'nombre' : {'prenombres' : 'YIMY',
//                             'apellido_paterno' : 'QUISPE',
//                             'apellido_materno' : 'JACHO'
//                              },

//             'ubigeo_domicilio' : {'departamento_id' : '02', 
//                                         'provincia_id' : '19', 
//                                         'distrito_id' : '01'
//                                         },
//             'registro' : {'inicio' : '2019-09-11 07:09:01', 
//                                 'fin' : '2019-10-30 14:00:00'
//                                 }

//             }";
// $curl1 = curl_init();
//         curl_setopt_array($curl1, array(
//           CURLOPT_PORT => "8243",
//           // CURLOPT_URL => "https://dapimanager.minsa.gob.pe:8243/token",
//           CURLOPT_URL => "https://dapimanager.minsa.gob.pe:8243/indicadores/v1.0.0/registrar-datos",
//           CURLOPT_RETURNTRANSFER => true,
//           CURLOPT_SSL_VERIFYPEER => false,
//           CURLOPT_SSL_VERIFYHOST => false,
//           CURLOPT_ENCODING => "",
//           CURLOPT_MAXREDIRS => 10,
//           CURLOPT_TIMEOUT => 30,
//           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//           CURLOPT_CUSTOMREQUEST => "POST",
//           // CURLOPT_POSTFIELDS => "username=duser_heves&password=duser_heves&grant_type=password",
//           CURLOPT_POSTFIELDS => json_encode($tramaDatos),
//           // CURLOPT_POSTFIELDS => "{\n\t\"id_referencia\": \"623243\",\n\t\"id_cita\": \"623243\",\n\t\"tipo\": \"1\",\n\t\"ipress\": {\n\t\t\"ipress_id\": \"00005987\",\n\t\t\"diresa_id\": \"23\",\n\t\t\"red_id\": \"00\",\n\t\t\"microred_id\": \"00\"\n\t},\n\t\"paciente\": {\n\t\t\"seguro_sis\": \"2\",\n\t\t\"documento\": {\n\t\t\t\"tipo\": \"1\",\n\t\t\t\"numero\": \"45469793\"\n\t\t},\n\t\t\"nombre\": {\n\t\t\t\"prenombres\": \"ANDY\",\n\t\t\t\"apellido_paterno\": \"NAVARRO\",\n\t\t\t\"apellido_materno\": \"WESLEY\"\n\t\t},\n\t\t\"ubigeo_domicilio\": {\n\t\t\t\"departamento_id\": \"14\",\n\t\t\t\"provincia_id\": \"01\",\n\t\t\t\"distrito_id\": \"01\"\n\t\t}\n\t},\n\t\"registro\": {\n\t\t\"inicio\": \"2019-10-11 12:50:03\",\n\t\t\"fin\": \"2019-10-15 08:36:00\"\n\t}\n}",
//           CURLOPT_HTTPHEADER => array(
//             "Accept: */*",
//             "Accept-Encoding: gzip, deflate",
//             "Authorization: Bearer 51cf5e17-a6be-3e05-b4bb-e18f012c7446",
//             "Cache-Control: no-cache",
//             "Connection: keep-alive",
//             "Content-Length: 61",
//             "Content-Type: application/json",
//             // "Content-Type: application/json",
//             // "Host: dapimanager.minsa.gob.pe:8243",
//             "Host: dapimanager.minsa.gob.pe:8243",
//             "cache-control: no-cache"
//           ),
//         ));
//         var_dump($curl1);
//         $response = curl_exec($curl1);
//         $err = curl_error($curl1);
//         // $statusCode = curl_getinfo($response, CURLINFO_HTTP_CODE);
//         curl_close($curl1);
//         if ($err) {
//           echo "cURL Error #:" . $err;
//             // print_r(json_encode(array('codigo_respuesta' => $err)));
//         } else {
//             echo "Mensaje de respuesta: ".$response;
//         }


// $curl1 = curl_init();

//   curl_setopt_array($curl1, array(
//   CURLOPT_PORT => "8243",
//   CURLOPT_URL => "https://dapimanager.minsa.gob.pe:8243/indicadores/v1.0.0/registrar-datos",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_SSL_VERIFYPEER => false,
//   CURLOPT_SSL_VERIFYHOST => false,
//   //CURLOPT_ENCODING => "",
//   //CURLOPT_MAXREDIRS => 10,
//   //CURLOPT_TIMEOUT => 30,
//   //CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   //CURLOPT_CUSTOMREQUEST => "POST",
//   // CURLOPT_POSTFIELDS => json_encode($tramaDatos),
//   CURLOPT_POSTFIELDS => "{\n\t\"id_referencia\": \"623259\",\n\t\"id_cita\": \"623259\",\n\t\"tipo\": \"1\",\n\t\"ipress\": {\n\t\t\"ipress_id\": \"00005987\",\n\t\t\"diresa_id\": \"23\",\n\t\t\"red_id\": \"00\",\n\t\t\"microred_id\": \"00\"\n\t},\n\t\"paciente\": {\n\t\t\"seguro_sis\": \"2\",\n\t\t\"documento\": {\n\t\t\t\"tipo\": \"1\",\n\t\t\t\"numero\": \"46273346\"\n\t\t},\n\t\t\"nombre\": {\n\t\t\t\"prenombres\": \"ANDY\",\n\t\t\t\"apellido_paterno\": \"NAVARRO\",\n\t\t\t\"apellido_materno\": \"WESLEY\"\n\t\t},\n\t\t\"ubigeo_domicilio\": {\n\t\t\t\"departamento_id\": \"14\",\n\t\t\t\"provincia_id\": \"01\",\n\t\t\t\"distrito_id\": \"01\"\n\t\t}\n\t},\n\t\"registro\": {\n\t\t\"inicio\": \"2019-10-11 12:50:03\",\n\t\t\"fin\": \"2019-10-15 08:36:00\"\n\t}\n}",

//   CURLOPT_HTTPHEADER => array(
//   //  "Accept: /",
//     //"Accept-Encoding: gzip, deflate",
//     "Authorization: Bearer ".$dtos->{'access_token'},
//     "Cache-Control: no-cache",
//     "Connection: keep-alive",
//     //"Content-Length: 572",
//     "Content-type: application/json",
//     "Host: dapimanager.minsa.gob.pe:8243",
//     // "Postman-Token: 47769e56-22c2-474e-86d9-04a8e30c39ba,bc6b865b-c571-44af-8052-625074d6ec0c",
//     // "User-Agent: PostmanRuntime/7.16.3",
//     "cache-control: no-cache"
//   ),
// ));
// $response = curl_exec($curl1);
// $err = curl_error($curl1);

// curl_close($curl1);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
//   // $dtos = json_decode($response);
//   // echo "<br>access_token: ".$dtos->{'access_token'};
// }
// var_dump(json_encode($tramaDatos));

?>
<body style="background-color: #fafafa;">
  <!-- <input type="hidden" id="empleado-ie" class="form-control" disabled="" value="<?php //echo htmlspecialchars($_GET["ie"]); ?>"> -->
  <div class="elemento-padre" id="hijo">
    <div class="elemento-hijo">
      Cargando...
    </div>
  </div>
  <div class="container">
    <!-- <div class="container-fluid"> -->
    <div class="row">
      <div class="row" style="padding: 5px; border-top: 1px dashed #BAD8F4; border-bottom: 1px dashed #BAD8F4; border-left: 1px dashed #BAD8F4; border-right: 1px dashed #BAD8F4; background-color: #E0EFF5;">
        <div class="col-md-6">
          <!-- <h1 style="color: #1565c0;"><i class="ion-ios-list-box" style=" font-size: 1.5em;"></i> Envio masivo web service</h1> -->
          <!-- <img src="assets/img/logo_minsa.jpg" width="550px;  height:75px;"> -->
        </div>
        <div class="col-md-6" style="font-size: 50px; color: #1565c0; text-align: right;">
          <img src="assets/img/logo_ficha.png" width="300px;  height:75px;">
        </div>
      </div> <br>
      <div class="row" style="padding: 5px; border-top: 1px dashed #BAD8F4; border-bottom: 1px dashed #BAD8F4; border-left: 1px dashed #BAD8F4; border-right: 1px dashed #BAD8F4; background-color: #E0EFF5; display: none">
        <br>
        <div class="col-md-10">
          <p id="datosEmpleado" name="datosEmpleado"></p>
        </div>
        <!-- <div class="col-md-2" style="text-align: right; margin-top: -6px;">
          
        </div>   -->
      </div><br />
      <div class="row">
        <div class="col-md-2" id="col-form-referencia-apoyo-diagnostico-no" style="">
          <div class="form-group">
            <p style="font-size:15px; text-align: right;color: #337ab7"><b>Tipo vista: </b></p>
          </div>
        </div>
        <div class="col-md-3" id="col-form-referencia-apoyo-diagnostico-no" >
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
            <input type="date" id="ffin" name="ffin" value="<?php date_default_timezone_set('America/Lima');
                                                            echo date('Y-m-d'); ?>" class="form-control bloquear fecha-actual">
          </div>
        </div>
        <div class="col-md-2" id="col-form-referencia-apoyo-diagnostico-no" style="float: right;display: none;">
          <div class="form-group">
            <input type="date" id="fini" name="fini" step="1" value="<?php date_default_timezone_set('America/Lima');
                                                                      echo  date('Y-m-01'); ?>" class="form-control bloquear fecha-actual">
          </div>
        </div>
        <div class="col-md-2" id="col-form-referencia-apoyo-diagnostico-no" >
          <button type="submit" id="buscar" name="buscar" onclick="fechasBuscar($('#ffin').val());" class="btn btn-primary">Buscar</button>
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
                  <button type="button" id="buscar" name="buscar" onclick="enviar();" class="btn btn-primary">Procesar</button>
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
                <th style="display: none">
                  <center>id_refencia</center>
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
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="height: 100px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
        </div>
        <div class="modal-body">
          <label>HOLA JHON</label>
          <span id="nombre-mostrar"> </span>
        </div>
        <!-- <iframe src="" frameborder="0" width="100%" height="100%" id="printframe"></iframe> -->
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
    // var getie = $("#empleado-ie").val();
    // var getir = $("#nroCuenta").val();
    $('#hijo').hide();
    $(".fakeloader").fakeLoader({
      timeToHide: 100,
      bgColor: "#f0f0f0",
      imagePath: "assets/precarga/logo.png",
      spinner: "spinner1"
    });
    // window.getie = <?php //echo htmlspecialchars($_GET["ie"]); ?>;
    // idempl = getie;
    var ffin = $('#ffin').val();
    // datosPersonales(getie);
    fechasBuscar(ffin);
  
    // $(".search").keyup(function() {
    //   var searchTerm = $(".search").val();
    //   var listItem = $('.results tbody').children('tr');
    //   var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

    //   $.extend($.expr[':'], {
    //     'containsi': function(elem, i, match, array) {
    //       return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    //     }
    //   });

    //   /* sonuç ilgili değil mi? öyleyse gizle */
    //   $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
    //     $(this).attr('visible', 'false');
    //   });

    //   /* sonuç ilgili mi? öyleyse göster */
    //   $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
    //     $(this).attr('visible', 'true');
    //   });

    //   // ocultar aceptados si input de busqueda se encuentra vacio
    //   if (searchSplit.length == 0) {
    //     $(".results tbody tr:containsi('aceptado')").each(function(e) {
    //       $(this).attr('visible', 'false');
    //     });
    //     $(".results tbody tr:containsi('coordinado')").each(function(e) {
    //       $(this).attr('visible', 'false');
    //     });
    //     $(".results tbody tr:containsi('rechazado')").each(function(e) {
    //       $(this).attr('visible', 'false');
    //     });
    //     $(".results tbody tr:containsi('trasladado')").each(function(e) {
    //       $(this).attr('visible', 'false');
    //     });
    //     $(".results tbody tr:containsi('suspendido')").each(function(e) {
    //       $(this).attr('visible', 'false');
    //     });
    //     $(".results tbody tr:containsi('contrareferido')").each(function(e) {
    //       $(this).attr('visible', 'false');
    //     });
    //   }

    //   /* kaç tane sonuç var? */
    //   var jobCount = $('.results tbody tr[visible="true"]').length;
    //   $('.counter').text(jobCount + ' coincidencias encontradas');

    //   /* sonuç varsa result öğesini görünür kıl, yoksa gizle */
    //   if (jobCount == '0') {
    //     $('.no-result').show();
    //   } else {
    //     $('.no-result').hide();
    //   }
    // });
    // $(".search").keyup(function(e) {
    //   if (e.which == 13 || e.keyCode == 13) {
    //     // alert("aqui se lleno");
    //     $("#lista-tabla  tbody tr").remove();
    //     var empleado = $("#empleado-ie").val();
    //     var cnt = 0;
    //     $("#tipo-busquea").val($(".search").val() == "" ? 1 : 2);
    //     $.ajax({
    //       data: {
    //         fini: $("#fini").val(),
    //         ffin: $("#ffin").val(),
    //         dato: $(".search").val(),
    //         tipo: $(".search").val() == "" ? 1 : 2,
    //         categoria: $("#categoria-busqueda").val()
    //       },
    //       url: '?c=api&a=ListarFechas',
    //       type: 'POST',
    //       dataType: 'json',
    //       beforeSend: function() {
    //         $('#hijo').show();
    //       },
    //       success: function(r) {
    //         $(r).each(function(i, v) {

    //           var financiamiento = v.financiadorseguro;
    //           if (financiamiento == '1') {
    //             var seguro = 'SOAT';
    //           } else if (financiamiento == '2') {
    //             var seguro = 'MTC';
    //           } else if (financiamiento == '3') {
    //             var seguro = 'PARTICULAR';
    //           } else if (financiamiento == '4') {
    //             var seguro = 'SIS';
    //           } else if (financiamiento == '5') {
    //             var seguro = 'AFOCAT';
    //           } else if (financiamiento == '6') {
    //             var seguro = 'OTROS';
    //           } else {
    //             var seguro = '';
    //           }
    //           var css = "";

    //           var existe = v.existe;
    //           if(parseInt(v.existe) >= 1) {
    //             css = " style='background: #C7F1D8' ";
    //             var crear = "";//'<button type="button" class="btn btn-warning" title="Registrar ficha SOAT" style=" padding: 3px 6px;"  onclick="mostrarEditar(\'' + v.idCuentaAtencion + '\',' + empleado + ');" data-toggle="tooltip" data-placement="top"><i style="font-size: 1.2em;" class="ion ion-ios-create"></i></button>';
    //             var Pdf = '<img src="assets/img/pdf.png" alt="" width="22px" data-toggle="tooltip" data-placement="top" data-html="true" title="Imprimir pdf" style="cursor: pointer;" onclick="imprimirPdf(\'' + v.idCuentaAtencion + '\',' + v.NroFicha + ')">';
    //             var editar = '<button type="button" class="btn btn-warning" title="Modificar la ficha SOAT" style=" padding: 3px 6px;"  onclick="mostrarEditar(\'' + v.idCuentaAtencion + '\',' + empleado + ', 1, \'' + v.idAtncionEmergencia + '\', \'' + v.nroFicha + '\');" data-toggle="tooltip" data-placement="top"><i style="font-size: 1.2em;" class="ion ion-md-create"></i></button>';
    //           } else {
    //             var crear = '<button type="button" class="btn btn-warning" title="Registrar ficha SOAT" style=" padding: 3px 6px;"  onclick="mostrarEditar(\'' + v.idCuentaAtencion + '\',' + empleado + ', 2, \'' + v.idAtncionEmergencia + '\', \'' + v.nroFicha + '\');" data-toggle="tooltip" data-placement="top"><i style="font-size: 1.2em;" class="ion ion-ios-create"></i></button>';
    //             var Pdf = "";//'<img src="assets/img/pdf.png" alt="" width="22px" data-toggle="tooltip" data-placement="top" data-html="true" title="Imprimir pdf" style="cursor: pointer;" onclick="imprimirPdf(\'' + v.idCuentaAtencion + '\',' + v.NroFicha + ')">';
    //             var editar = "";//'<button type="button" class="btn btn-warning" title="Modificar la ficha SOAT" style=" padding: 3px 6px;"  onclick="mostrarEditar(\'' + v.idCuentaAtencion + '\',' + empleado + ');" data-toggle="tooltip" data-placement="top"><i style="font-size: 1.2em;" class="ion ion-md-create"></i></button>';
    //           }


    //           $("#lista-tabla tbody").append('<tr id="idtr" '+css+'><td style="font-size:11px;">'+ (++cnt) +'</td> <td style="font-size:11px;" align="center">' + v.idCuentaAtencion + ' </td><td style="font-size:11px;" align="center">' + v.fecha + ' - ' + v.hora + '</td><td style="font-size:11px;" align="center">'+v.Servicio+'</td><td style="font-size:11px;" align="center">' + v.NroDocumento + '</td><td style="font-size:11px;" align="left">' + v.Paciente + '</td><td style="font-size:11px;" align="center">' + seguro + '</td><td>' +Pdf +" "+ crear + " "+editar+ '</td></tr>');
    //           /*
    //           <a style="decorate: none; color: #333333" target="_blank" href="http://localhost/apps/index.php?c=soat&a=solicitud&ir=' + v.idCuentaAtencion + '&ie=' + empleado + '"> ' + v.idCuentaAtencion + ' </a>
    //           */
    //         })
    //       },
    //       complete: function() {
    //         $('#hijo').hide();
    //       },
    //       error: function() {}
    //     });
    //   }
    // });

    $("#categoria-busqueda").on("change", function() {
      if($(this).val() == 1) {
        $(".avance").show();
      } else {
        $(".avance").hide();
      }
      fechasBuscar($("#ffin").val()); 
    });
  });
function fechasBuscar(ffin) {
  // alert(ffin);
    $("#lista-tabla  tbody tr").remove();
    var cnt = 0;
    $.ajax({
      data: {
        ffin: ffin,
        categoria: $("#categoria-busqueda").val(),
      },
      // url: '?c=api&a=ListarFechasTipoEspera',
      url: '?c=api&a=ListarFechasDiferiencia',
      type: 'POST',
      dataType: 'json',
      beforeSend: function() {
        $('#hijo').show();
      },
      success: function(r) {
        $(r).each(function(i, v) {
          var dts = '';
          cnt ++;
          dts +='<tr style="font-size: 10px">';
            dts +='<td >'+cnt+'</td>'; //0
            dts +='<td style="display: none">'+v.IdCuentaAtencion+'</td>'; //1
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
          dts +='</tr>';
          $("#lista-tabla tbody").append(dts);
        });
      $("#total").val(cnt);
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
  var dialog = swal("¿Está seguro que desea enviar los datos?", {
      buttons: {
        cancel: "Cancelar",
        si: "Si"
      }
    }).then(value => {
      switch (value) {
        case "si":
          $("#lista-tabla tbody tr").each(function() {
            var tr = $(this).closest('tr');
            var tds = tr.children('td');
            var idCuenta = $(this).closest('tr').children('td').eq(1).text();
            cnt++;
            faltante--;
            $("#procesados").val(cnt);
            $("#faltante").val(faltante);
            $("#nombre-acutla").val($(this).closest('tr').children('td').eq(6).text()+' '+$(this).closest('tr').children('td').eq(7).text()+' '+$(this).closest('tr').children('td').eq(8).text());
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
          });
          break;
      }
    });  
}

  function datosPersonales(ie) {
    $.ajax({
      data: {
        ie: ie
      },
      url: '?c=api&a=obtenerDatosEmpleado',
      type: 'POST',
      dataType: 'json',
      success: function(r) {
        $(r).each(function(i, v) { // indice, valor

          var d = new Date();
          var month = d.getMonth() + 1;
          var day = d.getDate();
          var output = (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + d.getFullYear();

          $("#footer-datos-empleado").append('<p style="font-size:11px; padding-top: 10;" align="left">USUARIO: ' + v.Empleado + '&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Especialidad:' + v.Descripcion + '</p>');
          $("#datosEmpleado").append('<p align="left" style="font-size:15px; color: #1565c0; margin: 0 0 20px;">Prof. Salud:&nbsp;' + v.Empleado + ' &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Esp.: &nbsp; ' + v.Descripcion + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha:&nbsp; ' + output + '</p>');
        });
      },
      error: function() {
        // alert('Ocurrio un error en el servidor ..');
      }
    });
  }

</script>

</html>