
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>REGISTRO DE CONTRATOS</title>
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


                $codigo= $_POST['codigo'];
                $tipoContrato= $_POST['tipoContrato'];
                $fechaContrato= $_POST['fechaContrato'];
                $valor= $_POST['valor'];
                $plazo= $_POST['plazo'];
                $nitContratista= $_POST['nitContratista'];
                $contratante= $_POST['contratante'];
                $cedulaSupervisor= $_POST['cedulaSupervisor'];
                $fechaInicio= $_POST['fechaInicio'];
                $fechaFin= $_POST['fechaFinalizacion'];
                $objetoContrato= $_POST['objetoContrato'];
                $formaPago= $_POST['formaPago'];
                $alcance= $_POST['alcance'];

                $query= "INSERT INTO contratos(
                    idContratos,
                    fechaElaboracion,
                    tipoContrato,
                    valorContrato,
                    plazoEjecucion,
                    fechaInicio,
                    fechaFin,
                    objetoContrato,
                    formaDePago,
                    alcance,
                    contratante,
                    contratista,
                    supervisor,
                    usuarioQueRealiza) 
                    VALUES(
                         '$codigo',
                        '$fechaContrato',
                        '$tipoContrato',
                        '$valor',
                        '$plazo',
                        '$fechaInicio',
                        '$fechaFin',
                        '$objetoContrato',
                        '$formaPago',
                        '$alcance',
                        '$contratante',
                        '$nitContratista',
                        '$cedulaSupervisor',
                        '$ejecutor')";
                 $mysqli->query($query)or die ($mysqli->error. " en la línsdfgaea ".(__LINE__-1));
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
                realizada para el contrato de ".$tipoContrato." ha sido registrada con exito 
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
                        <?php 
                        // echo "<tr>";                      
                        // echo "<td> Fecha De Solicitud</td>";
                        // echo "<td>".$fechaSolicitud."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Tipo De Contrato</td>";
                        // echo "<td>".$tipoContrato."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td>Referencia De La Solicitud</td>";
                        // echo "<td>".$referenciaSolicitud."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Numero De Certificado Presupuestal</td>";
                        // echo "<td>".$numeroCertificado."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Fecha Del Certificado Presupuestal</td>";
                        // echo "<td>".$fechaCertificado."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Numero De Compromiso Presupuestal</td>";
                        // echo "<td>".$numeroCompromiso."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Fecha De Compromiso Presupuestal</td>";
                        // echo "<td>".$fechaCompromiso."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Estado De La Seguridad Social</td>";
                        // echo "<td>".$seguridadSocial."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Observaciones De La solicitud</td>";
                        // echo "<td>".$observaciones."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Fecha De Inicio Del Contrato</td>";
                        // echo "<td>".$fechaInicioContrato."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Fecha De Finalizacion Del Contrato</td>";
                        // echo "<td>".$fechaFinContrato."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Contratista</td>";
                        // echo "<td>".$contratista."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td>Persona Encargada</td>";
                        // echo "<td>".$encargado."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Area Solicitante</td>";
                        // echo "<td>".$areaSolicitante."</td>";
                        // echo "</tr>";
                        // echo "<tr>";                      
                        // echo "<td> Nombre Del Supervisor</td>";
                        // echo "<td>".$nombreSupervisor."</td>";
                        // echo "</tr>";
                        ?>
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