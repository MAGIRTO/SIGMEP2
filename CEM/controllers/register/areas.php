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
/*Incluimos el fichero de la clase*/
require 'Db.class.php';

/*Creamos la instancia del objeto. Ya estamos conectados*/
$bd=Db::getInstance();
$nombre= $_POST['nombre'];
$cedulaJefe= $_POST['jefe'];



$query = "INSERT INTO areas (idAreas,nombreAreas,jefe) VALUES(NULL,'$nombre','$cedulaJefe')";  
$exito=$bd->ejecutar($query);




/*Creamos una query sencilla*/

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
             session_cache_limiter('nocache,private');
			       session_name('pruebas');
			       session_start(); 
            echo '            
              <a href="logout.php">
              <h6 align="rigth">'.$_SESSION['nombre'].'(salir <img src="../img/logout.png" width="20px"> ) </h6></a>';
             ?>
        </div>
        <hr>
      </div>
          <div class="small-12 large-12 medium-12  columns">
             <h1 align="center"> RESULTADO DE LA INSERCION DE AREA - SIGMEP </h1>
          </div>
          <hr>
          <div class="row">
		              <?php
                    if( $exito ) { 
                        echo '<div class="small-12 large-6 columns" id="contenido3" align="middle" > 
                                  <img src="../img/Correcto.png" width="100%">
                              </div>
                               <div id="contenido" class="small-12 large-6 columns" id="contenido3"  >';    
                          echo "
                          <h4> El registro del area denominada como: ".$nombre." ha sido ejecutado con exito</h4>
                          <br> 
                          <h4 align='center'>Opciones Respecto A La Insercion</h4>
                          <br>
                          </div>                          
                          ";
                          echo'<div class="small-12 large-6 columns" align="left"  id="contenido"> 
                                  <a href="#" data-reveal-id="justificacion" class="button round expand">
                                  <img src="../img/buscar.png" width="30px">
                                  VER DETALLES DE LA INSERCION
                                  </a>
                                  <a href="../index2.php" class="button round expand">
                                  ACEPTAR
                                  </a>
                             </div>';
                        } else { 

                           
                          echo '<div class="small-12 large-6 columns" id="contenido3" align="middle" > 
                                  <img src="../img/incorrecto.png" width="100%">
                              </div>
                              
                              <div id="contenido" class="small-12 large-6 columns"   >'   

                              ;   
                              echo "<h4> El registro del area denominada como: ".$nombre." no se ha realizado correctamente</h4>
                          <br>  </div>                          
                          "; 
                          echo'<div class="small-12 large-6 columns" align="left"  id="contenido"> 
                                  <a href="#" data-reveal-id="justificacion" class="button round expand">
                                  <img src="../img/buscar.png" width="30px">
                                  VER DETALLES DEL ERROR
                                  </a>
                                  <a href="../index2.php" class="button round expand">
                                  ACEPTAR
                                  </a>
                             </div>';

                        } 
		              ?>
		          
		          
          </div>
    </div>
    <div id="justificacion" class="reveal-modal" data-reveal aria-labelledby="consultaPorNombre1" aria-hidden="true" role="dialog">
          <h2 id="consultaPorNombre1">DATOS REGISTRADOS EN LA BASE DE DATOS</h2>
            <p> <?php 
                      if( $exito ) { 

                           echo '<h4 align="left"> El registro de los datos de la nueva area ha sido exito.<br> 
                           A continuacion  se muestran los datos registrados en SIGMEP</h4>
                     <div class="small-12 large-12  columns" id="contenido">
                         <table  width="100%" border=2>
                            <thead>
                                <tr>
                                <th>CAMPO</th> 
                                <th>INFORMACION</th> 
                                </tr>
                            </thead>';
                          $nombre= $_POST['nombre'];
                        $cedulaJefe= $_POST['jefe'];
                        
                        echo "<tr>";                      
                        echo "<td> Nombre Del Area </td>";
                        echo "<td>".$nombre."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Cedula Del Jefe </td>";
                        echo "<td>".$cedulaJefe."</td>";
                        echo "</tr>
                         </table>
                    </div>";
                        
                        } else { 
                            $error=mysql_error();
                           echo " <h1> Se Ha Presentado el Siguiente error con la Insercion,: </h1> <br>
                           <h6>".$error." </h6>";

                           
                        } 

                       
            						
                        ?>   
                       
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


