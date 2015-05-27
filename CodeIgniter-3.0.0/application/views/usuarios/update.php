<div class="large-12 columns" id="contenido" align="middle" >
                      
                        <h1 align="center"> EDICION DE USUARIOS</h1>

                            <?php 
                            $this->load->helper('form');
                            echo form_open('usuarios/update') ?>

                            <div class="row">
                              <div class="small-2 large-2 columns">
                                <span class="prefix">
                                    <img src="<?php echo base_url(); ?>public/foundation/img/useredit.png" width="30px">
                                </span>
                              </div>
                              <div class="large-10 small-10 columns">                      
                                  <input name="nombreUsuario" type="text" 
                                    value="<?php echo $usuarios_item['nombre'] ?>"
                                   required="" />
                              </div>
                            </div>  
                            <div class="row">
                                <div class="small-2 large-2 columns">
                                  <span class="prefix">
                                     <img src="<?php echo base_url(); ?>public/foundation/img/email.png" width="30px">
                                  </span>
                                </div>
                                <div class="large-10 small-10 columns">                      
                                    <input name="email" type="email" 
                                     value="<?php echo $usuarios_item['email'] ?>"
                                     required="" />
                                </div>
                            </div>    
                            <div class="row">
                                <div class="small-2 large-2 columns">
                                  <span class="prefix">
                                     <img src="<?php echo base_url(); ?>public/foundation/img/password.png" width="30px">
                                  </span>
                                </div>
                                <div class="large-10 small-10 columns">                      
                                  <input name="password" type="password" 
                                   value="<?php echo $usuarios_item['password'] ?>"
                                   required="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-2 large-2 columns">
                                  <span class="prefix">
                                    <img src="<?php echo base_url(); ?>public/foundation/img/tipousuario.png" width="30px">
                                  </span>
                                </div>
                                <div class="large-10 small-10 columns">                      
                                    <select name="tipo_Usuario"

                                    required=""  >
                                              <option  value="<?php echo $usuarios_item['tipo_Usuario'] ?>" >

                                               <?php   echo $usuarios_item['tipo_Usuario'];   ?></option>
                                              <option value="Jefe De Area">Jefe De Area</option>
                                              <option value="Secretaría General">Secretaría General</option>
                                              <option value="Supervisor">Interventor</option>
                                              <option value="Abogado">Abogado</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row" id="contenido" align="middle">
                                <div class="large-6 small-6 columns" id="contenido2">
                                  <input type="submit" class="button expand round" name="registrar" value="ACTUALIZAR" />                         
                                </div>
                                
                                <div class="large-6 small-6 columns" id="contenido2" >
                                  <input type="reset" data-reveal-id="registrarUsuario" onclick="window.close();"  class="button expand round" 
                                  name="cancelar" value="CANCELAR" />                         
                                </div>
                            </div>
                            <div class="large-10 small-10 columns">                      
                                  <input name="slug" type="text" 
                                   value="<?php echo $usuarios_item['slug'] ?>"
                                   required="" />
                            </div>
</form>
</div>


