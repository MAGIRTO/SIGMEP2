<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema Integrado De Gestion| METROPARQUES</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
        <link rel="stylesheet" href="../../libs/foundation/css/foundation.css" />
        <link rel="stylesheet" href="../../libs/foundation/css/normalize.css" />
        <script src="../../libs/foundation/js/vendor/modernizr.js"></script>
        </head>
  <body >

    <!-- CABECERA DEL SITIO WEB -->
   <?php 
    include("../templates/header.php");
  
    ?>   

    <!-- AREA DE CONTENIDO  -->
    <div class="row" id="contenedor">



      <!-- AREA PARA LA SESION -->
      <div class="row" >
        <div class="small-12 large-11 columns" align="right" >
            <?php
              include("../templates/infoSesion.php");
              include("../reviews/personas.php");
            ?>

             
        </div>
        <hr>
      </div>
      <!-- INFORMACION DEL SOFTWARE -->
      <div class="row">
         <div class="small-12 large-12 medium-12  columns">
           <h1 align="center"> MODULOS PRINCIPALES DE SIGMEP </h1>
         </div>
         <hr>
         <div class="small-12 large-3 medium-12  columns" align="middle">
              <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Modulo Para La Gestion De Solicitudes De Contratacion">              
                <a href="gestionSolicitudes.php">
                  <img src="../../assets/img/solicitudes.png" width="150px" id="imagendropdown">
                </a>
              </span>
         </div>
         <div class="small-12 large-3 medium-12  columns" align="middle">
              <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Modulo Para La Gestion De Contratos">
                <a href="gestionContratos.php">
                  <img src="../../assets/img/contrato.png" width="150px" id="imagendropdown">
                </a>
              </span>
         </div>
         <div class="small-12 large-3 medium-12  columns" align="middle">
               <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Modulo Para La Gestion De Documentos De Contratacion">
                  <a href="gestionDocumentos.php">
                    <img src="../../assets/img/documentos.png" width="150px" id="imagendropdown">
                  </a>
                </span>
         </div>
         <div class="small-12 large-3 medium-12  columns" align="middle">
                <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Modulo Para La Gestion Del Seguimiento Al Proceso De Contratacion">
                  <a href="gestionSeguimiento.php">
                    <img src="../../assets/img/seguimiento.png" width="200px" id="imagendropdown">
                  </a>  
                </span>
         </div>
              
      </div>
    
    <!-- INFORMACION DE LOS PROCESOS INSTITUCIONALES -->
    <div class="row" >
        <div class="small-12 large-12 medium-12  columns" id="contenido" >
          <hr>
          <?php
              $tipo=$_SESSION['tipo'];
              echo " <h1 align='center'> Responsabilidades del Usuario ".$tipo." </h1>";
              if(strcmp($tipo, 'Solicitante') == 0){
                echo " <h6 align='center'> *******SOLICITANTE*******
                </h6>";
              }else  if(strcmp($tipo, 'Contratante') == 0){
                echo " <h6 align='center'>  ********CONTRATANTE********
                </h6>";
              }else if(strcmp($tipo, 'Jurista') == 0){
                echo " <h6 align='center'> *****JURISTA**********
                </h6>";
              }else if(strcmp($tipo, 'Supervisor') == 0){
                echo " <h6 align='center'>  ****SUPERVISOR*******
                </h6>";
              }else{
                    echo " <h6 align='center'>  ****OTRO USUARIO*******
                </h6>";
              }
          ?>
        </div>                
        
    </div>
    <div class="row">
        <div class="small-12 large-12 medium-12  columns" id="contenido">
           <hr>
           <h1 align="center"> PROCESO DE CONTRATACION </h1>
           <hr>
         </div>
         
         <div class="small-12 large-4 medium-12  columns" align="middle">
              <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Iniciar Proceso De Contratacion">              
                <a href="precontrato.php">
                  <img src="../../assets/img/contratacion.png" width="150px" id="imagendropdown2">
                </a>
              </span>
         </div>
         <div class="small-12 large-4 medium-12  columns" align="middle">
              <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Ver El Procedimiento General De Contratacion">              
                <a href="formatos/PRABS-06 Procedimiento general de contratacion.pdf">
                  <img src="../../assets/img/contractual.png" width="150px" id="imagendropdown2">
                </a>
              </span>
              
         </div>
         <div class="small-12 large-4 medium-12  columns" align="middle">
              <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Primeros Pasos Para un Optimo Uso De SIGMEP">              
                <a href="pasosIniciales.php">
                  <img src="../../assets/img/instructivo.png" width="150px" id="imagendropdown2">
                </a>
              </span>
         </div>
         
    </div>

    
</div>    

<!-- Reveal Modals end -->    
    <script src="../../libs/foundation/js/vendor/jquery.js"></script>
    <script src="../../libs/foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
