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
   
    $query="SELECT * from  personas";
    $resultado=$mysqli->query($query)or die ($mysqli‐>error. " en la línea ".(__LINE__‐1));
    $numregistros=$resultado->num_rows;

    if($numregistros == 0){
                echo "<h6 align='justify'> NO HAY PERSONAS REGISTRADAS EN EL SISTEMA</h6>";
                                                  
                  
                }else{  
                    echo "<table border='2px'>
                              <thead>
                                <tr>      
                                  <td>CEDULA</td>
                                  <td>NOMBRES</td>
                                  <td>APELLIDOS</td>
                                  <td>EMAIL</td>
                                  <td>DIRECCION</td>
                                  <td>TELEFONO</td>
                                  <td>OPCIONES</td>
                                 </tr>
                              </thead>
                              <tbody>";

                    foreach($resultado as $persona)
                        { 

                        $i=$i +1;
                        echo "<tr> "; 
                          echo "<td>".$persona['cedula']."</td> "; 
                          echo "<td>".$persona['nombres']."</td> ";
                          echo "<td>".$persona['apellidos']."</td> ";
                          echo "<td>".$persona['email']."</td> ";                          
                          echo "<td>".$persona['direccion']."</td> ";                          
                          echo "<td>".$persona['telefono']."</td> ";
                          echo '<td>
                                 <a href="#" data-dropdown="hover'.$i.'" data-options="is_hover:true; hover_timeout:5000">
                                 <input type="radio" name="idPersona" value="'.$persona['cedula'].'" >
                               Acciones</a>
                                <ul id="hover'.$i.'" class="f-dropdown" data-dropdown-content>
                                  <li><a href="#"><input type="radio" name="idPersona" value="'.$persona['cedula'].'" >Ver</a></li>
                                  <li><a href="#">Borrar</a></li>
                                  <li><a href="#">Editar</a></li>
                                </ul>


                                </td>' ;


                         echo "</tr> ";
                          
                         
      
      

                                                         
                    }  
                    echo "</tbody>";
                    echo "</table>";                                       
                }
                $resultado->free();
    ?>

  


   