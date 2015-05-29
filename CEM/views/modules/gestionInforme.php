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
              session_cache_limiter('nocache,private');
              session_name('pruebas');
              session_start();    
                    echo '            
              <a href="logout.php">
              <h6 align="rigth">'.$_SESSION['nombre'].'(salir <img src="../img/logout.png" width="20px"> ) </h6></a>';
              
            $idContrato= $_POST['idContrato'];
            $fechaInforme= $_POST['fechaInforme'];
             $sql=" SELECT * FROM contratos
                WHERE idContratos='$idContrato'";
              $stmt=$bd->ejecutar($sql);
              $x=$bd->obtener_fila($stmt,0);
              $datetime1 = new DateTime($x['fechaInicio']);
              $datetime2 = new DateTime($x['fechaFin']);
              $datetime3 = new DateTime($fechaInforme);
              $tiempoTotal = $datetime1->diff($datetime2);
              $tiempoTranscurrido = $datetime1->diff($datetime3);
              $tiempoPorTranscurrir = $datetime3->diff($datetime2);


          ?>
        </div>
        <hr>
      </div>


            <div class="small-12 large-12 medium-12  columns">
              <h1 align="center">REGISTRO DE NUEVO INFORME</h1>
            </div>
            <hr>
            <div class="small-12 large-12 medium-12  columns"  id="contenido">
              <form action="../../controllers/register/informe.php"  method="post">                
                <!-- DATOS GENERALES DEL INFORME -->
                <div class="small-12 large-12 medium-12  columns" id="contenido2">
                  <fieldset > 
                      <legend align="center"> INFORMACION GENERAL DEL INFORME</legend>

                              <div class="small-12 large-6  columns" id="contenido">
                                <label>Id Del Contrato 
                                    <input id="idContrato" readonly="readonly" name="idContrato" 
                                    value="<?php  echo $idContrato ;?>" 

                                    type="text" placeholder="" required="" autofocus=""> 
                                </label>
                              </div> 
                         
                              <div class="small-12 large-6  columns" id="contenido"> 
                                <label>Concepto Del Supervisor
                                  <textarea id="conceptoInforme" name="conceptoInforme" rows="5" required=""></textarea>
                                </label> 
                              </div>
                              <div class="small-12 large-6 columns" id="contenido">
                                <label>Fecha Del Informe 
                                          <input id="fechaInforme" name="fechaInforme" 
                                            <?php
                                                echo "value =".$fechaInforme;      
                                             ?>
                                          type="date" required="">
                                  </label>
                              </div>
                              <div class="small-12 large-6  columns" id="contenido">
                                <label>Periodo Del Informe 
                                    <input id="periodoInforme" name="periodoInforme" type="text" placeholder="" required="" autofocus=""> 
                                </label>
                              </div> 

                                                 
                                              
                  </fieldset> 
                </div>

                <!-- ADICIONES O AMPLIACIONES -->
                <div class="small-12 large-12 medium-12  columns" id="contenido2">
                  <fieldset> 
                      <legend align="center">DATOS DE ADICIONES O AMPLIACIONES</legend>
                          

                          <div class="small-12 large-6  columns" id="contenido"> 
                                <label>Observaciones
                                  <textarea id="observacionesAdicion" name="observacionesAdicion" rows="5" required=""></textarea>
                                </label> 
                          </div>

                          <div class="small-12 large-6  columns" id="contenido">
                            <label>Tiempo
                                      <input id="tiempoAdicion" name="tiempoAdicion" type="text" placeholder="" required="" autofocus=""> 
                            </label>
                          </div>
                          <div class="small-12 large-6  columns" id="contenido">
                                <label>Dinero 
                                          <input id="dineroAdicion" name="dineroAdicion" type="number" required="" title="Solo Valores Numericos">
                                </label>
                          </div>
                          
                  </fieldset>            
                </div>

                <!-- DATOS DEL CUMPLIMIENTO EN TIEMPO -->
                <div class="small-12 large-12 medium-12  columns" id="contenido2">
                  <fieldset> 
                      <legend align="center"> DATOS DEL CUMPLIMIENTO EN TIEMPO</legend>
                           
                          <div class="small-12 large-12 columns" id="contenido"> 
                                <label>Estado Del Contrato
                                  <textarea id="estadoContrato" name="estadoContrato" rows="3" required=""></textarea>
                                </label> 
                          </div>


                          <div class="small-12 large-6  columns" id="contenido">
                            <label>Tiempo Transcurrido
                                      <input id="tiempoTranscurridoContrato" name="tiempoTranscurridoContrato"
                                        <?php                                                
                                          echo "value =".$tiempoTranscurrido->format('%a');
                                        ?>

                                       type="text" placeholder="" required="" autofocus=""> 
                            </label>
                          </div>
                          <div class="small-12 large-6  columns" id="contenido">
                              <label>Porcentaje de Tiempo Transcurrido Del Contrato 
                                          <input id="porcentajeTTC" name="porcentajeTTC" 
                                          <?php 
                                                $porcentajeTTC=$tiempoTranscurrido->format('%a')/$tiempoTotal->format('%a')*100;
                                                echo "value =".number_format($porcentajeTTC,2);
                                            ?>
                                          type="number" required="" title="Solo Valores Numericos">
                              </label>
                          </div>

                          <div class="small-12 large-6  columns" id="contenido">
                            <label>Tiempo Por Transcurrir
                                      <input id="tiempoPorTranscurrirContrato" name="tiempoPorTranscurrirContrato"
                                        <?php                                                
                                          echo "value =".$tiempoPorTranscurrir->format('%a');
                                        ?>
                                       type="text" placeholder="Nombre del Contratante" required="" autofocus=""> 
                            </label>
                          </div>
                          <div class="small-12 large-6  columns" id="contenido">
                              <label>Porcentaje de Tiempo Por Transcurrir 
                                          <input id="porcentajeTPTC" name="porcentajeTPTC"
                                            <?php 
                                                $porcentajeTTPC=$tiempoPorTranscurrir->format('%a')/$tiempoTotal->format('%a')*100;
                                                echo "value =".number_format($porcentajeTTPC,2);
                                            ?>
                                           type="number" required="" title="Solo Valores Numericos">
                              </label>
                          </div>
                          

                  </fieldset>            
                </div>            

                <!-- INFORMACION DE PAGO POR SEGURIDAD SOCIAL -->
                <div class="small-12 large-12 medium-12  columns" id="contenido2">
                  <fieldset> 
                      <legend align="center">INFORMACION DE PAGO POR SEGURIDAD SOCIAL</legend>
                          
                          <div class="small-12 large-6  columns" id="contenido">           
                              <label>Mes
                                <input id="mesPSS" name="mes" type="month" required="">
                              </label>
                          </div>

                          <div class="small-12 large-6  columns" id="contenido">      
                              <label>Planilla
                                <input id="planillPSS" name="planillPSS" type="text" placeholder="" required="" autofocus=""> 
                              </label> 
                          </div>

                          <div class="small-12 large-6 columns" id="contenido"> 
                                <label>IBC 
                                  <input id="ibcPSS" name="ibcPSS" type="number" required="" title="Solo Valores Numericos">
                                </label> 
                          </div>
                          
                          <div class="small-12 large-6  columns" id="contenido">
                                       <label>Fecha De Pago
                                          <input id="fechaPSS" name="fechaPSS" type="date" required="">
                                      </label>
                          </div>
                          
                                                             
                  </fieldset> 
                </div>

                <!-- INFORMACION DE ESTADO FINANCIERO DEL CONTRATO -->
                <div class="small-12 large-12 medium-12  columns" id="contenido2">
                  <fieldset> 
                      <legend align="center">INFORMACION DE ESTADO FINANCIERO DEL CONTRATO</legend>
                       <div class="small-12 large-12  columns" id="contenido">      
                              <label>Estado Financiero Del Contrato
                                <input id="estadoFinancieroContrato" name="estadoFinancieroContrato" type="text" placeholder="" required="" autofocus=""> 
                              </label> 
                        </div>
                  </fieldset> 
                </div>

                 <!-- INFORMACION DE LA FACTURA -->
                <div class="small-12 large-12 medium-12  columns" id="contenido2">
                  <fieldset> 
                      <legend align="center">INFORMACION DE LA FACTURA</legend>
                          <div class="small-12 large-4 columns" id="contenido"> 
                                <label>Numero De La Factura
                                  <input id="numFactura" name="numFactura" type="number" required="" title="Solo Valores Numericos">
                                </label> 
                          </div>
                          
                          <div class="small-12 large-4  columns" id="contenido">
                                       <label>Fecha
                                          <input id="fechaFactura" name="fechaFactura" type="date" required="">
                                      </label>
                          </div>

                          <div class="small-12 large-4 columns" id="contenido"> 
                                <label>Valor
                                  <input id="valorFactura" name="valorFactura" type="number" required="" title="Solo Valores Numericos">
                                </label> 
                          </div>
                                                                              
                    </fieldset>
                </div>

                <!-- INFORMACION ACUMULADA -->
                <div class="small-12 large-12 medium-12  columns" id="contenido2">
                  <fieldset> 
                      <legend align="center">INFORMACION ACUMULADA DEL CONTRATO</legend>
                          
                          <div class="small-12 large-6 columns" id="contenido"> 
                                <label>Saldo Del Contrato Facturado 
                                  <input id="saldoCF" name="saldoCF" type="number" required="" title="Solo Valores Numericos">
                                </label> 
                          </div>

                          <div class="small-12 large-6 columns" id="contenido"> 
                                <label>Valor Del Contrato Ejecutado
                                  <input id="valorCE" name="valorCE" type="number" required="" title="Solo Valores Numericos">
                                </label> 
                          </div>
                          <div class="small-12 large-6 columns" id="contenido"> 
                                <label>Saldo Del Contrato Por Facturar 
                                  <input id="saldoCPF" name="saldoCPF" type="number" required="" title="Solo Valores Numericos">
                                </label> 
                          </div>

                          <div class="small-12 large-6 columns" id="contenido"> 
                                <label>Valor Del Contrato Por Ejecutar
                                  <input id="valorCPE" name="valorCPE" type="number" required="" title="Solo Valores Numericos">
                                </label> 
                          </div>
                  </fieldset> 
                </div>

                 <!-- DATOS TECNICOS DEL CONTRATO -->
                <div class="small-12 large-12 medium-12  columns" id="contenido2">
                  <fieldset> 
                      <legend align="center">INFORMACION TECNICA DEL CONTRATO</legend>
                          
                          <div class="small-12 large-12  columns" id="contenido"> 
                              <label>Objeto del Contrato 
                              <textarea id="objetoContrato" name="objetoContrato" rows="8" 
                              required=""><?php
                                                echo $x['objetoContrato'];      
                                             ?>
                              </textarea>
                              </label> 
                          </div>
                          
                          <div class="small-12 large-12  columns" id="contenido">
                              <label>Alcance
                              <textarea id="alcance" name="alcance" rows="8" 
                              required=""><?php
                                                echo $x['alcance'];      
                                             ?></textarea>
                              </label> 
                          </div>                                                       
                    </fieldset>
                </div>

                <!-- BOTONES CON LAS ACCIONES A REALIZAR -->                

                <div class="row">
                            <div class="large-12 columns" id="contenido2" align="middle">
                              <input type="submit" class="button expand round" name="iniciar" value="REGISTRAR" />                         
                            </div>
                            
                            
                            
                </div>               
              </form>       
            </div>

    </div>

  
    
    <?php
      include("../templates/final.php");
    ?>
    </body>
</html>