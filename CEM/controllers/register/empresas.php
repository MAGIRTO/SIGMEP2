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
require 'Db.class.php';

/*Creamos la instancia del objeto. Ya estamos conectados*/
$bd=Db::getInstance();
$idEmpresa= $_POST['idEmpresa'];
$nombreEmpresa= $_POST['nombreEmpresa'];
$nombreRepresentante= $_POST['nombresRepresentante'];
$apellidoRepresentante= $_POST['apellidosRepresentante'];
$cedulaRepresentante= $_POST['cedulaRepresentante'];
$lugarExpedicion= $_POST['lugarExpedicion'];
$telefonoEmpresa= $_POST['telefonoEmpresa'];
$faxEmpresa= $_POST['faxEmpresa'];
$direccionEmpresa= $_POST['direccionEmpresa'];
$cargo= $_POST['cargo'];
$query = "INSERT INTO representantes(cedula,lugarExpedicion,nombreRepresentantes,apellidoRepresentantes,cargoRepresentante)
VALUES('$cedulaRepresentante','$lugarExpedicion','$nombreRepresentante','$apellidoRepresentante','$cargo')";  
$bd->ejecutar($query);
$query = "INSERT INTO empresas(idEmpresa,nombreEmpresa,Representantes_cedulaRepresentantes,fax,telefono,direccion)
VALUES('$idEmpresa','$nombreEmpresa','$cedulaRepresentante','$faxEmpresa','$telefonoEmpresa','$direccionEmpresa')";  
$bd->ejecutar($query);
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
		          <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
		              <img src="../img/Correcto.png" width="100%">
		          </div>
		          <div id="contenido" class="small-12 large-6 columns" id="contenido3"  > 
		              <?php
		                echo "<h4> El registro de la empresa: ".$nombreEmpresa." ha sido ejecutado con exito</h4>
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
                <h4 align="left"> El registro de los datos de la nueva area ha sido exito.<br> 
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

                       
						$idEmpresa= $_POST['idEmpresa'];
						$nombreEmpresa= $_POST['nombreEmpresa'];
						$nombreRepresentante= $_POST['nombresRepresentante'];
						$apellidoRepresentante= $_POST['apellidosRepresentante'];
						$cedulaRepresentante= $_POST['cedulaRepresentante'];
						$lugarExpedicion= $_POST['lugarExpedicion'];
						$cargo= $_POST['cargo'];
                        
                        echo "<tr>";                      
                        echo "<td> Id De La Empresa </td>";
                        echo "<td>".$idEmpresa."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Nombre De La Empresa </td>";
                        echo "<td>".$nombreEmpresa."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Nombres Del Representante Legal </td>";
                        echo "<td>".$nombreRepresentante."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Apellidos Del Representante Legal </td>";
                        echo "<td>".$apellidoRepresentante."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Numero De Cedula Del Representante Legal </td>";
                        echo "<td>".$cedulaRepresentante."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td>Lugar De Expedicion De La Cedula</td>";
                        echo "<td>".$lugarExpedicion."</td>";
                        echo "</tr>";
                        echo "<tr>";                      
                        echo "<td> Cargo Del Representante Legal </td>";
                        echo "<td>".$cargo."</td>";
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

