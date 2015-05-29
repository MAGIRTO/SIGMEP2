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
    $mysqli = new mysqli($hostname, $usuario, $password,$basededatos);
        if ( mysqli_connect_errno() ) {
            echo "Error de conexión a la BD: ".mysqli_connect_error();
            exit();
        }   
    $nombre=$_POST['nombreUsuarioLogueo'];
    $password=$_POST['passwordLogueo'];
    $nombre2="JHDJSD9WROIWNROI";
    $query="SELECT * from  usuarios where nombre ='$nombre' and password = '$password' ";
    $resultado=$mysqli->query($query)or die ($mysqli‐>error. " en la línea ".(__LINE__‐1));
       
    echo "</table>";
                "<br>";
    $numregistros=$resultado->num_rows;
    
               
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
          <div class="small-12 large-12 medium-12  columns">
             <h1 align="center"> USUARIO O CONTRASEÑA INVALIDOS </h1>
          </div>
          <hr>
          <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
              <img src="../img/incorrecto.png">
          </div>
          
          <div class="small-12 large-6 columns" id="contenido" align="middle" > 
              <?php
                if($numregistros == 0){
                echo "<h6 align='justify'> No Existe Un Usuario Con El Nombre ".$nombre." En La Base De Datos De La Aplicacion o bien  
                la contraseña indicada no ha sido digitada correctamente, Vuelva a intentarlo por favor.</h6>";
                                                  
                  
                }else{                           
                    foreach($resultado as $user)
                        {  session_cache_limiter('nocache,private');
                        session_name('pruebas');
                        session_start();
                        $_SESSION['nombre']=$user["nombre"];
                        $_SESSION['tipo']=$user["tipo_Usuario"];
                        header('Location: ../../views/modules');                                  
                    }                                        
                }
                $resultado->free();
              ?>
          </div>
        <div class="small-12 large-6 columns" align="left"  id="contenido2"> 
           <div class="small-12 large-12 columns" align="left" > 
                <a href="#" data-reveal-id="iniciarSesion" class="button round expand">
                  RIENTENTAR INICIO DE SESION
                </a>
                <a href="../inicio.php"  class="button round expand">
                  REGRESAR AL INICIO
                </a>
           </div>
         
        </div>
                        
    </div>

    <div  align="middle"  id="iniciarSesion" class="reveal-modal" data-reveal aria-labelledby="iniciarSesion1" aria-hidden="true" role="dialog">
          <h2 id="iniciarSesion1" align="middle">INICIO DE SESION</h2>
            <p>
            <div class="large-12 columns" align="middle">
              <div class="large-6 columns" >
                  <img src="../img/logueo.png" width="60%">
              </div>            

              <div class="large-6 columns" >
                <form action="logueo2.php" id="register" method="post">
                  <!-- DATOS DE LOGUEO -->

                  <div class="row">
                    <div class="small-2 large-2 columns">
                      <span class="prefix">
                          <img src="../img/useredit.png" width="30px">
                      </span>
                    </div>
                    <div class="large-10 small-10 columns">                      
                        <input name="nombreUsuarioLogueo" type="text" placeholder="Nombre De Usuario" required="" />
                    </div>
                </div> 

                <div class="row">
                    <div class="small-2 large-2 columns">
                      <span class="prefix">
                         <img src="../img/password.png" width="30px">
                      </span>
                    </div>
                    <div class="large-10 small-10 columns">                      
                      <input name="passwordLogueo" type="password" placeholder="Password" required="" />
                    </div>
                </div>

                 <div class="row">
                            <div class="large-4 columns" id="contenido2" align="middle">
                              <input type="submit" class="button" name="iniciar" value="INICIAR" />                         
                            </div>
                            <div class="large-4 columns" id="contenido2" align="middle">
                              <input type="reset" class="button" name="cancelar" value="REINICIAR" />                         
                            </div>
                            <div class="large-4 columns" id="contenido2" align="middle">
                              <input type="reset" data-reveal-id="iniciarSesion" class="button" name="cancelar" value="CANCELAR" />                         
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