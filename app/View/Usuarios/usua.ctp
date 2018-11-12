
<h2>Usuarios</h2>
<?php
	echo $this->Html->link('Crear Usuario', array('controller' => 'usuarios', 'action' => 'nuevo'));

?>
<table>
<tr>
<th>username</th>
<th>password</th>
<th>tipo_documento_usuario</th>
<th>nu_documento_usuario</th>
<th>nombres_usuario</th>

<th>apellidos_usuario</th>
<th>direccion_usuario</th>
<th>telefono_usuario</th>

<th>email_usuario</th>
<th>genero_usuario</th>
<th>fecha_nacimiento_usuario</th>

<th>estudiante_idestudiante</th>
<th>estado_idestado</th>
<th>coordinador_idcoordinador</th>
<th>docente_iddocente</th>
<th>administrador_idadministrador</th>
</tr>

</table>



<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td> <?php echo $usuario['Usuario']['username']; ?> </td>
		<td> <?php echo $usuario['Usuario']['password']; ?> </td>
		<td> <?php echo $usuario['Usuario']['tipo_documento_usuario']; ?> </td>
		<td> <?php echo $usuario['Usuario']['nu_documento_usuario']; ?> </td>
		<td> <?php echo $usuario['Usuario']['nombres_usuario']; ?> </td>
		<td> <?php echo $usuario['Usuario']['apellidos_usuario']; ?> </td>
		<td> <?php echo $usuario['Usuario']['direccion_usuario']; ?> </td>
		<td> <?php echo $usuario['Usuario']['telefono_usuario']; ?> </td>
		<td> <?php echo $usuario['Usuario']['email_usuario']; ?> </td>
		<td> <?php echo $usuario['Usuario']['genero_usuario']; ?> </td>
		<td> <?php echo $usuario['Usuario']['fecha_nacimiento_usuario']; ?> </td>
		<td> <?php echo $usuario['Usuario']['estudiante_idestudiante']; ?> </td>
		<td> <?php echo $usuario['Usuario']['estado_idestado']; ?> </td>
		<td> <?php echo $usuario['Usuario']['coordinador_idcoordinador']; ?> </td>
		<td> <?php echo $usuario['Usuario']['docente_iddocente']; ?> </td>
		<td> <?php echo $usuario['Usuario']['administrador_idadministrador']; ?> </td>


	</tr>
	
<?php endforeach; ?>

</table>















