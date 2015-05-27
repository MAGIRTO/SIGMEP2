<div class="small-12 large-4 columns" id="contenido2" align="middle" > 
    <a href="#" data-reveal-id="registrarUsuario" class="button round expand">      
      REGISTRAR USUARIO
    </a>    
</div> 
<div  align="middle"  id="registrarUsuario4" 
class="reveal-modal" 
data-reveal aria-labelledby="registrarUsuario1" 
aria-hidden="true" role="dialog">
      
</div>


<div class="large-12 columns" align="middle">

	<h2> USUARIOS REGISTRADOS EN EL SISTEMA</h2>
	
	<table border="1px">
	
		<thead>
			<tr>
				<td>NOMBRE DE USUARIO</td>
				<td>CORREO ELECTRONICO</td>
				<td>CONTRASEÑA</td>
				<td>TIPO DE USUARIO</td>
				<td>OPCIONES</td>
			</tr>
		</thead>

		<tbody>
				<?php foreach ($usuarios as $usuarios_item): ?>
					<tr>
						<td><?php echo $usuarios_item['nombre'] ?></td>
						<td><?php echo $usuarios_item['email'] ?></td>
						<td><?php echo $usuarios_item['password'] ?></td>
						<td><?php echo $usuarios_item['tipo_Usuario'] ?></td>
						<td>
							<a href="<?php echo $usuarios_item['slug'] ?>" 
    							target="_blank" onclick="window.open(this.href, this.target,
    						 	'width=600,height=380'); return false;">
    						 		<img src="<?php echo base_url(); ?>public/foundation/img/editar.png" width="30px">
    						 </a>

    						 <a href="<?php $url='delete/'.$usuarios_item['slug'];

    						 echo $url  ?>" 
    							 >
    						 		<img src="<?php echo base_url(); ?>public/foundation/img/eliminar.png" width="30px">
    						 </a>


						</td>

				    </tr>
				<?php endforeach ?>
		</tbody>

	</table>
</div>


