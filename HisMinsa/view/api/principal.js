var idempl = "";
  $(document).ready(function() {
    $('#hijo').hide();
    $(".fakeloader").fakeLoader({
      timeToHide: 100,
      bgColor: "#f0f0f0",
      imagePath: "assets/precarga/logo.png",
      spinner: "spinner1"
    });
    // var ffin = $('#ffin').val();
    // var fini = $('#fini').val();
    // fechasBuscar(fini, ffin);
    // pacientes();
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
    $("#ubigeo").click(function() {
      corregirUbigeo();
    });
  });
  // function envioProgramado() {
  //    var ffin = $('#ffin').val();
  //   var fini = $('#fini').val();
  //   fechasBuscar(fini, ffin);
  // }
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
        categoria: $("#categoria-busqueda").val(),
      },
      url: '?c=api&a=CargarListaParaEnviar',
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
          var color  = v.rstFechaEnvio != '' && v.rstFechaEnvio != null && v.rstFechaEnvio != 'null' ? ' background:#DCF9CF ' : ''; 
          dts +='<tr style="font-size: 10px;'+color+'" >';
            dts +='<td >'+cnt+'</td>'; //0
            //personal_registra
            dts +='<td style="display: none">'+v.DNI+'</td>'; //1
            dts +='<td style="display: none">'+v.MaternoEm+'</td>'; //2
            dts +='<td style="display: none">'+v.IdPais+'</td>'; //3
            dts +='<td style="display: none">'+v.IdEmpleado+'</td>'; //4
            dts +='<td style="display: none">'+v.FechaNacEM+'</td>'; //5
            dts +='<td style="display: none">'+v.NombresEM+'</td>'; //6
            dts +='<td style="display: none">'+v.TIPODOC+'</td>'; //7
            dts +='<td style="display: none">'+v.PaternoEm+'</td>'; //8
            dts +='<td style="display: none">'+v.IdSexo+'</td>'; //9
            dts +='<td style="display: none">'+v.CondicionTrabajo+'</td>'; //10
            // personal_atiende
            dts +='<td style="display: none">'+v.DNI1+'</td>'; //11
            dts +='<td style="display: none">'+v.ApellidoMatenor1+'</td>'; //12
            dts +='<td style="display: none">'+v.Pais1+'</td>'; //13
            dts +='<td style="display: none">'+v.IdEmpleado1+'</td>'; //14
            dts +='<td style="display: none">'+v.FechaNac1+'</td>'; //15
            dts +='<td style="display: none">'+v.Nombres1+'</td>'; //16
            dts +='<td style="display: none">'+v.TIPODOC1+'</td>'; //17
            dts +='<td style="display: none">'+v.ApellidoPaterno1+'</td>'; //18
            dts +='<td style="display: none">'+v.IdSexo1+'</td>'; //19
            dts +='<td style="display: none">'+v.CondicionTrabajo1+'</td>'; //20
            // paciente
            dts +='<td style="display: none">'+v.nrodocumento+'</td>'; //21
            dts +='<td style="display: none">'+v.ApellidoMaterno+'</td>'; //22
            dts +='<td style="display: none">'+v.IdFlag+'</td>'; //23
            dts +='<td style="display: none">'+v.Nombres+'</td>'; //24
            dts +='<td style="display: none">'+v.NroHistoriaClinica+'</td>'; //25
            dts +='<td style="display: none">'+v.IdDocIdentidad+'</td>'; //26
            dts +='<td style="display: none">'+v.ApellidoPaterno+'</td>'; //27
            dts +='<td style="display: none">'+v.IdEtnia+'</td>'; //28
            dts +='<td style="display: none">'+v.FechaNacP+'</td>'; //29
            dts +='<td style="display: none">'+v.Establecimiento+'</td>'; //30
            dts +='<td style="display: none">'+v.IdPaisP+'</td>'; //31
            dts +='<td style="display: none">'+v.IdSexoP+'</td>'; //32
            // cita
            dts +='<td>'+v.NroAfiliacion+'</td>'; //33
            dts +='<td style="display: none">'+v.FechaAtec+'</td>'; //34
            dts +='<td style="display: none">'+v.EstadoRegistro+'</td>'; //35
            dts +='<td style="display: none">'+v.codigoServicioHIS+'</td>'; //36
            dts +='<td style="display: none">'+v.Establecimiento+'</td>'; //37
            dts +='<td style="display: none">'+v.diasEdad+'</td>'; //38
            dts +='<td style="display: none">'+v.Edad+'</td>'; //39
            dts +='<td style="display: none">'+v.Turno+'</td>'; //40
            dts +='<td style="display: none">'+v.TipoEdad+'</td>'; //41
            dts +='<td style="display: none">'+v.fgDiag+'</td>'; //42
            dts +='<td style="display: none">'+v.mesesEdad+'</td>'; //43
            dts +='<td style="display: none">'+v.Componente+'</td>'; //44
            dts +='<td style="display: none">'+v.FteFto+'</td>'; //45
            dts +='<td style="display: none">'+v.annosEdad+'</td>'; //46
            // examen fisoc
            dts +='<td style="display: none">'+v.Peso+'</td>'; //47
            dts +='<td style="display: none">'+v.Talla+'</td>'; //48
            dts +='<td style="display: none">'+v.Hemoglobina+'</td>'; //40
            dts +='<td>'+v.idcuentaatencion+'</td>'; //50
            dts +='<td style="display: none">'+v.idatencion+'</td>'; //51
            dts +='<td>'+v.FechaAtecMostrar+'</td>'; //52
            dts +='<td>'+v.tipoDocumentoDescripcion+'</td>'; //53
            dts +='<td>'+v.nrodocumento+'</td>'; //54
            dts +='<td>'+(v.Nombres +' '+v.ApellidoPaterno +' '+v.ApellidoMaterno)+'</td>'; //55
            dts +='<td>'+v.IdSexoP+'</td>'; //56
            if(v.rstFechaEnvio == '' || v.rstFechaEnvio == null || v.rstFechaEnvio== 'null') {
            	dts +='<td></td>'; //57
	            dts +='<td></td>'; //58
	            dts +='<td></td>'; //59
	            dts +='<td></td>'; //60
            } else {
            	dts +='<td>'+v.rstEstadoEnvio+'</td>'; //57
	            dts +='<td>'+v.rstidCitaEnvio+'</td>'; //58
	            dts +='<td>'+v.rstDescripcionEnvio+'</td>'; //59
	            dts +='<td>'+v.rstFechaEnvio+'</td>'; //60
            }
            

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
    var date = new Date();
 	var fechaActual = date.getDate()+'/'+(date.getMonth()+1)+'/'+date.getFullYear();
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
            var idCuentaAtencion = $(this).closest('tr').children('td').eq(50).text();
            var idCuenta = $(this).closest('tr').children('td').eq(51).text();
            var nombrePaciente = $(this).closest('tr').children('td').eq(55).text();
            
            var VerEnviar = $(this).closest('tr').children('td').eq(57).text().trim();
            if(VerEnviar == '') {
                $.ajax({
                  data: {
                  	// --PERSONALREGISTRA
                    pr_nrodocumento: $(this).closest('tr').children('td').eq(1).text().trim(),
                    pr_apematerno: $(this).closest('tr').children('td').eq(2).text().trim(),
                    pr_idpais: $(this).closest('tr').children('td').eq(3).text().trim(),
                    pr_idprofesion: $(this).closest('tr').children('td').eq(4).text().trim(),
                    pr_fechanacimiento: $(this).closest('tr').children('td').eq(5).text().trim(),
                    pr_nombres: $(this).closest('tr').children('td').eq(6).text().trim(),
                    pr_idtipodoc: $(this).closest('tr').children('td').eq(7).text().trim(),
                    pr_apepaterno: $(this).closest('tr').children('td').eq(8).text().trim(),
                    pr_idsexo: $(this).closest('tr').children('td').eq(9).text().trim(),
                    pr_idcondicion: $(this).closest('tr').children('td').eq(10).text().trim(), 
                    // --PERSONAL ATIENDE
                    pa_nrodocumento: $(this).closest('tr').children('td').eq(11).text().trim(),
                    pa_apematerno: $(this).closest('tr').children('td').eq(12).text().trim(),
                    pa_idpais: $(this).closest('tr').children('td').eq(13).text().trim(),
                    pa_idprofesion: $(this).closest('tr').children('td').eq(14).text().trim(),
                    pa_fechanacimiento: $(this).closest('tr').children('td').eq(15).text().trim(),
                    pa_nombres: $(this).closest('tr').children('td').eq(16).text().trim(),
                    pa_idtipodoc: $(this).closest('tr').children('td').eq(17).text().trim(),
                    pa_apepaterno: $(this).closest('tr').children('td').eq(18).text().trim(),
                    pa_idsexo: $(this).closest('tr').children('td').eq(19).text().trim(),
                    pa_idcondicion: $(this).closest('tr').children('td').eq(20).text().trim(),
                  	//PACIENTE
                    p_nrodocumento: $(this).closest('tr').children('td').eq(21).text().trim(),
                    p_apematerno: $(this).closest('tr').children('td').eq(22).text().trim(),
                    p_idflag: $(this).closest('tr').children('td').eq(23).text().trim(),
                    p_nombres: $(this).closest('tr').children('td').eq(24).text().trim(),
                    p_nrohistoriaclinica: $(this).closest('tr').children('td').eq(25).text().trim(),
                    p_idtipodoc: $(this).closest('tr').children('td').eq(26).text().trim(),
                    p_apepaterno: $(this).closest('tr').children('td').eq(27).text().trim(),
                    p_idetnia: $(this).closest('tr').children('td').eq(28).text().trim(),
                    p_fechanacimiento: $(this).closest('tr').children('td').eq(29).text().trim(),
                    p_idestablecimiento: $(this).closest('tr').children('td').eq(30).text().trim(),
                    p_idpais: $(this).closest('tr').children('td').eq(31).text().trim(),
                    p_idsexo: $(this).closest('tr').children('td').eq(32).text().trim(),
                    // -- citas
                    numeroafiliacion: $(this).closest('tr').children('td').eq(33).text().trim(),
                    fechaatencion: $(this).closest('tr').children('td').eq(34).text().trim(),
                    estadoregistro: $(this).closest('tr').children('td').eq(35).text().trim(),
                    idups: $(this).closest('tr').children('td').eq(36).text().trim(),
                    idestablecimiento: $(this).closest('tr').children('td').eq(37).text().trim(),
                    diaedad: $(this).closest('tr').children('td').eq(38).text().trim(),
                    edadregistro: $(this).closest('tr').children('td').eq(39).text().trim(),
                    idturno: $(this).closest('tr').children('td').eq(40).text().trim(),
                    idtipedadregistro: $(this).closest('tr').children('td').eq(41).text().trim(),
                    fgdiag: $(this).closest('tr').children('td').eq(42).text().trim(),
                    mesedad: $(this).closest('tr').children('td').eq(43).text().trim(), 
                    componente: $(this).closest('tr').children('td').eq(44).text().trim(),
                    idfinanciador: $(this).closest('tr').children('td').eq(45).text().trim(),
                    annioedad: $(this).closest('tr').children('td').eq(46).text().trim(),
                    // -- EXAMEN FISICO
                    peso: $(this).closest('tr').children('td').eq(47).text().trim(),
                    talla: $(this).closest('tr').children('td').eq(48).text().trim(),
                    hemoglobina: $(this).closest('tr').children('td').eq(49).text().trim(),
                    // --DATOS DEL REGISTRO
                    idAtencion: $(this).closest('tr').children('td').eq(51).text().trim(),
                  },
                  async: false,
                  url: "?c=api&a=EnviarCita",
                  type: "POST",
                  dataType: "json",
                  success: function (r) {
                    $(r).each(function (i, v) {
                    	tds.eq(57).text(v.estadoMensaje);
                    	tds.eq(58).text(v.idCita);
                    	tds.eq(59).text(v.mensaje);
                    	tds.eq(60).text(fechaActual);
                    	if(v.estadoMensaje == 'Ok' || v.estadoMensaje == 'ok' || v.estadoMensaje == 'OK') {
                    		tr.css('background','#DCF9CF');
                    		registrados++;
                    	} else {
                    		tr.css('background','#F9CFCF');
                    		obs++;
                    	}
                      cnt++;
                      faltante--;
                      totaltt--;
                    });
                  },
                  complete: function(r){
    		            $("#procesados").val(cnt);
    		            $("#faltante").val(faltante);
    		            $("#nombre-acutla").val(nombrePaciente);
    		            $("#registrados").val(registrados);
    		            $("#observados").val(obs);
    		            porcentaje = (cnt*100/total).toFixed(0);
    		            // porcentaje = porcentaje*100;
    		            $("#dynamic")
    		            	.text(porcentaje + "% Complete")
    		              .css("width", porcentaje + "%")
    		              .attr("aria-valuenow", porcentaje);

                    if(cnt > faltante) {
                      $("#procesar").prop("disabled", true);
                      $("#buscar").prop("disabled", false);
                    }
                  },
                  error: function () {
                    // cnt++;
                    // faltante--;
                    // totaltt--;
                  }
                });
            }
          });
          break;
      }
    });  
  }







 //  function enviarUno(fila) {
 //    var dialog = swal("¿Está seguro que desea enviar este información?", {
 //        buttons: {
 //          cancel: "Cancelar",
 //          si: "Si"
 //        }
 //      }).then(value => {
 //        switch (value) {
 //          case "si":
 //            $("#lista-tabla tbody tr").each(function(){
 //              var tr = $(this).closest('tr');
 //              var tds = $(this).closest('tr').children('td');
 //              if(  fila == parseInt($(this).closest('tr').children('td').eq(0).text())) {
 //                var obs = $("#observados").val();
 //                var registrados = $("#registrados").val();
 //                var procesados = $("#procesados").val();
 //                var faltantes = $("#faltante").val();
 //                var total = $("#total").val();
 //                var porcentaje = 0;
 //                $("#nombre-acutla").val($(this).closest('tr').children('td').eq(6).text());
 //                var cod = $(this).closest('tr').children('td').eq(16).text();
 //                if(cod != "0000") {
 //                    $.ajax({
 //                      data: {
 //                        id_referencia: $(this).closest('tr').children('td').eq(1).text(),
 //                        id_cita: $(this).closest('tr').children('td').eq(2).text(),
 //                        tipo: 2, // 1= diferimiento; 2=tiempo de espera
 //                        //paciente
 //                        seguro_sis: $(this).closest('tr').children('td').eq(3).text(),
 //                        //documento
 //                        tipoDoc: $(this).closest('tr').children('td').eq(4).text(),
 //                        numero: $(this).closest('tr').children('td').eq(5).text(),
 //                        //nombre 
 //                        prenombres: $(this).closest('tr').children('td').eq(8).text(),
 //                        apellido_paterno: $(this).closest('tr').children('td').eq(9).text(),
 //                        apellido_materno: $(this).closest('tr').children('td').eq(10).text(),
 //                        //ubigeo_domicilio
 //                        departamento_id: $(this).closest('tr').children('td').eq(11).text(),
 //                        provincia_id: $(this).closest('tr').children('td').eq(12).text(),
 //                        distrito_id: $(this).closest('tr').children('td').eq(13).text(),
 //                        // registro
 //                        inicio: $(this).closest('tr').children('td').eq(14).text(),
 //                        fin: $(this).closest('tr').children('td').eq(15).text(),
 //                        categoria: $("#categoria-busqueda").val(),
 //                        token: $("#valor-token").val(),
 //                        tipoEnvio : $("#tipo-envio").val(),
 //                      },
 //                      url: "?c=api&a=EnviarCita",
 //                      type: "POST",
 //                      dataType: "json",
 //                      success: function (r) {
 //                        $(r).each(function (i, v) {
 //                          tds.eq(17).text(v.mensaje);
 //                          tds.eq(16).text(v.codRes);
 //                          if(v.codRes != "0000") {
 //                            obs++;
 //                            $("#observados").val(obs);
 //                            tr.css('background','#F9CFCF');
 //                          } else {
 //                            registrados++;
 //                            $("#registrados").val(registrados);
 //                            tr.css('background','#DCF9CF');
 //                          }
 //                        });
 //                      },
 //                      complete: function(r){
                        
 //                      },
 //                      error: function () {
 //                        tds.eq(17).text("ERROR AL INSERTAR LOS DATOS ");
 //                      }
 //                    });
 //                    if(cod == "") {
 //                      procesados++;
 //                      faltantes--;
 //                      $("#procesados").val(procesados);
 //                      $("#faltante").val(faltantes);
 //                      porcentaje = (procesados/total).toFixed(0);
 //                      var p = procesados/total;
 //                      porcentaje = p*100;
 //                      $("#dynamic")
 //                        .css("width", porcentaje + "%")
 //                        .attr("aria-valuenow", porcentaje)
 //                        .text(porcentaje + "% Complete");
 //                    } 
 //                } else {
 //                  swal("Mensaje", "El indicador ya fue enviado con exito anteriormente", "warning");
 //                }
 //              } 
 //            });
 //            break;
 //        }
 //      });  
 //  }



 //  function verDatos(fila) { 
 //    var datos = ""; 
 //    $("#lista-tabla tbody tr").each(function(){
 //      var tr = $(this).closest('tr');
 //      var tds = $(this).closest('tr').children('td');
 //      if(tds.eq(0).text() == fila) {
 //        datos = '<tr><td>Tipo: </td><td>2</td></tr>';
 //        datos += '<tr><td>Referencia: </td><td>'+tds.eq(1).text()+'</td></tr>';
 //        datos += '<tr><td>Cita: </td><td>'+tds.eq(2).text()+'</td></tr>';
 //        datos += '<tr><td>Tipo documento</td><td>'+tds.eq(23).text()+'-'+tds.eq(4).text()+'</td></tr>';
 //        datos += '<tr><td>N° documento</td><td>'+tds.eq(5).text()+'</td></tr>';
 //        datos += '<tr><td>Nombres</td><td>'+tds.eq(8).text()+'</td></tr>';
 //        datos += '<tr><td>Apellidos</td><td>'+tds.eq(9).text()+' '+tds.eq(10).text()+'</td></tr>';  
 //        datos += '<tr><td>Atención</td><td>'+tds.eq(7).text()+'-'+tds.eq(3).text()+'</td></tr>';
 //        datos += '<tr><td>Fecha inicio</td><td>'+tds.eq(14).text()+'</td></tr>';  
 //        datos += '<tr><td>Fecha final</td><td>'+tds.eq(15).text()+'</td></tr>';  
 //        datos += '<tr><td>Domicilio</td><td>'+tds.eq(22).text()+'</td></tr>';  
 //        datos += '<tr><td>Departamento</td><td>'+tds.eq(21).text()+'-'+tds.eq(11).text()+'</td></tr>';
 //        datos += '<tr><td>Provincia</td><td>'+tds.eq(20).text()+'-'+tds.eq(12).text()+'</td></tr>';
 //        datos += '<tr><td>Distrito</td><td>'+tds.eq(19).text()+'-'+tds.eq(13).text()+'</td></tr>';
 //      }
 //    });
 //    $("#lista-enviar").html(datos);
 //    $("#modalPdf").modal({show: true,  Backdrop: 'static'});
 //  }
 //  function pacientes() {
 //      var cnt = 0;
 //      $.ajax({
 //        data: {
 //        },
 //        url: '?c=api&a=Pacientes',
 //        type: 'POST',
 //        dataType: 'json',
 //        beforeSend: function() {
 //          // $('#hijo').show();
 //        },
 //        success: function(r) {
 //          $(r).each(function(i, v) {
 //            cnt++;
 //            var dts = "";
 //            dts +='<tr style="font-size: 10px">';
 //              dts +='<td >'+cnt+'</td>'; //0
 //              dts +='<td>'+v.NroDocumento+'</td>'; //1
 //              dts +='<td >'+v.PrimerNombre+' '+v.ApellidoPaterno+'</td>';// 2
 //              dts +='<td >'+v.IdReniec+'</td>';//3
 //              dts +='<td style="display: none">'+v.IdPaciente+'</td>';//4
 //              dts +='<td ></td>';//5

 //            dts +='</tr>';
 //            $("#tabla-paciente tbody").append(dts);
 //          });
 //        },
 //        complete: function() {
 //        },
 //        error: function() {}
 //      });
 //  } 
 // function corregirUbigeo() {
 //  	var ubigeo = "";
 //    $("#tabla-paciente tbody tr").each(function() {

 //      var tds = $(this).closest('tr').children('td');
 //      var dni = tds.eq(1).text();
 //      var id = tds.eq(4).text();
 //      // $(this).closest('tr').children('td').eq(4).text("Uni"+dni);
 //      $.ajax({
 //        data: {
 //          dni: dni,
 //          id:id,
 //        },
 //        url: '?c=api&a=obtenerDatosReniec',
 //        type: 'POST',
 //        dataType: 'json',
 //        beforeSend: function() {
        
 //        },
 //        success: function(r) {
 //          $(r).each(function(i, v) {
 //            ubigeo = rc(v.udep)+''+rc(v.upro)+''+rc(v.udis);
 //            // tds.eq(5).text("Nuevo "+ubigeo);
 //          });
 //        },
 //        complete: function() {
 //          // vubigeo = rc(v.udep)+''+rc(v.upro)+''+rc(v.udis);
 //          $.ajax({
 //            data: {
 //              dni: dni,
 //              id:id,
 //              ubigeo: ubigeo,
 //            },
 //            url: '?c=api&a=actualizarUbigeo',
 //            type: 'POST',
 //            dataType: 'json',
 //            beforeSend: function() {
 //            },
 //            success: function(r) {
 //              $(r).each(function(i, v) {
 //                if(v.id > 0){
 //                  tds.eq(5).text("Cambiado con exito");
 //                } else {
 //                  tds.eq(5).text("error ");
 //                }
 //              });
 //            },
 //            complete: function() {
              
 //            },
 //            error: function() {}
 //          }); 
 //        },
 //        error: function() {}
 //      });
 //    });
 // }
 function rc(a) {
    r = a.replace(/['"]+/g, "");
    return r;
 }