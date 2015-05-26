 <!-- INFORMACION DE LA SESION -->
    <!-- <div class="row" >
        <div class="small-12 large-11 columns" align="right" >
            <?php
              session_cache_limiter('nocache,private');
              session_name('pruebas');
              session_start();    
                    echo '            
              <a href="accesoDatos/logout.php">
              <h6 align="rigth">'.$_SESSION['nombre'].'(salir <img src="img/logout.png" width="20px"> ) </h6></a>';
              
             
          ?>
        </div>
        <hr>
    </div>
 -->


    <!-- MODULOS DEL  SOFTWARE-->
    <div class="row">
         <div class="small-12 large-12 medium-12  columns">
           <h1 align="center"> MODULOS PRINCIPALES DE SIGMEP </h1>
         </div>
         <hr>
         <div class="small-12 large-3 medium-12  columns" align="middle">
              <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Modulo Para La Gestion De Solicitudes De Contratacion">              
                <a href="accesoDatos/gestionSolicitudes.php">
                  <img src="<?php echo base_url(); ?>public/foundation/img/solicitudes.png" width="150px" id="imagendropdown">
                </a>
              </span>
         </div>
         <div class="small-12 large-3 medium-12  columns" align="middle">
              <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Modulo Para La Gestion De Contratos">
                <a href="accesoDatos/gestionContratos.php">
                  <img src="<?php echo base_url(); ?>public/foundation/img/contrato.png" width="150px" id="imagendropdown">
                </a>
              </span>
         </div>
         <div class="small-12 large-3 medium-12  columns" align="middle">
               <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Modulo Para La Gestion De Documentos De Contratacion">
                  <a href="accesoDatos/gestionDocumentos.php">
                    <img src="<?php echo base_url(); ?>public/foundation/img/documentos.png" width="150px" id="imagendropdown">
                  </a>
                </span>
         </div>
         <div class="small-12 large-3 medium-12  columns" align="middle">
                <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Modulo Para La Gestion Del Seguimiento Al Proceso De Contratacion">
                  <a href="/view">
                    <img src="<?php echo base_url(); ?>public/foundation/img/seguimiento.png" width="200px" id="imagendropdown">
                  </a>  
                </span>
         </div>
    </div>

    <!-- RESPONSABILIDADES DE LOS ROLES -->
    <!-- <div class="row" >
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
 -->
    <!-- OPCIONES GENERALES -->
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
                  <img src="<?php echo base_url(); ?>public/foundation/img/contratacion.png" width="150px" id="imagendropdown2">
                </a>
              </span>
         </div>
         <div class="small-12 large-4 medium-12  columns" align="middle">
              <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Ver El Procedimiento General De Contratacion">              
                <a href="formatos/PRABS-06 Procedimiento general de contratacion.pdf">
                  <img src="<?php echo base_url(); ?>public/foundation/img/contractual.png" width="150px" id="imagendropdown2">
                </a>
              </span>
              
         </div>
         <div class="small-12 large-4 medium-12  columns" align="middle">
              <span data-tooltip aria-haspopup="false" class="has-tip" 
                    title="Primeros Pasos Para un Optimo Uso De SIGMEP">              
                <a href="pasosIniciales.php">
                  <img src="<?php echo base_url(); ?>public/foundation/img/instructivo.png" width="150px" id="imagendropdown2">
                </a>
              </span>
         </div>
    </div>