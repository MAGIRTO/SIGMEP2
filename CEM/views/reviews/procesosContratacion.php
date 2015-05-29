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
   
    $query="SELECT * from  procesosdecontratacion";
    $resultado=$mysqli->query($query)or die ($mysqli‐>error. " en la línea ".(__LINE__‐1));
     ?>
 

  
  <?php  
    
    $numregistros=$resultado->num_rows;

    if($numregistros == 0){
                echo "<h6 align='justify'> NO HAY PROCESOS DE CONTRATACION</h6>";
                                                  
                  
                }else{  
                  echo "<table border='2px'>
                              <thead>
                                <tr>      
                                  <td>ID</td>
                                  <td>DESCRIPCION</td>
                                  <td>ESTADO</td>
                                  <td>JUSTIFICACION</td>
                                  <td>SOLICITUD CONTRATO</td>
                                  <td>CONTRATO</td>
                                 </tr>
                              </thead>
                              <tbody>";

                    foreach($resultado as $proceso)
                        { 

                        
                        echo "<tr> "; 
                          echo "<td>".$proceso['idprocesosDeContratacion']."</td> "; 
                          echo "<td>".$proceso['descripcionProceso']."</td> ";
                          echo "<td>".$proceso['estadoProceso']."</td> ";
                          echo "<td>".$proceso['Justificaciones_idJustificaciones']."</td> ";                          
                          echo "<td>".$proceso['SolicitudContratos_idSolicitudContratos']."</td> ";                          
                          echo "<td>".$proceso['Contratos_idContratos']."</td> ";                          
                         echo "</tr> ";
                                                         
                    }   
                    echo "</tbody>";
                        echo "</table>";                                      
                }
                $resultado->free();
    ?>

  


   