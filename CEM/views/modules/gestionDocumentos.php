<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
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
             <h1 align="center"> GESTION DE DOCUMENTOS - SIGMEP </h1>
          </div>
          <hr>
          <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
              <img src="../img/documentos.png">
          </div>
        <div class="small-12 large-6 columns" align="left"  id="contenido2"> 
           <div class="small-12 large-12 columns" align="left" > 
                <a href="#" data-reveal-id="justificacion" class="button round expand">
                <img src="../img/buscar.png" width="30px">
                FORMATO DE JUSTIFICACION
                </a>
           </div>
           <div class="small-12 large-12 columns" align="left" > 
                <a href="#" data-reveal-id="solicitud" class="button round expand">
                <img src="../img/buscar.png" width="30px">
                FORMATO DE SOLICITUD DE CONTRATO
                </a>
           </div>
           <div class="small-12 large-12 columns" align="left" > 
                <a href="#" data-reveal-id="contrato" class="button round expand">
                <img src="../img/buscar.png" width="30px">
                FORMATO DE ACTA DE INICIO
                </a>
           </div>
         
        </div>
                        
    </div>

   

    <div id="justificacion" class="reveal-modal" data-reveal aria-labelledby="consultaPorNombre1" aria-hidden="true" role="dialog">
          <h2 id="consultaPorNombre1">CONSULTA DE FORMATO DE JUSTIFICACION</h2>
            <p>
              <form action="../formats/formatoJustificacion.php" method="post">
                  
                  
                    <div class="small-12 large-12  columns" id="contenido">
                      <label>Justificacion a ver
                         <select name="idJustificacion" required=""  >
                          <option value=""></option>
                            <?php 
                             $bd->obtener_Justificaciones_Select();
                            ?>
                         </select>
                      </label>
                    </div>
                     <div class="large-6 columns">
                        <label>Accion a Realizar</label>
                        <input type="radio" name="accion" required="" value="guardar" id="guardar"><label >GUARDAR</label>
                        <input type="radio" name="accion" value="explorar" id="explorar"><label >EXPLORAR</label>
                      </div>

                    
                 
                  
                  <div class="row">
                    <div class="large-12 columns" id="contenido2" align="middle">
                      <input type="submit" class="button" name="iniciar" value="ACEPTAR" />
                    
                    </div>
                  </div>


                </form>         
                
            </p>                          
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

    <div id="solicitud" class="reveal-modal" data-reveal aria-labelledby="consultaPorNombre1" aria-hidden="true" role="dialog">
          <h2 id="consultaPorNombre1">CONSULTA DE FORMATO DE SOLICITUD DE CONTRATO</h2>
            <p>
              <form action="../formats/formatoSolicitudContrato.php" method="post">
                  
                  
                    <div class="small-12 large-8  columns" id="contenido">
                      <label>SOLICITUD A MANIPULAR
                         <select name="idSolicitud" required=""  >
                          <option value=""></option>
                            <?php 
                             $bd->obtener_Solicitudes_Select();
                            ?>
                         </select>
                      </label>
                    </div>
                     <div class="large-4 columns">
                        <label>ACCION AREALIZAR</label>
                        <input type="radio" name="accion" required="" value="guardar" id="guardar"><label >GUARDAR</label>
                        <input type="radio" name="accion" value="explorar" id="explorar"><label >EXPLORAR</label>
                      </div>

                    
                 
                  
                  <div class="row">
                    <div class="large-12 columns" id="contenido2" align="middle">
                      <input type="submit" class="button" name="iniciar" value="ACEPTAR" />
                    
                    </div>
                  </div>


                </form>         
                
            </p>                          
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

    <div id="contrato" class="reveal-modal" data-reveal aria-labelledby="consultaPorNombre1" aria-hidden="true" role="dialog">
          <h2 id="consultaPorNombre1">CONSULTA DE FORMATO DE ACTA DE INICIO</h2>
            <p id="contenido">
              <form action="../formats/formatoActaDeInicio.php" method="post">
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

                    <div class="small-12 large-4  columns" id="contenido">
                      <label>Fecha De Reunion
                        <input name="fechaReunion" type="date" required="">
                      </label>
                    </div>

                    <div class="small-12 large-4  columns" id="contenido">
                      <label>Fecha De Firma
                        <input name="fechaFirma" type="date" required="">
                      </label>
                    </div>
                    <div class="large-4 columns">
                        <label>ACCION A REALIZAR</label>
                        <input type="radio" name="accion" required="" value="guardar" id="guardar"><label >GUARDAR</label>
                        <input type="radio" name="accion" value="explorar" id="explorar"><label >EXPLORAR</label>
                      </div>




                  <div class="row">
                    <div class="large-12 columns" id="contenido2" align="middle">
                      <input type="submit" class="button" name="iniciar" value="ACEPTAR" />
                    
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