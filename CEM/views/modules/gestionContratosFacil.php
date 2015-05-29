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
        <div class="small-12 large-11 columns" align="right" >
            <?php
            include("../../persistense/Db.class.php");
            $bd=Db::getInstance();

           
             include("../templates/infoSesion.php");
             
          ?>
        </div>
      <?php
       
        $idSolicitud= $_POST['idSolicitud'];
        
        // $sql="SELECT `idJustificaciones`, `fechaJustificacion`, `valorContrato`, `que`, `porque`, `paraque`, `plazoContrato`, `observaciones`, `resultadoEsperado`, `especificacionesContrato`, `fechaAutorizacion`, `Areas_idAreas`, `nombres`, `apellidos`, `nombreareas`
        // FROM justificaciones j, personas p, areas a
        //   WHERE j.Personas_cedula=p.cedula and j.Areas_idAreas= a.idAreas and j.idJustificaciones='$idJustificacion'";

        $sql=" SELECT * FROM areas a, solicitudcontratos s, detallecontratos dc, detallevalorcontratos dvc
         WHERE s.idSolicitudContratos='$idSolicitud'
         AND s.detalleContrato=dc.idDetalleContratos
         AND s.valorContrato=dvc.idDetalleValorContratos
         AND s.idAreaSolicitante=a.idAreas";
        $stmt=$bd->ejecutar($sql);
        $x=$bd->obtener_fila($stmt,0);

        $sql2=" SELECT * FROM empresas e,representantes r
        WHERE e.idEmpresa='".$x['contratista']."' 
        AND e.Representantes_cedulaRepresentantes= r.cedula";
        $stmt2=$bd->ejecutar($sql2);
        $x2=$bd->obtener_fila($stmt2,0);
        $datetime1 = new DateTime($x['fechaInicio']);
        $datetime2 = new DateTime($x['fechaFin']);
        $interval = $datetime1->diff($datetime2);
      ?> 

 
      <div class="row" id="contenido">  
          <h2 align="middle">REGISTRO DE UN NUEVO CONTRATO</h2>
             <form action="../../controllers/register/Contrato.php" method="post">
                    <!-- DATOS GENERALES DEL CONTRATO -->
                    <div class="small-12 large-12 medium-12  columns" id="contenido2">
                      <fieldset > 
                          <legend align="center"> INFORMACION GENERAL DEL CONTRATO</legend>
                             
                                  <div class="small-12 large-4  columns">

                                  <label>Codigo Del Contrato 
                                          <input id="codigo" name="codigo" type="number" required="" title="Solo Valores Numericos"> 
                                  </label>
                                  </div>
                                  <div class="small-12 large-4  columns" id="contenido">
                                    <label>Fecha 
                                              <input id="fechaContrato" name="fechaContrato" type="date" required="">
                                      </label>
                                  </div>
                                  <div class="small-12 large-4  columns" id="contenido">
                                    <label>Tipo de Contrato
                                        <input id="tipoContrato" name="tipoContrato" type="text" 
                                            value="<?php echo $x['tipoContrato'];?>"
                                            required="" autofocus=""> 
                                    </label>
                                  </div>                          
                                          
                                  <div class="small-12 large-6  columns">  
                                          <label>Valor 
                                              <input id="valor" name="valor" type="number" 
                                                value="<?php echo $x['valorContrato'];?>"

                                              required="" title="Solo Valores Numericos"> 
                                          </label>
                                  </div>
                                  



                                  <div class="small-12 large-6 columns" id="contenido">
                                          <label>Plazo De Ejecucion (<?php 
                                            echo $interval->format('%a Dias Habiles');   
                                            ?>)
                                              <input id="plazo" name="plazo" 
                                                
                                                <?php                                                
                                                echo "value =".$interval->format('%a Dias Habiles');
                                                ?>
                                              type="text"  required="" autofocus=""> 
                                          </label>
                                            

                                  </div>


                                 
                                                  
                      </fieldset> 
                    </div>
                    <!-- DATOS DEL CONTRATISTA -->
                    <div class="small-12 large-12 medium-12  columns" id="contenido2">
                      <fieldset> 
                          <legend align="center">DATOS DEL CONTRATISTA</legend>
                            
                              <div class="small-12 large-4  columns" id="contenido">
                                <label>Empresa Contratista
                                          <input id="nombreContratista" name="nombreContratista" type="text" 
                                            value="<?php echo $x2['nombreEmpresa'];?>"
                                            required="" autofocus=""> 
                                </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                    <label>Numero del NIT 
                                              <input id="nitContratista" name="nitContratista"
                                                value="<?php echo $x2['idEmpresa'];?>"
                                                type="text" required="" title="Solo Valores Numericos">
                                    </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                    <label>Representante legal
                                          <input id="nombreRepresentanteContratista" name="nombreRepresentanteContratista"
                                              <?php
                                                $nombreCompleto=$x2['nombreRepresentantes']." ".$x2['apellidoRepresentantes'];
                                              ?>
                                                value="<?php echo $nombreCompleto;?>"
                                           type="text"  required="" autofocus=""> 
                                    </label>
                              </div>

                              <div class="small-12 large-4  columns" id="contenido">
                                    <label>Cedula Del Representante 
                                              <input id="cedulaRepresentanteContratista" name="cedulaRepresentanteContratista" 
                                                value="<?php echo $x2['cedula'];?>"
                                                
                                              type="number" required="" title="Solo Valores Numericos">
                                    </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                   <label>Lugar de Expedicion
                                          <input id="lugarExpedicionContratista" name="lugarExpedicionContratista"
                                            value="<?php echo $x2['lugarExpedicion'];?>"
                                            type="text" placeholder="Nombre del respresentante Legal" required="" autofocus=""> 
                                    </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                          <label>Cargo Representante
                                          <input id="cargoRepresentanteContratista" name="cargoRepresentanteContratista" 
                                            value="<?php echo $x2['cargoRepresentante'];?>"
                                            type="text" placeholder="Nombre del respresentante Legal" required="" autofocus=""> 
                                          </label>
                              </div>
                      </fieldset>            
                    </div>
                    <!-- DATOS DEL CONTRATANTE -->
                    <div class="small-12 large-12 medium-12  columns" id="contenido2">
                      <fieldset> 
                          <legend align="center"> DATOS DEL CONTRATANTE</legend>
                               
                               <div class="small-12 large-12  columns" id="contenido">
                                    <label>Contratante
                                      <select name="contratante" required=""  >
                                        <option value=""></option>
                                        <?php 
                                          $bd->obtener_Empresas_Select();
                                        ?>
                                      </select>
                                    </label>
                                </div> 

                      </fieldset>            
                    </div>
                    <!-- DATOS TECNICOS DEL CONTRATO -->
                    <div class="small-12 large-12 medium-12  columns" id="contenido2">
                      <fieldset> 
                          <legend align="center">INFORMACION TECNICA DEL CONTRATO</legend>
                              
                              <div class="small-12 large-6  columns" id="contenido">      
                                  <label>Supervisor Del Contrato
                                          <input id="nombreSupervisor" name="nombreSupervisor" 
                                            <?php
                                                $x3=$bd->obtener_fila($bd->obtener_Persona($x['cedulaSupervisor']),0);
                                                     
                                            ?>

                                            value="<?php echo $x3['nombres'].' '.$x3['apellidos'];?>"
                                          type="text"  required="" autofocus=""> 
                                  </label> 
                              </div>
                              <div class="small-12 large-6 columns" id="contenido"> 
                                          <label>Cedula Del Supervisor 
                                              <input id="cedulaSupervisor" name="cedulaSupervisor"
                                              <?php
                                                
                                                echo "value =".$x3['cedula'];      
                                                ?>

                                               type="number" required="" title="Solo Valores Numericos">
                                          </label> 
                              </div>
                              
                              <div class="small-12 large-6  columns" id="contenido">
                                           <label>Fecha De Inicio
                                              <input id="fechaInicio" name="fechaInicio" 
                                                <?php
                                                echo "value =".$x['fechaInicio'];      
                                                ?>

                                              type="date" required="">
                                          </label>
                              </div>
                              
                              <div class="small-12 large-6  columns" id="contenido">
                                         <label>Fecha De Finalizacion
                                              <input id="fechaFinalizacion" 
                                              <?php
                                                echo "value =".$x['fechaFin'];      
                                                ?>
                                              name="fechaFinalizacion" type="date" required="">
                                          </label>
                              </div>
                                                                             
                      </fieldset> 
                    </div>
                    <!-- DATOS DETALLADOS DEL CONTRATO -->
                    <div class="small-12 large-12 medium-12  columns" id="contenido2">
                      <fieldset> 
                          <legend align="center">INFORMACION DETALLADA DEL CONTRATO</legend>
                              
                              <div class="small-12 large-12  columns" id="contenido"> 
                                  <label>Objeto del Contrato 
                                  <textarea id="objetoContrato" name="objetoContrato" rows="5"
                                   required=""
                                   ><?php
                                        echo $x['objetoContrato'];      
                                      ?>
                                   </textarea>
                                  </label> 
                              </div>
                              <div class="small-12 large-6  columns" id="contenido"> 
                                  <label>Forma De Pago
                                  <textarea id="formaPago" name="formaPago" rows="5" 
                                  required=""><?php
                                        echo $x['formasPago'];      
                                      ?>
                                  </textarea>
                                  
                                  </label> 
                              </div>
                              <div class="small-12 large-6  columns" id="contenido">
                                  <label>Alcance
                                  <textarea id="alcance" name="alcance" rows="5" required=""></textarea>
                                  </label> 
                              </div>                                                       
                        </fieldset>
                    </div>
                    <!-- BOTONES CON LAS ACCIONES A REALIZAR -->
                    <div class="row">
                                <div class="large-12 columns" id="contenido2" align="middle">
                                  <input type="submit" class="button round expand" name="iniciar" value="REGISTRAR EL CONTRATO" />                         
                                </div>
                                
                    </div>
                </form>
          
      </div> 


      

        
          
                        
    </div>

   
    
     

    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    </body>
</html>