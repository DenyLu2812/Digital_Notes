<h2>Crear Nuevo Usuario</h2>

<?php
	echo $this->Form->create('Usuario');
	echo $this->Form->input('Username');
	echo $this->Form->input('Password');
	echo $this->Form->input('Tipo_documento');
	echo $this->Form->input('N°_documento');
	echo $this->Form->input('Nombres');
	echo $this->Form->input('Apellidos');
	echo $this->Form->input('Direccion');
	echo $this->Form->input('Telefono');
	echo $this->Form->input('Email');
	echo $this->Form->input('Genero');
	echo $this->Form->input('Fecha_nacimiento');
	echo $this->Form->input('Estudiante');
	echo $this->Form->input('Estado');
	echo $this->Form->input('Coordinador');
	echo $this->Form->input('Docente');
	echo $this->Form->input('Administrador');
	echo $this->Form->end('Crear Usuario');
?>

