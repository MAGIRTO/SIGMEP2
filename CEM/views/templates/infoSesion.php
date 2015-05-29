<?php
session_cache_limiter('nocache,private');
session_name('pruebas');
session_start();    
      echo '            
<a href="../../controllers/querys/logout.php">
<h6 align="rigth">'.$_SESSION['nombre'].'(salir <img src="../../assets/img/logout.png" width="20px"> ) </h6></a>';
              
             
?>
    