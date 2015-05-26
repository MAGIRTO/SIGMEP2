<!-- MENU INICIAL -->
      <div class="row" >
        <div class="small-12 large-12 columns" align="middle" >    
          <div class="icon-bar four-up" role="navigation">
            <a class="item" data-reveal-id="iniciarSesion" aria-labelledby="#itemlabel1">
              <img src="<?php echo base_url(); ?>public/foundation/img/logueo.png" >
              <label id='itemlabel1'>INICIO DE SESION</label>
            </a>
            <a class="item" data-reveal-id="registrarUsuario" aria-labelledby="#itemlabel2">
              <img src="<?php echo base_url(); ?>public/foundation/img/inscription.png" >
              <label id='itemlabel2'>REGISTRATE</label>
            </a>
            <a class="item" data-reveal-id="ayuda" aria-labelledby="#itemlabel3">
              <img src="<?php echo base_url(); ?>public/foundation/img/help.png" >
              <label id='itemlabel3'>AYUDA</label>
            </a>
            <a class="item" aria-labelledby="#itemlabel4">
              <img src="<?php echo base_url(); ?>public/foundation/img/falla.png" >
              <label id='itemlabel4'>REPORTAR FALLA</label>
            </a>          
          </div>
        </div>  
      </div>

      <!-- INFORMACION DEL SOFTWARE -->
      <div class="row">
         <div class="small-12 large-12 medium-12  columns">
           <h1 align="center"> SISTEMA INTEGRADO DE GESTION- METROPARQUES </h1>
         </div>
         <div class="small-12 large-6 medium-12  columns" align="middle">
              <img src="<?php echo base_url(); ?>public/foundation/img/gestion2.png" width="90%">
         </div>
         <div class="small-12 large-6 medium-12  columns" align="middle" id="contenido">
              <p align="justify">
                <h6 align="justify">
                El SIGMEP ( Sistema Integrado De Gestion De MetroParques) es una aplicacion 
                informatica creada con el proposito de apoyar los procesos documentales de 
                la compañia. Inicialmente se pretende incluir en nuestro aplicativo el proceso
                de contrataciones de la compañia, permitiendo  realizar un control de los
                contratos que se realizan en la empresa, desde el inicio de las solicitud de contrato, 
                 el diligenciamiento del mismo y el seguimiento de cada contrato permitiendo 
                 exportar los archivos en un formato pdf y ademas supliendo la aparicion de 
                 errores al momento de imprimir cada formato necesario para su posterior inclusion 
                 en el archivo central.
                <br>
                <br>
                </h6>
              </p>
          </div>        
      </div>
    
    <!-- INFORMACION DE LOS PROCESOS INSTITUCIONALES -->
      <div class="row" >
          <div class="small-12 large-12 medium-12  columns" id="contenido" >
            <hr>
            <h4 align="center"> INFORMACION DE LOS PROCESOS INSTITUCIONALES</h4>            
            <div class="small-12 large-12   columns">               
                                  <nav class="top-bar" data-topbar role="navigation">
                                    <ul class="title-area">
                                      <li class="toggle-topbar menu-icon"><a href="#"><span>MENU</span></a></li>
                                    </ul>

                                    <section class="top-bar-section">   
                                      <ul class="middle">
                                        
                                        <li class="has-dropdown">
                                          <a > PROCESOS ESTRATEGICOS</a>
                                          <ul class="dropdown">
                                            <li><a href=""> Desarrollo Organizacional</a></li>  
                                            <li><a href="combos.html"> Mercadeo</a></li>    
                                            <li><a href="tiendaRXN.html"> Mejoramiento Continuo</a></li>          
                                          </ul>
                                        </li>

                                        <li class="has-dropdown">
                                          <a > PROCESOS MISIONALES</a>
                                          <ul class="dropdown">
                                            <li><a href="#">Eventos Y Logistica</a></li> 
                                            <li><a href="#">Servicios En Los Parques</a></li>
                                            <li><a href="#">Alimentos Y Bebidas</a></li>                  
                                          </ul>
                                        </li>
                                        <li class="has-dropdown">
                                          <a >  PROCESOS DE APOYO</a>
                                          <ul class="dropdown">
                                            <li><a href="#">Gestion Documental</a></li> 
                                            <li><a href="#">Gestion Financiera</a></li>
                                            <li><a href="#">Gestion De Mantenimiento</a></li>           
                                            <li><a href="#">Gestion Juridica</a></li> 
                                            <li><a href="registroContrato.html">Gestion de Bienes y Servicios</a></li>
                                            <li><a href="#">Gestion Del Talento Humano</a></li> 
                                            <li><a href="#">Gestion De Las Tecnologias De La Informacion</a></li>
                                             <li><a href="#">Gestion Ambiental</a></li>                   
                                          </ul>
                                        </li>      
                                        <li class="has-dropdown">
                                          <a >   PROCESOS DE EVALUACION</a>
                                          <ul class="dropdown">
                                            <li><a href="#">Evaluacion y Auditoria Interna</a></li>                
                                          </ul>
                                        </li>
                                      </ul>    
                                    </section>
                                  </nav>
            </div>      
          </div>      
            <div class="small-12 large-6 medium-12  columns" align="middle" id="contenido">
                <p align="justify">
                  <h6 align="justify">
                  El SIGMEP ( Sistema Integrado De Gestion De MetroParques) es una aplicacion 
                  informatica creada con el proposito de apoyar los procesos documentales de 
                  la compañia. Inicialmente se pretende incluir en nuestro aplicativo el proceso
                  de contrataciones de la compañia, permitiendo  realizar un control de los
                  contratos que se realizan en la empresa, desde el inicio de las solicitud de contrato, 
                   el diligenciamiento del mismo y el seguimiento de cada contrato permitiendo 
                   exportar los archivos en un formato pdf y ademas supliendo la aparicion de 
                    errores al momento de imprimir cada formato necesario para su posterior inclusion 
                    en el archivo central.
                  <br>
                  <br>
                  </h6>
                </p>
            </div>
            <div class="small-12 large-6 medium-12  columns" align="middle">
                <img src="<?php echo base_url(); ?>public/foundation/img/ProcesosSIG.png" width="90%">
            </div>
      </div>

      <!-- VENTANAS DE ACCESO  DESDE LA NAV BAR -->
      <div  align="middle"  id="registrarUsuario" class="reveal-modal" data-reveal aria-labelledby="registrarUsuario1" aria-hidden="true" role="dialog">
          <h2 id="registrarUsuario1" align="middle">REGISTRO DE UN NUEVO USUARIO</h2>
            <div class="large-6 columns" >
                <img src="<?php echo base_url(); ?>public/foundation/img/inscription.png" width="60%">
            </div>
            <div class="large-6 columns" >

                
                <form action="accesoDatos/usuarios.php"  method="post"> 
                        <div class="row">
                            <div class="small-2 large-2 columns">
                              <span class="prefix">
                                  <img src="<?php echo base_url(); ?>public/foundation/img/useredit.png" width="30px">
                              </span>
                            </div>
                            <div class="large-10 small-10 columns">                      
                                <input name="nombreUsuario" type="text" placeholder="Nombre De Usuario" required="" />
                            </div>
                        </div>  
                        <div class="row">
                            <div class="small-2 large-2 columns">
                              <span class="prefix">
                                 <img src="<?php echo base_url(); ?>public/foundation/img/email.png" width="30px">
                              </span>
                            </div>
                            <div class="large-10 small-10 columns">                      
                                <input name="email" type="email" placeholder="Correo Electronico" required="" />
                            </div>
                        </div>    
                        <div class="row">
                            <div class="small-2 large-2 columns">
                              <span class="prefix">
                                 <img src="<?php echo base_url(); ?>public/foundation/img/password.png" width="30px">
                              </span>
                            </div>
                            <div class="large-10 small-10 columns">                      
                              <input name="password" type="password" placeholder="Password" required="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="small-2 large-2 columns">
                              <span class="prefix">
                                <img src="<?php echo base_url(); ?>public/foundation/img/tipousuario.png" width="30px">
                              </span>
                            </div>
                            <div class="large-10 small-10 columns">                      
                                <select name="tipo_Usuario" required=""  >
                                          <option value="">Tipo De Usuario</option>
                                          <option value="Jefe De Area">Jefe De Area</option>
                                          <option value="Secretaría General">Secretaría General</option>
                                          <option value="Supervisor">Interventor</option>
                                          <option value="Abogado">Abogado</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="large-4 columns" id="contenido2" align="middle">
                          <input type="submit" class="button" name="iniciar" value="INICIAR" />                         
                        </div>
                        <div class="large-4 columns" id="contenido2" align="middle">
                          <input type="reset" class="button" name="cancelar" value="REINICIAR" />                         
                        </div>
                        <div class="large-4 columns" id="contenido2" align="middle">
                          <input type="reset" data-reveal-id="registrarUsuario" class="button" name="cancelar" value="CANCELAR" />                         
                        </div>
                </form>
            </div>                           
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
      </div> 



        <div  align="middle"  id="iniciarSesion" class="reveal-modal" data-reveal aria-labelledby="iniciarSesion1" aria-hidden="true" role="dialog">
          <h2 id="iniciarSesion1" align="middle">INICIO DE SESION</h2>
            <p>
            <div class="large-12 columns" align="middle">
              <div class="large-6 columns" >
                  <img src="<?php echo base_url(); ?>public/foundation/img/logueo.png" width="60%">
              </div>            

              <div class="large-6 columns" >
                <form action="accesoDatos/logueo2.php" id="register" method="post">
                  <!-- DATOS DE LOGUEO -->

                  <div class="row">
                    <div class="small-2 large-2 columns">
                      <span class="prefix">
                          <img src="<?php echo base_url(); ?>public/foundation/img/useredit.png" width="30px">
                      </span>
                    </div>
                    <div class="large-10 small-10 columns">                      
                        <input name="nombreUsuarioLogueo" type="text" placeholder="Nombre De Usuario" required="" />
                    </div>
                </div> 

                <div class="row">
                    <div class="small-2 large-2 columns">
                      <span class="prefix">
                         <img src="<?php echo base_url(); ?>public/foundation/img/password.png" width="30px">
                      </span>
                    </div>
                    <div class="large-10 small-10 columns">                      
                      <input name="passwordLogueo" type="password" placeholder="Password" required="" />
                    </div>
                </div>

                 <div class="row">
                            <div class="large-4 columns" id="contenido2" align="middle">
                              <input type="submit" class="button" name="iniciar" value="INICIAR" />                         
                            </div>
                            <div class="large-4 columns" id="contenido2" align="middle">
                              <input type="reset" class="button" name="cancelar" value="REINICIAR" />                         
                            </div>
                            <div class="large-4 columns" id="contenido2" align="middle">
                              <input type="reset" data-reveal-id="iniciarSesion" class="button" name="cancelar" value="CANCELAR" />                         
                            </div>
                  </div>                 
              </form>
              </div>
            </div>

                
             </p>                                  
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div> 

      <div  align="middle"  id="ayuda" class="reveal-modal" data-reveal aria-labelledby="ayuda1" aria-hidden="true" role="dialog">
          <div class="row">
            <div class="large-4 columns" align="middle">
                <img src="<?php echo base_url(); ?>public/foundation/img/help.png">
            </div>
            <div class="large-8 columns" align="middle">
                <h2 id="registrarSolicitud1" align="middle">SECCION DE AYUDA</h2>
                <hr>
                <h6 align="Justify"> En la seccion de ayuda encontraras soporte para tus dificultades
                 de uso del aplicativo; Aca podras consultar el manual  tecnico y de usuario para poder 
                 ayudarte en todas las dificultades que has venido teniendo.
                <br><br>
                Te sugerimos leer las instrucciones de uso con detenimiento para poder entender 
                el sistema y su modo de uso. Ademas tambien te sugerimos que entiendas  a cabalidad 
                cada uno de los procesos que el sistema esta soportando en estos momentos.
                </h6>
              </div>
            </div>          
            <h2  align="middle">OPCIONES</h2>
            <hr>
            <p>   
            </p>                                  
            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
      </div> 