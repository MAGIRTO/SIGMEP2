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
    
    <div class="row" id="center2">
        <!-- OPCIONES DE CONSULTA -->
        <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
            <img src="../img/logo.png">
        </div>
        <div class="small-12 large-5 columns" align="left"  id="contenido2"> 
           <div class="small-12 large-12 columns" align="left" > 
                <a href="#" data-reveal-id="listadoUsuarios" class="button round expand">
                <img src="../img/buscar.png" width="30px">
                VER USUARIOS REGISTRADOS
                </a>
           </div>
           <div class="small-12 large-12 columns" align="left" > 
                <a href="#" data-reveal-id="consultaPorNombre" class="button round expand">
                <img src="../img/buscar.png" width="30px">
                BUSCAR USUARIO POR NOMBRE
                </a>
           </div>
           <div class="small-12 large-12 columns" align="middle" > 
                <a href="#" data-reveal-id="consultaPorTipo" class="button round expand">
                <img src="../img/buscar.png" width="30px">
                BUSCAR USUARIOS POR TIPO
                </a>  
           </div> 
           <div class="small-12 large-12 columns" align="middle" > 
                <a href="#" data-reveal-id="registrarUsuario" class="button round expand">
                <img src="../img/registros.png" width="30px">
                REGISTRAR NUEVO USUARIO
                </a>  
           </div> 
        </div>
                        
    </div>

    <!-- RESULTADOS DE LAS CONSULTAS -->
    <div id="resultadoConsultaPorNombre" class="reveal-modal" data-reveal aria-labelledby="resultadoConsultaPorNombre1" aria-hidden="true" role="dialog">
          <h2 id="resultadoConsultaPorNombre1">USUARIO</h2>
            <p><?php
                $hostname="localhost";
                $usuario="root";
                $password="";
                $basededatos="sigmp";
                $mysqli = new mysqli($hostname, $usuario, $password,$basededatos);
                if ( mysqli_connect_errno() ) {
                echo "Error de conexión a la BD: ".mysqli_connect_error();
                exit();
                }             
                
        
                $nombre=$_POST['nombreUsuarioBuscar'];
                $nombre2="JHDJSD9WROIWNROI";
                $query="SELECT * from  usuarios where nombre ='$nombre' ";
                $resultado=$mysqli->query($query)or die ($mysqli‐>error. " en la línea ".(__LINE__‐1));
                

                

                echo "</table>";
                "<br>";
                 $numregistros=$resultado->num_rows;
                if($numregistros == 0){
                                        echo "<h6> No Existe Un Usuario Con El Nombre ".$nombre." En La Base De Datos De La Aplicacion </h6>";
                                          
                                          echo '<a href="#" data-reveal-id="consultaPorNombre" class="radius button">REINTENTAR</a>'; 
                                           echo '<a href="#" data-reveal-id="resultadoConsultaPorNombre" class="radius button">CANCELAR</a>';  
                                            }else{
                                                    
                                                echo "<h6>Los datos del usuario son los siguientes:</h6>";
                                               

                                               foreach($resultado as $user)
                                        {
                                              //CREAR SESION
                                                
                                                echo " <h2> NOMBRE DE USUARIO: ".$user["nombre"]." </h2>";
                                                echo " <h2> CORREO ELECTRONICO: ".$user["email"]." </h2>";
                                                echo " <h2> CONTRASEÑA: ".$user["password"]." </h2>";
                                                echo " <h2> TIPO DE USUARIO: ".$user["tipo_Usuario"]." </h2>";
                                               

                                                
                                                               
                                        }                 


                                                
                                                
                                                
                                              
                                            }
                                               
                 
                $resultado->free();
                ?>
                
                              
        
            </p>                          
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div> 

    <div id="consultaPorNombre" class="reveal-modal" data-reveal aria-labelledby="consultaPorNombre1" aria-hidden="true" role="dialog">
          <h2 id="consultaPorNombre1">CONSULTA POR NOMBRE</h2>
            <p>
              <form action="" method="post">
                  
                    <div class="large-6 columns">
                      <label>Nombre De Usuario
                        <input name="nombreUsuarioBuscar"type="text" placeholder="Ingresa El Nombre Completo Del Usuario Que Quieres consultar" required="" />
                      </label>
                    </div>
                    
                    <div class="large-6 columns" id="contenido">
                      <label>Incluir Datos</label>
                      <input id="checkbox1" type="checkbox"><label for="checkbox1">Nombre</label>
                      <input id="checkbox2" type="checkbox"><label for="checkbox2">Email</label>
                      <input id="checkbox3" type="checkbox"><label for="checkbox3">Password</label>
                      <input id="checkbox4" type="checkbox"><label for="checkbox4">Tipo De Usuario</label>
                    
                    </div>
                 
                  
                  <div class="row">
                    <div class="large-12 columns" id="contenido2" align="middle">
                      <input type="submit" class="button" data-reveal-id="resultadoConsultaPorNombre" name="iniciar" value="CONSULTAR" />
                      <a href="#" type="submit" data-reveal-id="resultadoConsultaPorNombre" class="radius button">CONSULTAR</a>
                    </div>
                  </div>


                </form>         
                
            </p>                          
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
   

    <div id="listadoUsuarios" class="reveal-modal" data-reveal aria-labelledby="listadoUsuarios1" aria-hidden="true" role="dialog">
          <h2 id="listadoUsuarios1" align="center">USUARIOS REGISTRADOS</h2>
            <p align="center">
              <?php
                include("listadoUsuarios.php");
                ?>
            </p>                          
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div> 

    <div id="consultaPorTipo" class="reveal-modal" data-reveal aria-labelledby="consultaPorTipo1" aria-hidden="true" role="dialog">
          <h2 id="consultaPorTipo1">CONSULTA POR TIPO DE USUARIO</h2>
            <p><?php
                $hostname="localhost";
                $usuario="root";
                $password="";
                $basededatos="sigmp";
                $mysqli = new mysqli($hostname, $usuario, $password,$basededatos);
                if ( mysqli_connect_errno() ) {
                echo "Error de conexión a la BD: ".mysqli_connect_error();
                exit();
                }    
                
        
                
                $tipo="Jurista";
                $query="SELECT * from  usuarios where tipo_Usuario ='$tipo' ";
                $resultado=$mysqli->query($query)or die ($mysqli‐>error. " en la línea ".(__LINE__‐1));
                $numregistros=$resultado->num_rows;

                echo "<h5>En estos momentos el sistema de gestion cuenta con: ",$numregistros," clientes registrados.</h5>";
                echo "<table border=2><tr><th>NOMBRE DE USUARIO</th> <th>EMAIL</th> <th>PASSWORD</th>
                                <th>TIPO DE USUARIO</th> </tr>";
                while ($registro = $resultado->fetch_assoc()) {
                echo "<tr>";
                foreach ($registro as $campo)
                echo "<td>",$campo, "</td>";
                echo "</tr>";
                }
                echo "</table>";
                echo session_name(),"<br>";
                $resultado->free();
                ?>
                <a href="#" data-reveal-id="listadoUsuarios" class="radius button">VER USUARIOS REGISTRADOS</a>
                              
        
            </p>                          
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div> 

    <div  align="middle" n id="registrarUsuario" class="reveal-modal" data-reveal aria-labelledby="registrarUsuario1" aria-hidden="true" role="dialog">
          <h2 id="registrarUsuario1" align="middle">REGISTRO DE UN NUEVO USUARIO</h2>
            <p>
            <div class="large-12 columns" align="middle">
            <div class="large-6 columns" >
                <img src="../img/registro.png" width="60%">
            </div>

            <div class="large-6 columns" >
                <form action="usuarios.php"  method="post">                  
                    
                <div class="row">
                    <div class="small-2 large-2 columns">
                      <span class="prefix">
                          <img src="../img/useredit.png" width="30px">
                      </span>
                    </div>
                    <div class="large-10 small-10 columns">                      
                        <input name="nombreUsuario" type="text" placeholder="Nombre De Usuario" required="" />
                    </div>
                </div>  

                <div class="row">
                    <div class="small-2 large-2 columns">
                      <span class="prefix">
                         <img src="../img/email.png" width="30px">
                      </span>
                    </div>
                    <div class="large-10 small-10 columns">                      
                        <input name="email" type="email" placeholder="Correo Electronico" required="" />
                    </div>
                </div>    

                <div class="row">
                    <div class="small-2 large-2 columns">
                      <span class="prefix">
                         <img src="../img/password.png" width="30px">
                      </span>
                    </div>
                    <div class="large-10 small-10 columns">                      
                      <input name="password" type="password" placeholder="Password" required="" />
                    </div>
                </div>

                <div class="row">
                    <div class="small-2 large-2 columns">
                      <span class="prefix">
                        <img src="../img/tipousuario.png" width="30px">
                      </span>
                    </div>
                    <div class="large-10 small-10 columns">                      
                        <select name="tipo_Usuario" required=""  >
                                  <option value="">Tipo De Usuario</option>
                                  <option value="Jurista">Jurista</option>
                                  <option value="Solicitante">Solicitante</option>
                                  <option value="Supervisor">Supervisor</option>
                                  <option value="Contratante">Contratante</option>
                        </select>
                    </div>
                </div>

                

                 
                </form>
            </div>
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