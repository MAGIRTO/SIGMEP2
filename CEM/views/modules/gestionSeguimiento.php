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
      <div class="row" >
        <div class="small-12 large-11 columns" align="right" >
            <?php
            include("../../persistense/Db.class.php");
            $bd=Db::getInstance();

           
             include("../templates/infoSesion.php");
             
          ?>
        </div>
        <hr>
      </div>


        <div class="small-12 large-12 medium-12  columns">
           <h1 align="center"> GESTION DEL SEGUIMIENTO - SIGMEP </h1>
        </div>
        <hr>
        <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
            <img src="../img/seguimiento.png">
        </div>
       
        <div class="small-12 large-5 columns" align="middle"  id="contenido2"> 
                    
           <div class="small-12 large-12 columns" align="middle" > 
                <a href="#" data-reveal-id="informar" class="button round expand">
                <img src="../img/registros.png" width="30px">
                REGISTRAR NUEVO INFORME
                </a>  
           </div> 
        </div>
                        
    </div>

  
    <div id="informar" class="reveal-modal" data-reveal aria-labelledby="consultaPorNombre1" aria-hidden="true" role="dialog">
          <h2 id="consultaPorNombre1">REGISTRAR NUEVO INFORME</h2>
            <p id="contenido">
              <form action="gestionInforme.php" method="post">
                    <div class="small-12 large-12  columns" id="contenido">
                      <label>CONTRATOS ACTIVOS
                         <select name="idContrato" required=""  >
                          <option value=""></option>
                            <?php 
                             $bd->obtener_Contratos_Select();
                            ?>
                         </select>
                      </label>
                    </div> 
                    <div class="small-12 large-6 columns" id="contenido">
                      <label>Fecha Del Informe 
                        <input id="fechaInforme" name="fechaInforme" type="date" required="">
                      </label>
                    </div>  

                  <div class="row">
                    <div class="large-6 columns" id="contenido2" align="middle">
                      <input type="submit" class="button expand" name="iniciar" value="ACEPTAR" />
                     </div>
                  </div>
                </form> 
            </p>                          
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
   

     <?php
      include("../templates/final.php");
    ?>
    </body>
</html>