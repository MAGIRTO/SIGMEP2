<div class="large-12 columns" align="middle">

<h2> USUARIOS REGISTRADOS EN EL SISTEMA</h2>
	<table border="2px">
	<thead>
		<tr>
			<td>NOMBRE DE USUARIO</td>
			<td>CORREO ELECTRONICO</td>
			<td>CONTRASEÑA</td>
			<td>TIPO DE USUARIO</td>
		</tr>
	</thead>
			<?php foreach ($usuarios as $usuarios_item): ?>
				<tr>
					<td><?php echo $usuarios_item['nombre'] ?></td>
					<td><?php echo $usuarios_item['email'] ?></td>
					<td><?php echo $usuarios_item['password'] ?></td>
					<td><?php echo $usuarios_item['tipo_Usuario'] ?></td>
			    </tr>
			<?php endforeach ?>
	<tbody>
			
	</tbody>

	</table>


	<table border="2px">
	
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
						<td><a href="<?php echo $usuarios_item['nombre'] ?>">EDITAR</a></td>
				    </tr>
				<?php endforeach ?>
		</tbody>

	</table>
</div>
