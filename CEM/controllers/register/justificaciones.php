<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>CONSULTA DE USUARIOS</title>
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

$mysqli = new mysqli($hostname, $usuario, $password, $basededatos);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

session_cache_limiter('nocache,private');
session_name('pruebas');
session_start(); 
$ejecutor=$_SESSION['nombre'];
$fechaJustificacion= $_POST['fechaSolicitud'];
$valor= $_POST['valor'];
$personaSolicitante= $_POST['personaSolicitante'];
$areaSolicitante= $_POST['areaSolicitante'];
$que= $_POST['que'];
$paraque= $_POST['paraque'];
$porque= $_POST['porque'];
$plazo= $_POST['plazo'];
$observaciones= $_POST['observaciones'];
$resultadoEsperado= $_POST['resultadoEsperado'];
$especificaciones= $_POST['especificaciones'];


$query = "INSERT INTO justificaciones(idJustificaciones,fechaJustificacion,valorContrato,que,porque,paraque,plazoContrato,observaciones,resultadoEsperado,especificacionesContrato,fechaAutorizacion,Areas_idAreas,Personas_cedula,usuarioQueRealiza) 
VALUES(NULL,'$fechaJustificacion','$valor','$que','$porque','$paraque','$plazo','$observaciones','$resultadoEsperado','$especificaciones',NULL,'$areaSolicitante','$personaSolicitante','$ejecutor')";  
$mysqli->query($query);
printf ("Nuevo registro con el id %d.\n", $mysqli->insert_id);
?>
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
          <div class="row">
		          <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
		              <img src="../img/Correcto.png" width="100%">
		          </div>
		          
		          <div id="contenido" class="small-12 large-6 columns" id="contenido3"  > 
		              <?php
		             
		                echo "<h4> La solicitud de diligenciamiento de contrato
		                realizada para el contrato de ".$valor." ha sido registrada con exito 
		                en la base de datos de SIGMEP</h4>
                    <br> 
                    <h4 align='center'>Opciones Respecto A La Insercion</h4>
                    <br>

                    ";
		             
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
                        

                        echo "<tr>";                      
                        echo "<td> Fecha De Justificacion</td>";
                        echo "<td>".$fechaJustificacion."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Valor Del  Contrato</td>";
                        echo "<td>".$valor."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td>Cedula Persona Solicitante</td>";
                        echo "<td>".$personaSolicitante."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Id Area Solicitantes</td>";
                        echo "<td>".$areaSolicitante."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Que Se Va A Hacer</td>";
                        echo "<td>".$que."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Para Que Se Va A Hacer</td>";
                        echo "<td>".$paraque."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Por Que Se Va A Hacer</td>";
                        echo "<td>".$porque."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Plazo De Ejecion Del Contrato</td>";
                        echo "<td>".$plazo."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Observaciones De La Justificacion</td>";
                        echo "<td>".$observaciones."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Resultado Esperado</td>";
                        echo "<td>".$resultadoEsperado."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Especificaciones</td>";
                        echo "<td>".$especificaciones."</td>";
                        echo "</tr>";
                        ?>   
                        </table>
                    </div>
                    <div class="small-12 large-12 columns" align="left"  id="contenido"> 
                  
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

