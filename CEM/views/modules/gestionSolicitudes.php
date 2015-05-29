<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>GESTION DE SOLICITUDES DE CONTRATO</title>
       <?php
              include("../templates/encabezado.php");
        ?>
    </head>
    <body>
    <?php 
    include("../../persistense/Db.class.php");
    $bd=Db::getInstance();
    ?>

    <?php 
    include("../templates/header.php");
  
    ?>   

    
    <div class="row" id="contenedor">
        <!-- AREA PARA LA SESION -->
      <div class="row" >
        <div class="small-12 large-11 columns" align="right" >
            <?php
              include("../templates/infoSesion.php");
            ?>
        </div>
        <hr>
      </div>

        <!-- OPCIONES DE CONSULTA -->
        <div class="small-12 large-12 medium-12  columns">
           <h1 align="center"> GESTION DE SOLICITUDES - SIGMEP </h1>
        </div>
        <hr>
        <div class="small-12 large-6 columns" id="contenido3" align="middle" > 
            <img src="../img/solicitudes.png">
        </div>
        <div class="small-12 large-6 columns" align="middle"  id="contenido2"> 
         

           <div class="small-12 large-12 columns" align="middle" > 
                <a href="#" data-reveal-id="registrarJustificacion" class="button round expand">
                <img src="../img/registros.png" width="30px">
                REGISTRAR JUSTIFICACION
                </a>
           </div> 

           <div class="small-12 large-12 columns" align="middle" > 
                <a href="#" data-reveal-id="registrarSolicitudFacil" class="button round expand">
                <img src="../img/registros.png" width="30px">
                REGISTRAR SOLICITUD  DE CONTRATO SIMPLIFICADA
                </a>
           </div>



           <div class="small-12 large-12 columns" align="middle" > 
                <a href="#" data-reveal-id="registrarSolicitud" class="button round expand">
                  <img src="../img/registros.png" width="30px">
                   REGISTRAR NUEVA SOLICITUD DE CONTRATO
                </a>  
           </div> 

            <div class="small-12 large-12 columns" align="middle" > 
                <a href="#" data-reveal-id="registrarSolicitudPresupuestal" class="button round expand">
                <img src="../img/registros.png" width="30px">
                REGISTRAR NUEVA  SOLICITUD PRESUPUESTAL
                </a>
            </div> 
        </div>
                        
    </div>

   
    

    <div  align="middle"  id="registrarSolicitud" class="reveal-modal" data-reveal aria-labelledby="registrarSolicitud1" aria-hidden="true" role="dialog">
            
            
            <h2  align="middle">FORMULARIO DE REGISTRO DE SOLICITUD DE CONTRATO</h2>
              
            <p>
            <div class="large-12 columns" align="middle">
            
              <div class="small-12 large-12 medium-12  columns">
                    <form action="../registroSolicitudContrato.php" id="register" method="post">

                          <!-- INFORMACION DE LA SOLICITUD   -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">INFORMACION DE LA SOLICITUD</legend>
                                   
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Fecha De La Solicitud
                                              <input id="fechaSolicitud" name="fechaSolicitud" type="date" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>
                                        
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Tipo De Contrato
                                              <input id="tipoContrato" name="tipoContrato" type="text" required="" title="digita el tipo de contrato a solicitar"> 
                                          </label>
                                        </div>
                                                                                                       
                            </fieldset> 
                          </div>


                          <!-- DATOS GENERALES DEL CONTRATISTA -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">INFORMACION DEL CONTRATISTA</legend>
                                   
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Contratista
                                              <input id="contratista" name="contratista" type="text" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>
                                        <div class="small-12 large-6  columns" id="contenido">  
                                          <label>NIT  
                                              <input id="nitCC" name="nitCC" type="number" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Representante Legal
                                              <input id="representanteLegalContratista" name="representanteLegalContratista" type="text" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>
                                        <div class="small-12 large-6  columns" id="contenido">  
                                          <label>Cedula Del Representante Legal
                                              <input id="cedulaRepresentante" name="cedulaRepresentante" type="number" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>                                                                 
                            </fieldset> 
                          </div>

                          <!-- DATOS DEL ENCARGADO -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center">DATOS DEL  ENCARGADO</legend>                          
                                    <div class="small-12 large-4  columns" id="contenido">
                                          <label>Nombre De La Persona Encarga
                                              <input id="nombrePersonaEncargada" name="nombrePersonaEncargada" type="text" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>
                                        <div class="small-12 large-4  columns" id="contenido">
                                          <label>Direccion
                                              <input id="direccionPersonaEncargada" name="direccionPersonaEncargada" type="text" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>
                                        <div class="small-12 large-4  columns" id="contenido">
                                          <label>Numero Telefonico
                                              <input id="telefonoPersonaEncargada" name="telefonoPersonaEncargada" type="number" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>
                                         <div class="small-12 large-4  columns" id="contenido">
                                          <label>Area Solicitante
                                              <input id="areaSolicitante" name="areaSolicitante" type="text" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>
                                        <div class="small-12 large-4  columns" id="contenido">
                                          <label>Fax
                                              <input id="fax" name="fax" type="text" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div> 
                                        <div class="small-12 large-4  columns" id="contenido">
                                          <label>Correo Electronico
                                              <input id="email" name="email" type="email" required="" title="Solo direcciones de correo validas"> 
                                          </label>
                                        </div>    
                            </fieldset>            
                          </div>

                          <!-- INFORMACION TECNICA DE LA SOLICITUD-->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center"> INFORMACION TECNICA DE LA SOLICITUD</legend>
                                     
                                    <div class="small-12 large-6  columns" id="contenido">
                                      <label>Interventor y/o Supervisor
                                                <input id="nombreSuopervisor" name="nombreSupervisor" type="text" placeholder="Nombre del Supervisor" required="" autofocus=""> 
                                      </label>
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Referencia De La Solicitud
                                                    <input id="referenciaSolicitud" name="referenciaSolicitud" type="text" required="" placeholder="Programa, Evento o Proyecto Referente Al Contrato">
                                        </label>
                                    </div>
                            </fieldset>            
                          </div>
                      

                          <!-- INFORMACION DETALLADA DE LA SOLICITUD -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center">INFORMACION DETALLADA DE LA SOLICITUD</legend>
                                    
                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>Objeto del Contrato 
                                        <textarea id="objetoContrato" name="objetoContrato" rows="5" required=""></textarea>
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido"> 
                                        <label>Obligaciones Del Contratista
                                        <textarea id="obligacionesContratista" name="obligacionesContratista" rows="5" required=""></textarea>
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Obligaciones Del Contratante
                                        <textarea id="obligacionesContratante" name="obligacionesContratante" rows="5" required=""></textarea>
                                        </label> 
                                    </div>                                                       
                              </fieldset>
                          </div>
                      

                          <!-- INFORMACION FINANCIERA DE LA SOLICITUD -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center">INFORMACION FINANCIERA DE LA SOLICITUD</legend>
                                    
                                    <div class="small-12 large-4  columns" id="contenido">      
                                        <label>Valor Del contrato
                                                <input id="valorContrato" name="valorContrato" type="number" placeholder="Valor Inicia Del Contrato" required="" autofocus=""> 
                                        </label> 
                                    </div>
                                    <div class="small-12 large-4  columns" id="contenido">      
                                        <label>IVA 8%
                                                <input id="iva" name="iva" type="number" placeholder="Valor del IVA " required="" autofocus=""> 
                                        </label> 
                                    </div>
                                    <div class="small-12 large-4  columns" id="contenido">
                                        <label>Valor Total
                                                <input id="valorTotalContrato" name="valorTotalContrato" type="number" placeholder="Valor Total del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>
                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>Concepto  
                                        <textarea id="conceptoValor" name="conceptoValor" rows="5" required=""></textarea>
                                        </label> 
                                    </div>
                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>Formas y Medios De Pago  
                                        <textarea id="formaPago" name="formaPago" rows="5" required=""></textarea>
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Numero De Certificado Presupuestal
                                                <input id="numeroCertificado" name="numeroCertificado" type="number" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Fecha De Certificado Presupuestal
                                                <input id="fechaCertificado" name="fechaCertificado" type="date" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Numero De Compromiso Presupuestal
                                                <input id="numeroCompromiso" name="numeroCompromiso" type="number" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Fecha De Compromiso Presupuestal
                                                <input id="fechaCompromiso" name="fechaCompromiso" type="date" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>


                            </fieldset> 
                          </div>


                           <!-- INFORMACION ADICIONAL DE LA SOLICITUD -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center">INFORMACION ADICIONAL DE LA SOLICITUD</legend>

                                    <div class="small-12 large-12  columns" id="contenido">
                                      <select id="seguridadSocial" name="seguridadSocial" required="">
                                        <option value="">Seguridad Social</option>
                                        <option value="Aplica">Aplica Para La Seguridad Social</option>
                                        <option value="No Aplica">No Aplica Para La Seguridad Social</option>
                                        <option value="Activo">Esta Activo Para La Seguridad Social</option>
                                        <option value="Inactivo">Esta Inactivo Para La Seguridad Social</option>
                                      </select>
                                    </div>

                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>Observaciones 
                                        <textarea id="observaciones" name="observaciones" rows="5" placeholder="Presuntos riesgos, Clausulas Especificas U Otras" required=""></textarea>
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Fecha De Inicio Del Contrato
                                                <input id="fechaInicioContrato" name="fechaInicioContrato" type="date" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Fecha De Finalizacion Del Contrato
                                                <input id="fechaFinContrato" name="fechaFinContrato" type="date" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>                                                                           
                              </fieldset>
                          </div>                          
                          <!-- BOTONES CON LAS ACCIONES A REALIZAR -->
                          <div class="row">
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="submit" class="button" name="registrar" value="REGISTRAR" />                         
                                      </div>
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="reset" class="button" name="reiniciar" value="REINICIAR" />                         
                                      </div>
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="reset" data-reveal-id="registrarSolicitud" class="button" name="cancelar" value="CANCELAR" />                         
                                      </div>
                                      
                          </div>            
                    </form>
        
              </div>
            </div>

                
             </p>                                  
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div> 

    <!--  FORMULARIO DE REGISTRO DE SOLICITUD PRESUPUESTAL -->
    <div  align="middle"  id="registrarSolicitudPresupuestal" class="reveal-modal" data-reveal aria-labelledby="registrarSolicitud1" aria-hidden="true" role="dialog">
            
            <h2  align="middle">FORMULARIO DE REGISTRO DE SOLICITUD PRESUPUESTAL</h2>
            <hr>  
            <p>
            <div class="large-12 columns" align="middle">
            
              <div class="small-12 large-12 medium-12  columns">
                    <form action="../registroSolicitudContrato.php" id="register" method="post">

                          <!-- INFORMACION DE LA DEPENDENCIA SOLICITANTE   -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">DEPENDENCIA QUE PRESENTA LA SOLICITUD</legend>
                                   
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Nombre De Dependencia
                                              <input id="nombreDependencia" name="nombreDependencia" type="text" required="" title="Dependencia que solicita el tramite presupuestal"> 
                                          </label>
                                        </div>

                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Funcionario Solicitante
                                              <input id="funcionarioSolicitante" name="funcionarioSolicitante" type="text" required="" title="Funcionario que solicita el tramite presupuestal "> 
                                          </label>
                                        </div>
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Fecha De La Solicitud
                                              <input id="fechaSolicitud" name="fechaSolicitud" type="date" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>                                                
                            </fieldset> 
                          </div>


                          <!-- TIPO DE TRAMITE A SOLICITAR -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">TRAMITE SOLICITADO</legend>
                                    <div class="large-12 columns" id="contenido">
                                        <div class="large-6 columns" align="left">
                                          <input type="radio" name="tipoTramite" value="Disponibilidad Presupuestal" id="tipoTramite1">
                                          <label for="tipoTramite1">DISPONIBILIDAD PRESUPUESTAL</label>
                                        </div>
                                        <div class="large-6 columns" align="left">
                                          <input type="radio" name="tipoTramite" value="Compromiso Presupuestal" id="tipoTramite2">
                                          <label for="tipoTramite2">COMPROMISO PRESUPUESTAL</label>
                                        </div>
                                        <div class="large-6 columns" align="left">
                                          <input type="radio" name="tipoTramite" value="Adicion Disponibilidad" id="tipoTramite3">
                                          <label for="tipoTramite3">ADICION DISPONIBILIDAD</label>
                                        </div>
                                        <div class="large-6 columns" align="left">
                                          <input type="radio" name="tipoTramite" value="Adicion Compromiso" id="tipoTramite4">
                                          <label for="tipoTramite4">ACCION COMPROMISO</label>
                                        </div>
                                    </div>


                                                                                                 
                            </fieldset> 
                          </div>

                          <!-- DATOS DEL PROVEEDOR -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center">DATOS DEL PROVEEDOR</legend>                          
                                        
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Fecha De Recepcion
                                              <input id="fechaRecepcion" name="fechaRecepcion" type="date" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>

                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Nombre Del Beneficiario
                                              <input id="nombreBeneficiario" name="nombreBeneficiario" type="text" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>

                                        <div class="small-12 large-6  columns" id="contenido">
                                          <select id="tipoDocumento" name="tipoDocumento" required="">
                                            <option value="">Tipo De Documento</option>
                                            <option value="cedula">Cedula De Ciudadania</option>
                                            <option value="nit">NIT</option>
                                            <option value="rut">RUT</option>
                                          </select>
                                        </div> 

                                         <div class="small-12 large-4  columns" id="contenido">
                                          <label>Numero De Documento
                                              <input id="numeroDocumento" name="numeroDocumento" type="text" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>
                                        
                            </fieldset>            
                          </div>



                          <!-- INFORMACION CONTABLE-->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center"> INFORMACION DE CONTABILIDAD Y PRESUPUESTO</legend>
                                     
                                    <div class="small-12 large-6  columns" id="contenido">
                                      <label>Disponibilidad Presupuestal
                                                <input id="disponibilidadPresupuestal" name="disponibilidadPresupuestal" type="text" placeholder="Nombre del Supervisor" required="" autofocus=""> 
                                      </label>
                                    </div>
                                    
                            </fieldset>            
                          </div>
                      

                          <!-- INFORMACION DETALLADA DE LA SOLICITUD -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center">INFORMACION DETALLADA DE LA SOLICITUD</legend>
                                    
                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>Objeto De La Disponibilidad o Compromiso
                                        <textarea id="objetoDisponibilidad" name="objetoDisponibilidad" rows="5" required=""></textarea>
                                        </label> 
                                    </div>
                                                                                         
                              </fieldset>
                          </div>
                      

                          <!-- INFORMACION PRESUPUESTAL -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center">INFORMACION PRESUPUESTAL</legend>
                                     
                                    <div class="small-12 large-6  columns" id="contenido">
                                      <label>Nombre y Codigo Del Rubro Presupuestal
                                          <input id="rubroPresupuestal" name="rubroPresupuestal" type="text" placeholder="Nombre del Supervisor" required="" autofocus=""> 
                                      </label>
                                    </div>

                                    <div class="small-12 large-6  columns" id="contenido">
                                      <label>Duracion De Contrato
                                          <input id="duracionContrato" name="duracionContrato" type="text" placeholder="Nombre del Supervisor" required="" autofocus=""> 
                                      </label>
                                    </div>

                                    <div class="small-12 large-6  columns" id="contenido">
                                      <label>Duracion De Orden De Compra
                                          <input id="duracionOrden" name="duracionOrden" type="text" placeholder="Nombre del Supervisor" required="" autofocus=""> 
                                      </label>
                                    </div>

                                    <div class="small-12 large-6  columns" id="contenido">
                                      <label>Nombre del Beneficiario
                                          <input id="nombreBeneficiario2" name="nombreBeneficiario2" type="text" placeholder="Nombre del Supervisor" required="" autofocus=""> 
                                      </label>
                                    </div>

                                    <div class="small-12 large-6  columns" id="contenido">
                                      <label>Centro De Costos
                                          <input id="duracionOrden" name="duracionOrden" type="text" placeholder="Nombre del Supervisor" required="" autofocus=""> 
                                      </label>
                                    </div>

                                    <div class="small-12 large-6  columns" id="contenido">
                                      <label>Valor
                                          <input id="duracionOrden" name="duracionOrden" type="number" placeholder="Nombre del Supervisor" required="" autofocus=""> 
                                      </label>
                                    </div>

                                    <div class="small-12 large-6  columns" id="contenido">
                                      <label>Vigencia
                                          <input id="duracionOrden" name="duracionOrden" type="text" placeholder="Nombre del Supervisor" required="" autofocus=""> 
                                      </label>
                                    </div>

                                    <div class="small-12 large-6  columns" id="contenido">
                                      <label>Con Cargo A La Disponibilidad Numero ( Si es compromiso) 
                                          <input id="duracionOrden" name="duracionOrden" type="text" placeholder="Nombre del Supervisor" required="" autofocus=""> 
                                      </label>
                                    </div>
                            </fieldset>            
                          </div>
                                               
                          <!-- BOTONES CON LAS ACCIONES A REALIZAR -->
                          <div class="row">
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="submit" class="button" name="registrar" value="REGISTRAR" />                         
                                      </div>
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="reset" class="button" name="reiniciar" value="REINICIAR" />                         
                                      </div>
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="reset" data-reveal-id="registrarSolicitudPresupuestal" class="button" name="cancelar" value="CANCELAR" />                         
                                      </div>
                          </div>            
                    </form>
        
              </div>
            </div>

                
             </p>                                  
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div> 

    <!--  FORMULARIO DE REGISTRO DE JUSTIFICACION -->
    <div  align="middle"  id="registrarJustificacion" class="reveal-modal" data-reveal aria-labelledby="registrarJustificacion1" aria-hidden="true" role="dialog">
            <h2  align="middle">FORMULARIO DE REGISTRO DE JUSTIFICACION</h2>
             <hr> 
            <p>
            <div class="large-12 columns" align="middle">
            
              <div class="small-12 large-12 medium-12  columns">
                    <form action="../../controllers/register/justificaciones.php" id="register" method="post">

                          <!-- INFORMACION DE LA SOLICITUD   -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">INFORMACION DE LA JUSTIFICACION</legend>
                                   
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Fecha De La Solicitud
                                              <input id="fechaSolicitud" name="fechaSolicitud" type="date" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>                                        

                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Valor
                                              <input id="valor" name="valor" type="number" required="" title="digita el tipo de contrato a solicitar"> 
                                          </label>
                                        </div>

                                            
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Nombre Solicitante
                                              <select name="personaSolicitante" required=""  >
                                                <option value=""></option>
                                                <?php 
                                                  $bd->obtener_Personas_Select();
                                                ?>
                                              </select>
                                          </label>
                                        </div>
                                          <div class="small-12 large-6  columns" id="contenido">
                                            <label>Area Solicitante
                                                <select name="areaSolicitante" required=""  >
                                                  <option value=""></option>
                                                  <?php 
                                                   $bd->obtener_Areas_Select();
                                                  ?> 
                                                </select>
                                            </label>
                                         </div>
                                                                                                       
                            </fieldset> 
                          </div>


                          <!-- RAZONES PARA EL CONTRATO -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">INFORMACION DE LAS RAZONES</legend>
                                   
                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>QUE SE PIENSA HACER 
                                        <textarea  name="que" rows="5" required=""></textarea>
                                        </label> 
                                    </div> 

                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>PORQUE SE PIENSA HACER 
                                        <textarea name="porque" rows="5" required=""></textarea>
                                        </label> 
                                    </div> 

                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>PARA QUE SE PIENSA HACER 
                                        <textarea  name="paraque" rows="5" required=""></textarea>
                                        </label> 
                                    </div>
                            </fieldset> 
                          </div>

                           <!-- D ATOS ESPECIFICOS DE JUSTIFICACION-->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">INFORMACION ESPECIFICA DEL CONTRATO</legend>
                                    
                                    <div class="small-12 large-12  columns" id="contenido">
                                          <label>Plazo De Ejecucion Del Contrato
                                              <input id="plazo" name="plazo" type="text" required="" title="digita el tipo de contrato a solicitar"> 
                                          </label>
                                    </div>
                                    

                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>OBSERVACIONES
                                        <textarea id="observaciones" name="observaciones" rows="5" required=""></textarea>
                                        </label> 
                                    </div> 

                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>RESULTADO ESPERADO
                                        <textarea id="resultadoEsperado" name="resultadoEsperado" rows="5" required=""></textarea>
                                        </label> 
                                    </div> 

                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>ESPECIFICACIONES O CARACTERISTICAS
                                        <textarea id="especificaciones" name="especificaciones" rows="5" required=""></textarea>
                                        </label> 
                                    </div>    
                            </fieldset> 
                          </div>

                          <!-- INFORMACION DE LA SOLICITUD   -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">INFORMACION DE LA JUSTIFICACION</legend>
                                   
                                        <!-- <div class="small-12 large-12  columns" id="contenido">
                                          <label>Fecha De Autorizacion
                                              <input id="fechaAutorizacion" name="fechaAutorizacion" type="date" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>   -->                                      

                                        <!-- <div class="small-12 large-6  columns" id="contenido">
                                          <label>Jefe De Unidad
                                              <input id="jefeUnidad" name="jefeUnidad" type="number" required="" title="digita el tipo de contrato a solicitar"> 
                                          </label>
                                        </div>

                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Interventor
                                              <input id="interventor" name="interventor" type="text" required="" title="digita el tipo de contrato a solicitar"> 
                                          </label>
                                        </div>        -->                                                                                
                            </fieldset> 
                          </div>


                          
                          <!-- BOTONES CON LAS ACCIONES A REALIZAR -->
                          <div class="row">
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="submit" class="button" name="registrar" value="REGISTRAR" />                         
                                      </div>
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="reset" class="button" name="reiniciar" value="REINICIAR" />                         
                                      </div>
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="reset" data-reveal-id="registrarJustificacion" class="button" name="cancelar" value="CANCELAR" />                         
                                      </div>
                                      
                          </div>            
                    </form>
        
              </div>
            </div>

                
             </p>                                  
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div> 

   <!--  REGISTRAR SOLICITUD DE MANERA SIMPLIFICADA -->
    <div  align="middle"  id="registrarSolicitudFacil" class="reveal-modal" data-reveal aria-labelledby="registrarSolicitud1" aria-hidden="true" role="dialog">
            <h2  align="middle">REGISTRO DE SOLICITUD SIMPLIFICADA</h2>
            <p>
            <div class="large-12 columns" align="middle">
            
              <div class="small-12 large-12 medium-12  columns">
                    <form action="../../controllers/register/solicitudesContrato.php" id="register" method="post">

                          <!-- INFORMACION DE LA SOLICITUD   -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">INFORMACION DE LA SOLICITUD</legend>
                                   
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Fecha De La Solicitud
                                              <input id="fechaSolicitud" name="fechaSolicitud" type="date" required="" title="Solo Valores Numericos"> 
                                          </label>
                                        </div>
                                        
                                        <div class="small-12 large-6  columns" id="contenido">
                                          <label>Tipo De Contrato
                                              <input id="tipoContrato" name="tipoContrato" type="text" required="" title="digita el tipo de contrato a solicitar"> 
                                          </label>
                                        </div>
                                                                                                       
                            </fieldset> 
                          </div>


                          <!-- DATOS GENERALES DEL CONTRATISTA -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">INFORMACION DEL CONTRATISTA</legend>
                                   
                                        <div class="small-12 large-12  columns" id="contenido">
                                          <label>Contratista
                                              <select name="contratista" required=""  >
                                                <option value=""></option>
                                                <?php 
                                                  $bd->obtener_Empresas_Select();
                                                ?>
                                              </select>
                                          </label>
                                        </div>                                                       
                            </fieldset> 
                          </div>

                          <!-- DATOS GENERALES DEL ENCARGADO -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset > 
                                <legend align="center">INFORMACION DEL ENCARGADO</legend>
                                   
                                        <div class="small-12 large-12  columns" id="contenido">
                                          <label>Persona Encargada
                                              <select name="encargado" required=""  >
                                                <option value=""></option>
                                                <?php 
                                                  $bd->obtener_Personas_Select();
                                                ?>
                                              </select>
                                          </label>
                                        </div>

                                         <div class="small-12 large-12  columns" id="contenido">
                                          <label>Area Solicitante
                                              <select name="areaSolicitante" required=""  >
                                                <option value=""></option>
                                                <?php 
                                                  $bd->obtener_Areas_Select();
                                                ?>
                                              </select>
                                          </label>
                                        </div>                                                  
                            </fieldset> 
                          </div>
                          <!-- INFORMACION TECNICA DE LA SOLICITUD-->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center"> INFORMACION TECNICA DE LA SOLICITUD</legend>
                                       <div class="small-12 large-6  columns" id="contenido">
                                          <label>Interventor y/o Supervisor
                                              <select name="nombreSupervisor" required=""  >
                                                <option value=""></option>
                                                <?php 
                                                  $bd->obtener_Personas_Select();
                                                ?>
                                              </select>
                                          </label>
                                        </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Referencia De La Solicitud
                                          <input id="referenciaSolicitud" name="referenciaSolicitud" type="text" required="" placeholder="Programa, Evento o Proyecto Referente Al Contrato">
                                        </label>
                                    </div>
                            </fieldset>            
                          </div>
                          <!-- INFORMACION DETALLADA DE LA SOLICITUD -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center">INFORMACION DETALLADA DE LA SOLICITUD</legend>
                                    
                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>Objeto del Contrato 
                                        <textarea id="objetoContrato" name="objetoContrato" rows="5" required=""></textarea>
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido"> 
                                        <label>Obligaciones Del Contratista
                                        <textarea id="obligacionesContratista" name="obligacionesContratista" rows="5" required=""></textarea>
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Obligaciones Del Contratante
                                        <textarea id="obligacionesContratante" name="obligacionesContratante" rows="5" required=""></textarea>
                                        </label> 
                                    </div>                                                       
                              </fieldset>
                          </div>
                          <!-- INFORMACION FINANCIERA DE LA SOLICITUD -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center">INFORMACION FINANCIERA DE LA SOLICITUD</legend>
                                    <div class="small-12 large-4  columns" id="contenido">      
                                        <label>Valor Del contrato
                                                <input id="valorContrato" name="valorContrato" type="number" placeholder="Valor Inicia Del Contrato" required="" autofocus=""> 
                                        </label> 
                                    </div>
                                    <div class="small-12 large-4  columns" id="contenido">      
                                        <label>IVA En porcentaje
                                         <span class="posfix">gd</span>
                                                <input id="iva" name="iva" type="number" placeholder="Valor del IVA " required="" autofocus=""> 
                                        </label> 
                                    </div>
                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>Concepto  
                                        <textarea id="conceptoValor" name="conceptoValor" rows="5" required=""></textarea>
                                        </label> 
                                    </div>
                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>Formas y Medios De Pago  
                                        <textarea id="formaPago" name="formaPago" rows="5" required=""></textarea>
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Numero De Certificado Presupuestal
                                                <input id="numeroCertificado" name="numeroCertificado" type="number" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Fecha De Certificado Presupuestal
                                                <input id="fechaCertificado" name="fechaCertificado" type="date" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Numero De Compromiso Presupuestal
                                                <input id="numeroCompromiso" name="numeroCompromiso" type="number" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Fecha De Compromiso Presupuestal
                                                <input id="fechaCompromiso" name="fechaCompromiso" type="date" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>
                            </fieldset> 
                          </div>


                           <!-- INFORMACION ADICIONAL DE LA SOLICITUD -->
                          <div class="small-12 large-12 medium-12  columns" id="contenido2">
                            <fieldset> 
                                <legend align="center">INFORMACION ADICIONAL DE LA SOLICITUD</legend>

                                    <div class="small-12 large-12  columns" id="contenido">
                                      <select id="seguridadSocial" name="seguridadSocial" required="">
                                        <option value="">Seguridad Social</option>
                                        <option value="Aplica">Aplica Para La Seguridad Social</option>
                                        <option value="No Aplica">No Aplica Para La Seguridad Social</option>
                                        <option value="Activo">Esta Activo Para La Seguridad Social</option>
                                        <option value="Inactivo">Esta Inactivo Para La Seguridad Social</option>
                                      </select>
                                    </div>

                                    <div class="small-12 large-12  columns" id="contenido"> 
                                        <label>Observaciones 
                                        <textarea id="observaciones" name="observaciones" rows="5" placeholder="Presuntos riesgos, Clausulas Especificas U Otras" required=""></textarea>
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Fecha De Inicio Del Contrato
                                                <input id="fechaInicioContrato" name="fechaInicioContrato" type="date" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>
                                    <div class="small-12 large-6  columns" id="contenido">
                                        <label>Fecha De Finalizacion Del Contrato
                                                <input id="fechaFinContrato" name="fechaFinContrato" type="date" placeholder="Valor del Contrato" required="" autofocus="">
                                        </label> 
                                    </div>                                                                           
                              </fieldset>
                          </div>                          
                          <!-- BOTONES CON LAS ACCIONES A REALIZAR -->
                          <div class="row">
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="submit" class="button" name="registrar" value="REGISTRAR" />                         
                                      </div>
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="reset" class="button" name="reiniciar" value="REINICIAR" />                         
                                      </div>
                                      <div class="large-4 columns" id="contenido2" align="middle">
                                        <input type="reset" data-reveal-id="registrarSolicitudFacil" class="button" name="cancelar" value="CANCELAR" />                         
                                      </div>
                                      
                          </div>            
                    </form>
        
              </div>
            </div>

                
             </p>                                  
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div> 
    <?php
      include("../templates/final.php");
    ?>

    </body>
</html>