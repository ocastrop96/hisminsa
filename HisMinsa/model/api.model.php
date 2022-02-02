<?php
class apiModel
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Conexion::Iniciar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function CargarListaParaEnviar($fInicio, $fFinal, $tipoBuscqueda)
    {
        try {
            $sql = "execute WEBSERVICEHisMinsa :fInicio, :fFinal, :tipoBuscqueda";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(':fInicio' => $fInicio,':fFinal' => $fFinal, ':tipoBuscqueda' =>$tipoBuscqueda));
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
public function cargarDiagnosticosLabs($IdAtencion)
    {
        $cadena = "";
            $cadena .= "["; 
            $cntdor = 0;
        try {
            $sql = "execute WEBSERVICEHisMinsaDiagnostico :IdAtencion ";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array('IdAtencion' => $IdAtencion));
            while ($r = $stm->fetch()) {
                $CodigoDx = $r["CodigoDx"];
                $CodigoCIE = $r["CodigoCIE"];
                $Tipoitem = $r["Tipoitem"];
                $valor = $r["valor"];
                $CodigoVal = $r["CodigoVal"];
                if($cntdor > 0) {
                    $cadena .= ",";
                }
                $cntdor++;
                $cadena .= "\r\n\t\t\t{\r\n\t\t\t\t\"tipodiagnostico\": \"".$CodigoDx."\",\r\n\t\t\t\t\"codigo\": \"".$CodigoCIE."\",\r\n\t\t\t\t\"tipoitem\": \"".$Tipoitem."\"".($valor == '' ? "": ",\r\n\t\t\t\t\"labs\":[\r\n\t\t\t\t\t{\r\n\t\t\t\t\t\t\"codigo\": \"".$CodigoVal."\",\r\n\t\t\t\t\t\t\"valor\": \"".$valor."\"\r\n\t\t\t\t\t}\r\n\t\t\t\t]" )."}"; 
            }
            $cadena .= "\r\n\t\t]"; 

            return $cadena;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

public function GuardarDatosEnviados($pr_nrodocumento, $pr_apematerno, $pr_idpais, $pr_idprofesion, $pr_fechanacimiento, $pr_nombres, $pr_idtipodoc, $pr_apepaterno, $pr_idsexo, $pr_idcondicion, $pa_nrodocumento, $pa_apematerno, $pa_idpais, $pa_idprofesion, $pa_fechanacimiento, $pa_nombres, $pa_idtipodoc, $pa_apepaterno, $pa_idsexo, $pa_idcondicion, $p_nrodocumento, $p_apematerno, $p_idflag, $p_nombres, $p_nrohistoriaclinica, $p_idtipodoc, $p_apepaterno, $p_idetnia, $p_fechanacimiento, $p_idestablecimiento, $p_idpais, $p_idsexo, 

    $numeroafiliacion, $fechaatencion, $estadoregistro, $idups, $idestablecimiento, $diaedad, $edadregistro, $idturno, $idtipedadregistro, $fgdiag, $mesedad, $componente, $idfinanciador, $annioedad, $peso, $talla, $hemoglobina, $IdAtencion, $datosDiagnostico, $estado_respuesta, $descripcion_respuesta, $idcita_respuesta)
    {
        try {
            $sql = "execute WebHisminsaInsert :pr_nrodocumento, :pr_apematerno, :pr_idpais, :pr_idprofesion, :pr_fechanacimiento, :pr_nombres, :pr_idtipodoc, :pr_apepaterno, :pr_idsexo, :pr_idcondicion, :pa_nrodocumento, :pa_apematerno, :pa_idpais, :pa_idprofesion, :pa_fechanacimiento, :pa_nombres, :pa_idtipodoc, :pa_apepaterno, :pa_idsexo, :pa_idcondicion, :p_nrodocumento, :p_apematerno, :p_idflag, :p_nombres, :p_nrohistoriaclinica, :p_idtipodoc, :p_apepaterno, :p_idetnia, :p_fechanacimiento, :p_idestablecimiento, :p_idpais, :p_idsexo, 
                :numeroafiliacion, :fechaatencion, :estadoregistro,:idups,:idestablecimiento,:diaedad,:edadregistro,:idturno,:idtipedadregistro,:fgdiag, :mesedad,:componente,:idfinanciador,:annioedad,:peso,:talla,:hemoglobina,:IdAtencion, :datosDiagnostico, :estado_respuesta, :descripcion_respuesta, :idcita_respuesta";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(
                array(
                    //PERSONA ATIENDE
                    ':pr_nrodocumento' => $pr_nrodocumento, //1
                    ':pr_apematerno' => $pr_apematerno,//2
                    ':pr_idpais' => $pr_idpais,//3
                    ':pr_idprofesion' => $pr_idprofesion,//4
                    ':pr_fechanacimiento' => $pr_fechanacimiento,//5
                    ':pr_nombres' => $pr_nombres,//6
                    ':pr_idtipodoc' => $pr_idtipodoc,//7
                    ':pr_apepaterno' => $pr_apepaterno,//8
                    ':pr_idsexo' => $pr_idsexo,//9
                    ':pr_idcondicion' => $pr_idcondicion,//10

                    ':pa_nrodocumento' => $pa_nrodocumento,//11
                    ':pa_apematerno' => $pa_apematerno,//12
                    ':pa_idpais' => $pa_idpais,//13
                    ':pa_idprofesion' => $pa_idprofesion,//14
                    ':pa_fechanacimiento' => $pa_fechanacimiento,//15
                    ':pa_nombres' => $pa_nombres,//16
                    ':pa_idtipodoc' => $pa_idtipodoc,//17
                    ':pa_apepaterno' => $pa_apepaterno,//18
                    ':pa_idsexo' => $pa_idsexo,//19
                    ':pa_idcondicion' => $pa_idcondicion,//20

                    ':p_nrodocumento' => $p_nrodocumento,//21
                    ':p_apematerno' => $p_apematerno,//22
                    ':p_idflag' => $p_idflag,//23
                    ':p_nombres' => $p_nombres, //24
                    ':p_nrohistoriaclinica' => $p_nrohistoriaclinica, //25
                    ':p_idtipodoc' => $p_idtipodoc, //26
                    ':p_apepaterno' => $p_apepaterno, //27
                    ':p_idetnia' => $p_idetnia, //28
                    ':p_fechanacimiento' => $p_fechanacimiento, //29
                    ':p_idestablecimiento' => $p_idestablecimiento, //30
                    ':p_idpais' => $p_idpais, //31
                    ':p_idsexo' => $p_idsexo, //32

                    ':numeroafiliacion' => $numeroafiliacion, //33
                    ':fechaatencion' => $fechaatencion,//34
                    ':estadoregistro' => $estadoregistro,//35
                    ':idups' => $idups,//36
                    ':idestablecimiento' => $idestablecimiento,//37
                    ':diaedad' => $diaedad,//38
                    ':edadregistro' => $edadregistro,//39
                    ':idturno' => $idturno,//40
                    ':idtipedadregistro' => $idtipedadregistro,//41
                    ':fgdiag' => $fgdiag,//42
                    ':mesedad' => $mesedad,//43
                    ':componente' => $componente,//44
                    ':idfinanciador' => $idfinanciador,//45
                    ':annioedad' => $annioedad,//46
                    ':peso' => $peso,//47
                    ':talla' => $talla,//48
                    ':hemoglobina' => $hemoglobina,//49
                    ':IdAtencion' => $IdAtencion,//50
                    ':datosDiagnostico' => $datosDiagnostico,//51
                    ':estado_respuesta' => $estado_respuesta,//52
                    ':descripcion_respuesta' => $descripcion_respuesta,//53
                    ':idcita_respuesta' => $idcita_respuesta//54
                )
            );
            $stm->setFetchMode(PDO::FETCH_ASSOC);
            while ($r = $stm->fetch()) {
                return $r['id'];
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function grabarDatosEnviados($p_nrodocumento,
        $p_apematerno,
        $p_idflag,
        $p_nombres,
        $p_nrohistoriaclinica,
        $p_idtipodoc,
        $p_apepaterno,
        $p_idetnia,
        $p_fechanacimiento,
        $p_idestablecimiento,
        $p_idpais,
        $p_idsexo,
        // --PERSONAL ATIENDE
        $pa_nrodocumento,
        $pa_apematerno,
        $pa_idpais,
        $pa_idprofesion,
        $pa_fechanacimiento,
        $pa_nombres,
        $pa_idtipodoc,
        $pa_apepaterno,
        $pa_idsexo,
        $pa_idcondicion,
        // --PERSONALREGISTRA
        $pr_nrodocumento,
        $pr_apematerno,
        $pr_idpais,
        $pr_idprofesion,
        $pr_fechanacimiento,
        $pr_nombres,
        $pr_idtipodoc,
        $pr_apepaterno,
        $pr_idsexo,
        $idcondicion, 
        // -- citas
        $numeroafiliacion,
        $fechaatencion,
        $estadoregistro,
        $idups,
        $idestablecimiento,
        $diaedad,
        $edadregistro,
        $idturno,
        $idtipedadregistro,
        $fgdiag,
        $mesedad, 
        $componente,
        $idfinanciador,
        $annioedad,
        // -- EXAMEN FISICO
        $peso,
        $talla,
        $hemoglobina,
        // --DATOS DEL REGISTRO
        $fechaRegistro,
        $usuaroRegistra,
        // --DATOS DE RESPUESTA DE ENVIO
        $rspt_estado,
        $rspt_descripcion,
        $rspt_idCita)
    {
        try {
            $sql = "execute WebHisminsaInsert 
            :p_nrodocumento, :p_apematerno, :p_idflag,
            :p_nombres,:p_nrohistoriaclinica, :p_idtipodoc,
            :p_apepaterno, :p_idetnia, :p_fechanacimiento,
            :p_idestablecimiento, :p_idpais, :p_idsexo,

            :pa_nrodocumento, :pa_apematerno, :pa_idpais,
            :pa_idprofesion, :pa_fechanacimiento, :pa_nombres,
            :pa_idtipodoc, :pa_apepaterno, :pa_idsexo,
            :pa_idcondicion,
            
            :pr_nrodocumento, :pr_apematerno, :pr_idpais,
            :pr_idprofesion, :pr_fechanacimiento, :pr_nombres,
            :pr_idtipodoc, :pr_apepaterno, :pr_idsexo,
            :idcondicion, 

            :numeroafiliacion, :fechaatencion, :estadoregistro,
            :idups, :idestablecimiento, :diaedad,
            :edadregistro, :idturno, :idtipedadregistro,
            :fgdiag, :mesedad,  :componente, :idfinanciador,
            :annioedad,

            :peso, :talla, :hemoglobina,

            :fechaRegistro, :usuaroRegistra,

            :rspt_estado, :rspt_descripcion, :rspt_idCita";
            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                    ':p_nrodocumento' => $p_nrodocumento,
                    ':p_apematerno' => $p_apematerno,
                    ':p_idflag' => $p_idflag,
                    ':p_nombres' => $p_nombres,
                    ':p_nrohistoriaclinica' => $p_nrohistoriaclinica,
                    ':p_idtipodoc' => $p_idtipodoc,
                    ':p_apepaterno' => $p_apepaterno,
                    ':p_idetnia' => $p_idetnia,
                    ':p_fechanacimiento' => $p_fechanacimiento,
                    ':p_idestablecimiento' => $p_idestablecimiento,
                    ':p_idpais' => $p_idpais,
                    ':p_idsexo' => $p_idsexo,
                    ':pa_nrodocumento' => $pa_nrodocumento,
                    ':pa_apematerno' => $pa_apematerno,
                    ':pa_idpais' => $pa_idpais,
                    ':pa_idprofesion' => $pa_idprofesion,
                    ':pa_fechanacimiento' => $pa_fechanacimiento,
                    ':pa_nombres' => $pa_nombres,
                    ':pa_idtipodoc' => $pa_idtipodoc,
                    ':pa_apepaterno' => $pa_apepaterno,
                    ':pa_idsexo' => $pa_idsexo,
                    ':pa_idcondicion' => $pa_idcondicion,
                    ':pr_nrodocumento' => $pr_nrodocumento,
                    ':pr_apematerno' => $pr_apematerno,
                    ':pr_idpais' => $pr_idpais,
                    ':pr_idprofesion' => $pr_idprofesion,
                    ':pr_fechanacimiento' => $pr_fechanacimiento,
                    ':pr_nombres' => $pr_nombres,
                    ':pr_idtipodoc' => $pr_idtipodoc,
                    ':pr_apepaterno' => $pr_apepaterno,
                    ':pr_idsexo' => $pr_idsexo,
                    ':idcondicion' => $idcondicion,
                    ':numeroafiliacion' => $numeroafiliacion,
                    ':fechaatencion' => $fechaatencion,
                    ':estadoregistro' => $estadoregistro,
                    ':idups' => $idups,
                    ':idestablecimiento' => $idestablecimiento,
                    ':diaedad' => $diaedad,
                    ':edadregistro' => $edadregistro,
                    ':idturno' => $idturno,
                    ':idtipedadregistro' => $idtipedadregistro,
                    ':fgdiag' => $fgdiag,
                    ':mesedad' => $mesedad,
                    ':componente' => $componente,
                    ':idfinanciador' => $idfinanciador,
                    ':annioedad' => $annioedad,
                    ':peso' => $peso,
                    ':talla' => $talla,
                    ':hemoglobina' => $hemoglobina,
                    ':fechaRegistro' => $fechaRegistro,
                    ':usuaroRegistra' => $usuaroRegistra,
                    ':rspt_estado' => $rspt_estado,
                    ':rspt_descripcion' => $rspt_descripcion,
                    ':rspt_idCita' => $rspt_idCita,

                ));
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    //////////////
}
