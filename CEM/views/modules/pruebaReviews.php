<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>CONSULTA DE USUARIOS</title>
       <?php
              include("../templates/encabezado.php");
        ?>
    </head>
    <body>
    <!-- CABECERA DEL SITIO WEB -->
    <?php 
    include("../templates/header.php");
  
    ?> 

    <div class="row" id="contenedor">

        <!-- AREA PARA LA SESION -->
      <div class="row" align="middle" id="contenido">
        <div class="small-12 large-11 columns" align="right" >
            <?php
            

           
             include("../reviews/personas.php");
             
          ?>
        </div>
        <hr>
      </div>
     

    </div>

    


        
  
    

     <?php
      include("../templates/final.php");
    ?>
    </body>
</html>