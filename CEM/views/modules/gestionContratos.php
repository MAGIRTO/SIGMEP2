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
             include("../templates/menuProceso.php");
             
          ?>
        </div>
        <hr>
      </div>

          <div class="small-12 large-12 medium-12  columns">
             <h1 align="center"> GESTION DE CONTRATOS - SIGMEP </h1>
          </div>
          <hr>
          <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
              <img src="../img/contrato.png">
          </div>
        <div class="small-12 large-5 columns" align="middle"  id="contenido2"> 
           
           <div class="small-12 large-12 columns" align="middle" > 
                <a href="#" data-reveal-id="registroFacil" class="button round expand">
                <img src="../img/logueo.png" width="30px">
                REGISTRO FACIL
                </a>
           </div>
           <div class="small-12 large-12 columns" align="middle" > 
                <a href="#" data-reveal-id="registrarContratos" class="button round expand">
                <img src="../img/registros.png" width="30px">
                REGISTRAR CONTRATO
                </a>  
           </div> 
           <div cl 
           </div> 
        </div>
                        
    </div>

    
    
     
    
    <div  align="middle"  id="registrarContratos" class="reveal-modal" data-reveal aria-labelledby="registrarUsuario1" aria-hidden="true" role="dialog">
          <h2 id="registrarUsuario1" align="middle">REGISTRO DE UN NUEVO CONTRATO</h2>
            <p>
                <form action="registroContrato.php" id="register" method="post">
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
                                        <input id="tipoContrato" name="tipoContrato" type="text" placeholder="Ingresa El tipo de Contrato" required="" autofocus=""> 
                                    </label>
                                  </div>                          
                                          
                                  <div class="small-12 large-6  columns">  
                                          <label>Valor 
                                              <input id="valor" name="valor" type="number" required="" title="Solo Valores Numericos"> 
                                          </label>
                                  </div>
                                  <div class="small-12 large-6 columns" id="contenido">
                                          <label>Plazo De Ejecucion
                                              <input id="plazo" name="plazo" type="text" placeholder="Plazo para ejecutarse" required="" autofocus=""> 
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
                                          <input id="nombreContratista" name="nombreContratista" type="text" placeholder="Nombre del Contratista" required="" autofocus=""> 
                                </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                    <label>Numero del NIT 
                                              <input id="nitContratista" name="nitContratista" type="number" required="" title="Solo Valores Numericos">
                                    </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                    <label>Representante legal
                                          <input id="nombreRepresentanteContratista" name="nombreRepresentanteContratista" type="text" placeholder="Nombre del respresentante Legal" required="" autofocus=""> 
                                    </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                    <label>Cedula Del Representante 
                                              <input id="cedulaRepresentanteContratista" name="cedulaRepresentanteContratista" type="number" required="" title="Solo Valores Numericos">
                                    </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                   <label>Lugar de Expedicion
                                          <input id="lugarExpedicionContratista" name="lugarExpedicionContratista" type="text" placeholder="Nombre del respresentante Legal" required="" autofocus=""> 
                                    </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                          <label>Cargo Representante
                                          <input id="cargoRepresentanteContratista" name="cargoRepresentanteContratista" type="text" placeholder="Nombre del respresentante Legal" required="" autofocus=""> 
                                          </label>
                              </div>
                      </fieldset>            
                    </div>
                    <!-- DATOS DEL CONTRATANTE -->
                    <div class="small-12 large-12 medium-12  columns" id="contenido2">
                      <fieldset> 
                          <legend align="center"> DATOS DEL CONTRATANTE</legend>
                               
                              <div class="small-12 large-4  columns" id="contenido">
                                <label>Empresa Contratante
                                          <input id="nombreContratante" name="nombreContratante" type="text" placeholder="Nombre del Contratante" required="" autofocus=""> 
                                </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                  <label>Numero del NIT 
                                              <input id="nitContratante" name="nitContratante" type="number" required="" title="Solo Valores Numericos">
                                  </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                 <label>Representante legal
                                          <input id="nombreRepresentanteContratante" name="nombreRepresentanteContratante" type="text" placeholder="Nombre del respresentante Legal" required="" autofocus=""> 
                                  </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                          <label>Cedula Del Representante 
                                              <input id="cedulaRepresentanteContratante" name="cedulaRepresentanteContratante" type="number" required="" title="Solo Valores Numericos">
                                          </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                          <label>Lugar de Expedicion
                                          <input id="lugarExpedicionContratante" name="lugarExpedicionContratante" type="text" placeholder="Nombre del respresentante Legal" required="" autofocus=""> 
                                          </label>
                              </div>
                              <div class="small-12 large-4  columns" id="contenido">
                                          <label>Cargo Representante
                                          <input id="cargoRepresentanteContratante" name="cargoRepresentanteContratante" type="text" placeholder="Nombre del respresentante Legal" required="" autofocus=""> 
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
                                          <input id="nombreSupervisor" name="nombreSupervisor" type="text" placeholder="Nombre del Contratante" required="" autofocus=""> 
                                  </label> 
                              </div>
                              <div class="small-12 large-6 columns" id="contenido"> 
                                          <label>Cedula Del Supervisor 
                                              <input id="cedulaSupervisor" name="cedulaSupervisor" type="number" required="" title="Solo Valores Numericos">
                                          </label> 
                              </div>
                              <div class="small-12 large-3  columns" id="contenido">           
                                          <label>Fecha De Reunion
                                              <input id="fechaReunion" name="fechaReunion" type="date" required="">
                                          </label>
                              </div>
                              <div class="small-12 large-3  columns" id="contenido">
                                           <label>Fecha De Inicio
                                              <input id="fechaInicio" name="fechaInicio" type="date" required="">
                                          </label>
                              </div>
                              
                              <div class="small-12 large-3  columns" id="contenido">
                                         <label>Fecha De Finalizacion
                                              <input id="fechaFinalizacion" name="fechaFinalizacion" type="date" required="">
                                          </label>
                              </div>
                              <div class="small-12 large-3  columns" id="contenido">
                                          <label>Fecha De Firma
                                              <input id="fechaFirma" name="fechaFirma" type="date" required="">
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
                                  <textarea id="objetoContrato" name="objetoContrato" rows="5" required=""></textarea>
                                  </label> 
                              </div>
                              <div class="small-12 large-6  columns" id="contenido"> 
                                  <label>Forma De Pago
                                  <textarea id="formaPago" name="formaPago" rows="5" required=""></textarea>
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
                                <div class="large-4 columns" id="contenido2" align="middle">
                                  <input type="submit" class="button" name="iniciar" value="REGISTRAR" />                         
                                </div>
                                <div class="large-4 columns" id="contenido2" align="middle">
                                  <input type="reset" class="button" name="cancelar" value="REINICIAR" />                         
                                </div>
                                <div class="large-4 columns" id="contenido2" align="middle">
                                  <input type="reset" data-reveal-id="registrarContratos" class="button" name="cancelar" value="CANCELAR" />                         
                                </div>
                    </div>
                </form>
            </p>                                  
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div> 

    

    <div id="registroFacil" class="reveal-modal" data-reveal aria-labelledby="consultaPorNombre1" aria-hidden="true" role="dialog">
          <h2 id="consultaPorNombre1">REGISTRO SIMPLIFICADO DE CONTRATOS</h2>
            <p>
              <form action="gestionContratosFacil.php" method="post">
                   <div class="small-12 large-12 columns" id="contenido">
                      <label>SOLICITUD A MANIPULAR
                         <select name="idSolicitud" required=""  >
                          <option value=""></option>
                            <?php 
                             $bd->obtener_Solicitudes_Select();
                            ?>
                         </select>
                      </label>
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