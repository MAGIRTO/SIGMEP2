
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>SOLICITUD DE CONTRATOS</title>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
        <link rel="stylesheet" href="../css/foundation.css" />
        <link rel="stylesheet" href="../css/normalize.css" />
        <script src="../js/vendor/modernizr.js"></script>
    </head>
    <body>
    <?php
    $hostname="localhost";
    $usuario="root";
    $password="1234";
    $basededatos="sigmep";
    $mysqli = new mysqli($hostname, $usuario, $password,$basededatos);
        if ( mysqli_connect_errno() ) {
            echo "Error de conexión a la BD: ".mysqli_connect_error();
            exit();
        }     
    session_cache_limiter('nocache,private');
    session_name('pruebas');
    session_start(); 
    $ejecutor=$_SESSION['nombre'];
                // <--VARIABLES PAGO SEGURIDAD SOCIAL--¡>                         
                $mes= $_POST['mes'];
                $planillPSS= $_POST['planillPSS'];
                $ibcPSS= $_POST['ibcPSS'];
                $fechaPSS= $_POST['fechaPSS'];
                $query="INSERT INTO pagosss(
                     idPagosSS,
                     Mes,
                     Planilla,
                     IBC,
                     fechaPago) 
                     VALUES (NULL,
                        $mes,
                        $planillPSS,
                        $ibcPSS,
                        $fechaPSS)";

                     $mysqli->query($query)or die ($mysqli->error. " en la línea ".(__LINE__-1));
                     $idpagoss=$mysqli->insert_id;




                // <--VARIABLES PAGO FACTURA--¡>
                $numFactura= $_POST['numFactura'];
                $fechaFactura= $_POST['fechaFactura'];
                $valorFactura= $_POST['valorFactura'];

                $query="INSERT INTO pagofacturas(
                     idPagoFacturas,
                     numero,
                     fechaFactura,
                     valorFactura)
                     VALUES (NULL,
                        $numFactura,
                        $fechaFactura,
                        $valorFactura)";

                     $mysqli->query($query)or die ($mysqli->error. " en la línea ".(__LINE__-1));
                     $idfactura=$mysqli->insert_id;



                 // <--VARIABLES PARA LAS ADICIONES--¡>
                $observacionesAdicion= $_POST['observacionesAdicion'];
                $tiempoAdicion= $_POST['tiempoAdicion'];
                $dineroAdicion= $_POST['dineroAdicion'];

                 $query="INSERT INTO adiciones(
                     idAdiciones,
                     observaciones,
                     tiempo,
                     dinero)
                     VALUES (NULL,
                        '$observacionesAdicion',
                        '$tiempoAdicion',
                        '$dineroAdicion')";

                     $mysqli->query($query)or die ($mysqli->error. " en la línea ".(__LINE__-1));
                     $idadicion=$mysqli->insert_id;
             

                 // <--VARIABLES PARA EL ESTADO TEMPORAL-¡>
                $estadoContrato= $_POST['estadoContrato'];
                $tiempoTranscurridoContrato= $_POST['tiempoTranscurridoContrato'];
                $porcentajeTTC= $_POST['porcentajeTTC'];
                $tiempoPorTranscurrirContrato= $_POST['tiempoPorTranscurrirContrato'];
                $porcentajeTPTC= $_POST['porcentajeTPTC'];

                 $query="INSERT INTO estadotiempos(
                    idEstadoTiempos,
                    estadoContrato,
                    tiempoTranscurrido,
                    porcentajeTT,
                    tiempoPorTranscurrir,
                    porcentajeTPT)               
                     VALUES (NULL,
                        '$estadoContrato',
                        '$tiempoTranscurridoContrato',
                        '$porcentajeTTC',
                        '$tiempoPorTranscurrirContrato',
                        '$porcentajeTPTC')";

                     $mysqli->query($query)or die ($mysqli->error. " en la línea ".(__LINE__-1));
                     $idestadotiempos=$mysqli->insert_id;



                    // <--VARIABLES DE INFORMACION ACUMULADA-¡>
                $saldoFacturado= $_POST['saldoCF'];
                $valorEjecutado= $_POST['valorCE'];
                $saldoPorFacturar= $_POST['saldoCPF'];
                $valorPorEjecutar= $_POST['valorCPE'];

                $query="INSERT INTO informacionacumulada(
                     idInformacionAcumulada,
                     saldoFacturado,
                     valorEjecutado,
                     saldoPorFacturar,
                     valorPorEjecutar)              
                     VALUES (NULL,
                        '$saldoFacturado',
                        '$valorEjecutado',
                        '$saldoPorFacturar',
                        '$valorPorEjecutar')";

                     $mysqli->query($query)or die ($mysqli->error. " en la línea ".(__LINE__-1));
                     $idinfoacumulada=$mysqli->insert_id;




                // <--VARIABLES GENERALES DEL INFORME-¡>
                $conceptoInforme= $_POST['conceptoInforme'];
                $fechaInforme= $_POST['fechaInforme'];
                $periodoInforme= $_POST['periodoInforme'];
                $estadoFinancieroContrato= $_POST['estadoFinancieroContrato'];
 

                    $query="INSERT INTO informes(
                        idInformes,
                        concepto,
                        fechaInforme,
                        periodoInforme,
                        estadoFinanciero,
                        InformacionAcumulada_idInformacionAcumulada,
                        id_EstadoTiempos,
                        id_PagosSS,
                        id_Adiciones,
                        id_PagoFacturas)               
                     VALUES (
                         1,
                        '$conceptoInforme',
                        '$fechaInforme',
                        '$periodoInforme',
                        '$estadoFinancieroContrato',
                         '$idinfoacumulada',
                         '$idestadotiempos',
                         '$idpagoss',
                         '$idadicion',
                         '$idfactura')";
                     $mysqli->query($query)or die ($mysqli->error. " en la línea ".(__LINE__-1));
                     $idInforme=$mysqli->insert_id;
                     $idContrato=$_POST['idContrato'];

                     $query="INSERT INTO informesdecontratos(
                        Contratos_idContratos,
                        Informes_idInformes)               
                     VALUES (
                         idContrato,
                        '$idInforme')";
                     $mysqli->query($query)or die ($mysqli->error. " en la línea ".(__LINE__-1));
                    


             
                


                 

               //  $query="INSERT INTO detallecontratos(
               //         idDetalleContratos, 
               //         objetoContrato, 
               //         obligacionesContratista, 
               //         obligacionesContratante)
               //     VALUES (
               //         NULL,
               //         '$objetoContrato',
               //         '$obligacionesContratista',
               //         '$obligacionesContratante')";
               //   $mysqli->query($query)or die ($mysqli->error. " en la línea ".(__LINE__-1));

               // $iddetalle=$mysqli->insert_id;

               //  $query = "INSERT INTO solicitudcontratos (
               //      idSolicitudContratos,
               //      fechaSolicitud,
               //      tipoContrato,
               //      referenciaSolicitud, 
               //      numeroCertificadoP,
               //      fechaCertificadoP, 
               //      numeroCompromisoP,
               //      fechaCompromisoP, 
               //      estadoSeguridadSocial,
               //      observacionesSolicitud, 
               //      fechaInicio, 
               //      fechaFin, 
               //      contratista, 
               //      cedulaEncargado, 
               //      idAreaSolicitante,
               //      cedulaSupervisor,
               //      detalleContrato, 
               //      ValorContrato,   
               //      usuarioQueRealiza)  
               //      VALUES(
               //           NULL,
               //          '$fechaSolicitud',
               //          '$tipoContrato',
               //          '$referenciaSolicitud',
               //          '$numeroCertificado',
               //          '$fechaCertificado',
               //          '$numeroCompromiso',
               //          '$fechaCompromiso',
               //          '$seguridadSocial',
               //          '$observaciones',
               //          '$fechaInicioContrato',
               //          '$fechaFinContrato',
               //          '$contratista',
               //          '$encargado',
               //          '$areaSolicitante',
               //          '$nombreSupervisor',
               //          $iddetalle,
               //          $idvalor,
               //          '$ejecutor')";
               //   $mysqli->query($query)or die ($mysqli->error. " en la línea ".(__LINE__-1));
    ?>
    <!-- CABECERA DEL SITIO WEB -->
    <div class="row" id="header">
      <div class="small-12 large-3 columns" align="middle" >    
        <img src="../img/procesos.png"  width="350"  >
      </div> 
       <div class="small-12 large-6 columns" align="middle" >    
        <img src="../img/logo.png"  width="350"  >
      </div> 
      <div class="small-12 large-3 columns" align="middle" >    
        <img src="../img/procesos2.png"  width="80%"  >
      </div> 
    </div> 
    
    <div class="row" id="contenedor">

          <!-- AREA PARA LA SESION -->
      <div class="row" >
        <div class="small-12 large-11 columns" align="right" >
            <?php
            echo '            
              <a href="logout.php">
              <h6 align="rigth">'.$_SESSION['nombre'].'(salir <img src="../img/logout.png" width="20px"> ) </h6></a>';
            ?>
        </div>
        <hr>
      </div>
          <div class="small-12 large-12 medium-12  columns">
             <h1 align="center"> RESULTADO DE LA INSERCION DE LA SOLICITUD - SIGMEP </h1>
          </div>
          <hr>
          <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
              <img src="../img/Correcto.png">
          </div>
          <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
              <?php
                echo "<h4> La solicitud de diligenciamiento de contrato
                realizada para el contrato de  ha sido registrada con exito 
                en la base de datos de SIGMEP</h4>";
              ?>
          </div>
           <div class="small-12 large-6 columns" align="left"  id="contenido"> 
            <a href="#" data-reveal-id="justificacion" class="button round expand">
            <img src="../img/buscar.png" width="30px">
            VER DETALLES DE LA INSERCION
            </a>
            <a href="../index2.php" class="button round expand">
            ACEPTAR
            </a>
        </div>         
    </div>
    <div id="justificacion" class="reveal-modal" data-reveal aria-labelledby="consultaPorNombre1" aria-hidden="true" role="dialog">
          <h2 id="consultaPorNombre1">DATOS REGISTRADOS EN LA BASE DE DATOS</h2>
            <p>
                <h4 align="left"> La solicitud realizada para  el contrato ha sido exitosa. 
                A continuacion  se muestran los datos registrados en SIGMEP</h4>
                     <div class="small-12 large-12  columns" id="contenido">
                      
                         <table  width="100%" border=2>
                            <thead>
                                <tr>
                                <th>CAMPO</th> 
                                <th>INFORMACION</th> 
                                </tr>
                            </thead>
                      
                     </table>
                     
                    </div>
                    <div class="small-12 large-6 columns" align="left"  id="contenido"> 
                        <a href="../index2.php" class="button round expand">
                        ACEPTAR
                        </a>
                    </div>
            </p>                          
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    </body>
</html>