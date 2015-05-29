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
$nombres= $_POST['nombres'];
$apellidos= $_POST['apellidos'];
$email= $_POST['email'];
$cedula= $_POST['cedula'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];



$query = "INSERT INTO personas(cedula,nombres,apellidos,email,direccion,telefono)VALUES('$cedula','$nombres','$apellidos','$email','$direccion','$telefono')";  
$bd->ejecutar($query);

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
             <h1 align="center"> RESULTADO DE LA INSERCION DE LA SOLICITUD - SIGMEP </h1>
          </div>
          <hr>
          <div class="row">
		          <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
		              <img src="../img/Correcto.png" width="100%">
		          </div>
		          
		          <div id="contenido" class="small-12 large-6 columns" id="contenido3"  > 
		              <?php
		             
		                echo "<h4> El registro de los datos de la persona".$nombres." ha sido ejecutado con exitoso</h4>
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
                
                <h4 align="left"> El registro de los datos de la persona ha sido exitoso.<br> 
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
                        
						$nombres= $_POST['nombres'];
						$apellidos= $_POST['apellidos'];
						$email= $_POST['email'];
						$cedula= $_POST['cedula'];
						$direccion= $_POST['direccion'];
						$telefono= $_POST['telefono'];

                        echo "<tr>";                      
                        echo "<td> Nombres </td>";
                        echo "<td>".$nombres."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Apellidos </td>";
                        echo "<td>".$apellidos."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td>Correo Electronico </td>";
                        echo "<td>".$email."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Numero De Cedula</td>";
                        echo "<td>".$cedula."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Direccion De Residencia</td>";
                        echo "<td>".$direccion."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Telefono</td>";
                        echo "<td>".$telefono."</td>";
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


