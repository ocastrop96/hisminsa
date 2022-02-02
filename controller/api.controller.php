<?php

require_once 'model/api.entidad.php';
require_once 'model/api.model.php';

class apiController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new apiModel();
    }
    public function principal()
    {
        require_once 'view/api/principal.php';
    }

    public function CargarListaParaEnviar()
    {
        header('Content-Type: application/json');
        $this->apiModel = new apiModel();
        $resultado = $this->apiModel->CargarListaParaEnviar($_POST["fini"], $_POST["ffin"], $_POST["categoria"]);
        print_r(json_encode($resultado));
    }

    public function EnviarCita()
    {
        header('Content-Type: application/json');
        $this->apiModel = new apiModel();
        // personal_registra
        $pr_nrodocumento = $_POST["pr_nrodocumento"];//1
        $pr_apematerno = $_POST["pr_apematerno"];//2
        $pr_idpais = $_POST["pr_idpais"];//3
        $pr_idprofesion = $_POST["pr_idprofesion"];//4
        $pr_fechanacimiento = $_POST["pr_fechanacimiento"];//5
        $pr_nombres = $_POST["pr_nombres"];//6
        $pr_idtipodoc = $_POST["pr_idtipodoc"];//7
        $pr_apepaterno = $_POST["pr_apepaterno"];//8
        $pr_idsexo = $_POST["pr_idsexo"];//9
        $pr_idcondicion = $_POST["pr_idcondicion"];//10
        // personal_atiende
        $pa_nrodocumento = $_POST["pa_nrodocumento"];//11
        $pa_apematerno = $_POST["pa_apematerno"];//12
        $pa_idpais = $_POST["pa_idpais"];//13
        $pa_idprofesion = $_POST["pa_idprofesion"];//14
        $pa_fechanacimiento = $_POST["pa_fechanacimiento"];//15
        $pa_nombres = $_POST["pa_nombres"];//16
        $pa_idtipodoc = $_POST["pa_idtipodoc"];//17
        $pa_apepaterno = $_POST["pa_apepaterno"];//18
        $pa_idsexo = $_POST["pa_idsexo"];//19
        $pa_idcondicion = $_POST["pa_idcondicion"];//20
        // paciente
        $p_nrodocumento = $_POST["p_nrodocumento"];//21
        $p_apematerno = $_POST["p_apematerno"];//22
        $p_idflag = $_POST["p_idflag"];//23
        $p_nombres = $_POST["p_nombres"];//24
        $p_nrohistoriaclinica = $_POST["p_nrohistoriaclinica"];//25
        $p_idtipodoc = $_POST["p_idtipodoc"];//26
        $p_apepaterno = $_POST["p_apepaterno"];//27
        $p_idetnia = $_POST["p_idetnia"];//28
        $p_fechanacimiento = $_POST["p_fechanacimiento"];//29
        $p_idestablecimiento = $_POST["p_idestablecimiento"];//30
        $p_idpais = $_POST["p_idpais"];//31
        $p_idsexo = $_POST["p_idsexo"];//32
        // citas
        $numeroafiliacion = $_POST["numeroafiliacion"];//33
        $fechaatencion = $_POST["fechaatencion"];//34
        $estadoregistro = $_POST["estadoregistro"];//35
        $idups = $_POST["idups"];//36
        $idestablecimiento = $_POST["idestablecimiento"];//37
        $diaedad = $_POST["diaedad"];//38
        $edadregistro = $_POST["edadregistro"];//39
        $idturno = $_POST["idturno"];//40
        $idtipedadregistro = $_POST["idtipedadregistro"];//41
        $fgdiag = $_POST["fgdiag"];//42
        $mesedad = $_POST["mesedad"];//43
        $componente = $_POST["componente"];//44
        $idfinanciador = $_POST["idfinanciador"];//45
        $annioedad = $_POST["annioedad"];//46
        $peso = $_POST["peso"];//47
        $talla = $_POST["talla"];//48
        $hemoglobina = $_POST["hemoglobina"];//49 
        $IdAtencion = $_POST["idAtencion"];//50

        ////CAPTURAR LOS DIAGNOSTICOS
        $datosDiagnostico = "";
        header('Content-Type: application/json');
        $this->apiModel = new apiModel();
        $resultado = $this->apiModel->cargarDiagnosticosLabs($IdAtencion);
        $datosDiagnostico = $resultado;
        //// FIN CAPTURAR DIAGNOSTICOS

        $curl = curl_init();
        curl_setopt_array($curl, array(
          // CURLOPT_PORT => "18080",
          CURLOPT_PORT => "18061",
          // CURLOPT_URL => "http://dpidesalud.minsa.gob.pe:18080/mcs-sihce-hisminsa/integracion/v1.0/paquete/actualizar",
          CURLOPT_URL => "http://pidesalud.minsa.gob.pe:18061/mcs-sihce-hisminsa/integracion/v1.0/paquete/actualizar",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_SSL_VERIFYHOST => false,

          CURLOPT_POSTFIELDS => "{\r\n\t\"cita\": {\r\n\t\t\"numeroafiliacion\": \"".$numeroafiliacion."\",\r\n\t\t\"fechaatencion\": \"".$fechaatencion."\",\r\n\t\t\"estadoregistro\": \"".$estadoregistro."\",\r\n\t\t\"items\": ".$datosDiagnostico.", \r\n\t\t\"idups\": \"".$idups."\",\r\n\t\t\"idestablecimiento\": \"".$idestablecimiento."\",\r\n\t\t\"diaedad\": \"".$diaedad."\",\r\n\t\t\"edadregistro\": \"".$edadregistro."\",\r\n\t\t\"idturno\": \"".$idturno."\",\r\n\t\t\"idtipedadregistro\": \"".$idtipedadregistro."\",\r\n\t\t\"fgdiag\": \"".$fgdiag."\",\r\n\t\t\"mesedad\": \"".$mesedad."\",\r\n\t\t\"componente\": \"".$componente."\",\r\n\t\t\"idfinanciador\": \"".$idfinanciador."\",\r\n\t\t\"annioedad\": \"".$annioedad."\",\r\n\t\t\"examenfisico\": {\r\n\t\t\t\"peso\": \"".$peso."\",\r\n\t\t\t\"talla\": \"".$talla."\",\r\n\t\t\t\"hemoglobina\": \"".$hemoglobina."\"\r\n\t\t}\r\n\t},\r\n\t\"personal_registra\": {\r\n\t\t\"nrodocumento\": \"".$pr_nrodocumento."\",\r\n\t\t\"apematerno\": \"".$pr_apematerno."\",\r\n\t\t\"idpais\": \"".$pr_idpais."\",\r\n\t\t\"idprofesion\": \"".$pr_idprofesion."\",\r\n\t\t\"fechanacimiento\": \"".$pr_fechanacimiento."\",\r\n\t\t\"nombres\": \"".$pr_nombres."\",\r\n\t\t\"idtipodoc\": \"".$pr_idtipodoc."\",\r\n\t\t\"apepaterno\": \"".$pr_apepaterno."\",\r\n\t\t\"idsexo\": \"".$pr_idsexo."\",\r\n\t\t\"idcondicion\": \"".$pr_idcondicion."\"\r\n\t},\r\n\t\"personal_atiende\": {\r\n\t\t\"nrodocumento\": \"".$pa_nrodocumento."\",\r\n\t\t\"apematerno\": \"".$pa_apematerno."\",\r\n\t\t\"idpais\": \"".$pa_idpais."\",\r\n\t\t\"idprofesion\": \"".$pa_idprofesion."\",\r\n\t\t\"fechanacimiento\": \"".$pa_fechanacimiento."\",\r\n\t\t\"nombres\": \"".$pa_nombres."\",\r\n\t\t\"idtipodoc\": \"".$pa_idtipodoc."\",\r\n\t\t\"apepaterno\": \"".$pa_apepaterno."\",\r\n\t\t\"idsexo\": \"".$pa_idsexo."\",\r\n\t\t\"idcondicion\": \"".$pa_idcondicion."\"\r\n\t},\r\n\t\"paciente\": {\r\n\t\t\"nrodocumento\": \"".$p_nrodocumento."\",\r\n\t\t\"apematerno\": \"".$p_apematerno."\",\r\n\t\t\"idflag\": \"".$p_idflag."\",\r\n\t\t\"nombres\": \"".$p_nombres."\",\r\n\t\t\"nrohistoriaclinica\": \"".$p_nrohistoriaclinica."\",\r\n\t\t\"idtipodoc\": \"".$p_idtipodoc."\",\r\n\t\t\"apepaterno\": \"".$p_apepaterno."\",\r\n\t\t\"idetnia\": \"".$p_idetnia."\",\r\n\t\t\"fechanacimiento\": \"".$p_fechanacimiento."\",\r\n\t\t\"idestablecimiento\": \"".$p_idestablecimiento."\",\r\n\t\t\"idpais\": \"".$p_idpais."\",\r\n\t\t\"idsexo\": \"".$p_idsexo."\"\r\n\t}\r\n}\r\n}",
          CURLOPT_HTTPHEADER => array(
            "Accept: */*",
            "Connection: keep-alive",
            "Content-Type: application/json",
            // "Host: dpidesalud.minsa.gob.pe:18080",
            "Host: pidesalud.minsa.gob.pe:18061",
            "cache-control: no-cache"
          ),
        ));

        $msje = "{\r\n\t\"cita\": {\r\n\t\t\"numeroafiliacion\": \"".$numeroafiliacion."\",\r\n\t\t\"fechaatencion\": \"".$fechaatencion."\",\r\n\t\t\"estadoregistro\": \"".$estadoregistro."\",\r\n\t\t\"items\": ".$datosDiagnostico.", \r\n\t\t\"idups\": \"".$idups."\",\r\n\t\t\"idestablecimiento\": \"".$idestablecimiento."\",\r\n\t\t\"diaedad\": \"".$diaedad."\",\r\n\t\t\"edadregistro\": \"".$edadregistro."\",\r\n\t\t\"idturno\": \"".$idturno."\",\r\n\t\t\"idtipedadregistro\": \"".$idtipedadregistro."\",\r\n\t\t\"fgdiag\": \"".$fgdiag."\",\r\n\t\t\"mesedad\": \"".$mesedad."\",\r\n\t\t\"componente\": \"".$componente."\",\r\n\t\t\"idfinanciador\": \"".$idfinanciador."\",\r\n\t\t\"annioedad\": \"".$annioedad."\",\r\n\t\t\"examenfisico\": {\r\n\t\t\t\"peso\": \"".$peso."\",\r\n\t\t\t\"talla\": \"".$talla."\",\r\n\t\t\t\"hemoglobina\": \"".$hemoglobina."\"\r\n\t\t}\r\n\t},\r\n\t\"personal_registra\": {\r\n\t\t\"nrodocumento\": \"".$pr_nrodocumento."\",\r\n\t\t\"apematerno\": \"".$pr_apematerno."\",\r\n\t\t\"idpais\": \"".$pr_idpais."\",\r\n\t\t\"idprofesion\": \"".$pr_idprofesion."\",\r\n\t\t\"fechanacimiento\": \"".$pr_fechanacimiento."\",\r\n\t\t\"nombres\": \"".$pr_nombres."\",\r\n\t\t\"idtipodoc\": \"".$pr_idtipodoc."\",\r\n\t\t\"apepaterno\": \"".$pr_apepaterno."\",\r\n\t\t\"idsexo\": \"".$pr_idsexo."\",\r\n\t\t\"idcondicion\": \"".$pr_idcondicion."\"\r\n\t},\r\n\t\"personal_atiende\": {\r\n\t\t\"nrodocumento\": \"".$pa_nrodocumento."\",\r\n\t\t\"apematerno\": \"".$pa_apematerno."\",\r\n\t\t\"idpais\": \"".$pa_idpais."\",\r\n\t\t\"idprofesion\": \"".$pa_idprofesion."\",\r\n\t\t\"fechanacimiento\": \"".$pa_fechanacimiento."\",\r\n\t\t\"nombres\": \"".$pa_nombres."\",\r\n\t\t\"idtipodoc\": \"".$pa_idtipodoc."\",\r\n\t\t\"apepaterno\": \"".$pa_apepaterno."\",\r\n\t\t\"idsexo\": \"".$pa_idsexo."\",\r\n\t\t\"idcondicion\": \"".$pa_idcondicion."\"\r\n\t},\r\n\t\"paciente\": {\r\n\t\t\"nrodocumento\": \"".$p_nrodocumento."\",\r\n\t\t\"apematerno\": \"".$p_apematerno."\",\r\n\t\t\"idflag\": \"".$p_idflag."\",\r\n\t\t\"nombres\": \"".$p_nombres."\",\r\n\t\t\"nrohistoriaclinica\": \"".$p_nrohistoriaclinica."\",\r\n\t\t\"idtipodoc\": \"".$p_idtipodoc."\",\r\n\t\t\"apepaterno\": \"".$p_apepaterno."\",\r\n\t\t\"idetnia\": \"".$p_idetnia."\",\r\n\t\t\"fechanacimiento\": \"".$p_fechanacimiento."\",\r\n\t\t\"idestablecimiento\": \"".$p_idestablecimiento."\",\r\n\t\t\"idpais\": \"".$p_idpais."\",\r\n\t\t\"idsexo\": \"".$p_idsexo."\"\r\n\t}\r\n}";
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        // echo $response;
        // var_dump($response);
        // var_dump($$err);
        if ($err) {
            print_r(json_encode(array('codigo_respuesta' => $err)));
        } else {
            $dtos = json_decode($response);
            $estado_respuesta = $dtos->{'estado'};
            $descripcion_respuesta = $dtos->{'descripcion'};
            $idcita_respuesta = $dtos->{'idCita'};
            if($estado_respuesta == "OK" || $estado_respuesta == "Ok" || $estado_respuesta == "ok") {
                $resultado = $this->apiModel->GuardarDatosEnviados(
                    // personal_registra
                    $pr_nrodocumento,//1
                    $pr_apematerno,//2
                    $pr_idpais,//3
                    $pr_idprofesion,//4
                    $pr_fechanacimiento,//5
                    $pr_nombres,//6
                    $pr_idtipodoc,//7
                    $pr_apepaterno,//8
                    $pr_idsexo,//9
                    $pr_idcondicion,//10
                    // personal_atiende
                    $pa_nrodocumento,//11
                    $pa_apematerno,//12
                    $pa_idpais,//13
                    $pa_idprofesion,//14
                    $pa_fechanacimiento,//15
                    $pa_nombres,//16
                    $pa_idtipodoc,//17
                    $pa_apepaterno,//18
                    $pa_idsexo,//19
                    $pa_idcondicion,//20
                    // paciente
                    $p_nrodocumento,//21
                    $p_apematerno,//22
                    $p_idflag,//23
                    $p_nombres,//24
                    $p_nrohistoriaclinica,//25
                    $p_idtipodoc,//26
                    $p_apepaterno,//27
                    $p_idetnia,//28
                    $p_fechanacimiento,//29
                    $p_idestablecimiento,//30
                    $p_idpais,//31
                    $p_idsexo,//32
                    // citas
                    $numeroafiliacion,//33
                    $fechaatencion,//34
                    $estadoregistro,//35
                    $idups,//36
                    $idestablecimiento,//37
                    $diaedad,//38
                    $edadregistro,//39
                    $idturno,//40
                    $idtipedadregistro,//41
                    $fgdiag,//42
                    $mesedad,//43
                    $componente,//44
                    $idfinanciador,//45
                    $annioedad,//46
                    $peso,//47
                    $talla,//48
                    $hemoglobina,//49
                    $IdAtencion,//50
                    $datosDiagnostico,//51
                    $estado_respuesta,//52
                    $descripcion_respuesta,//53
                    $idcita_respuesta//54

                );
                // var_dump($msje);
                $respuesta = array('id' => $resultado,"estadoMensaje" => $estado_respuesta, "idCita" => $idcita_respuesta, "mensaje" => $descripcion_respuesta, 'msje' => $msje);
            } else {
                // var_dump($msje);
                // echo $response;
                // $respuesta = $msje;//
                $respuesta = array('id' => '0',"estadoMensaje" => $estado_respuesta, "idCita" => $idcita_respuesta, "mensaje" => $descripcion_respuesta, 'msje' => $msje);
            }
            print_r(json_encode($respuesta));
        }
        //////////////////////////////////////////////////////////////////////////
    }
}
