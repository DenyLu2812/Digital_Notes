<h2>Crear Area</h2>

<?php
	echo $this->Form->create('Area');
	echo $this->Form->input('id');
	echo $this->Form->input('area');
	echo $this->Form->input('created');
	echo $this->Form->input('modified');
	echo $this->Form->end('Crear Area');
?>