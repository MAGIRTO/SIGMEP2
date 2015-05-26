<div  align="middle"  id="registrarUsuario" class="reveal-modal small" data-reveal aria-labelledby="registrarUsuario1" aria-hidden="true" role="dialog">
      
    <div class="row">
              <h2 id="registrarUsuario1" align="middle">REGISTRO DE UN NUEVO USUARIO</h2>
                
                <div class="large-12columns" id="contenido" align="middle" >
                     
                      <?php echo form_open('usuarios/create') ?>

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
                            <div class="row" id="contenido" align="middle">
                            <div class="large-4 columns" id="contenido2" align="middle">
                              <input type="submit" class="button expand round" name="registrar" value="REGISTRAR" />                         
                            </div>
                            <div class="large-4 columns" id="contenido2" align="middle">
                              <input type="reset" class="button expand round" name="cancelar" value="REINICIAR" />                         
                            </div>
                            <div class="large-4 columns" id="contenido2" align="middle">
                              <input type="reset" data-reveal-id="registrarUsuario" class="button expand round" name="cancelar" value="CANCELAR" />                         
                            </div>
                            </div>
                    </form>
                </div> 
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>                          
                
     </div> 
</div>
