<?php
    $hostname="localhost";
    $usuario="root";
    $password="1234";
    $basededatos="sigmep2";
    $mysqli = new mysqli($hostname, $usuario, $password,$basededatos);
        if ( mysqli_connect_errno() ) {
            echo "Error de conexión a la BD: ".mysqli_connect_error();
            exit();
        }   
   
    $query="SELECT * from  usuarios";
    $resultado=$mysqli->query($query)or die ($mysqli‐>error. " en la línea ".(__LINE__‐1));
     ?>
 
<table border="2px">
  <thead>
    <tr>      
      <td>NOMBRE DE USUARIO</td>
      <td>EMAIL</td>
      <td>PASSWORD</td>
      <td>TIPO DE USUARIO</td>
    </tr>
  </thead>
  <tbody>
  
  <?php  
    
    $numregistros=$resultado->num_rows;

    if($numregistros == 0){
                echo "<h6 align='justify'> NO HAY USUARIOS REGISTRADOS EN ESTOS MOMENTOS</h6>";
                                                  
                  
                }else{  

                    foreach($resultado as $user)
                        { 
                        echo "<tr> "; 
                          echo "<td>".$user['nombre']."</td> "; 
                          echo "<td>".$user['email']."</td> ";
                          echo "<td>".$user['password']."</td> ";
                          echo "<td>".$user['tipo_Usuario']."</td> ";                          
                        echo "</tr> ";                                  
                    }                                        
                }
                $resultado->free();
    ?>
</tbody>
</table>
  


   