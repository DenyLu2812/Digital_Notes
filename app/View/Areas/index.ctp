<!-- Para ver la conecion de la base de datos con la vista
<pre>
<?php
print_r($areas);
?>
</pre>
!-->

<h2>Lista de Meseros</h2>
<!--Crear un link de nuevo-->
<?php
	echo $this->Html->link('Crear Mesero', array('controller' => 'areas', 'action' => 'nuevo'));

?>
<table>
<tr>
	   	<td>Id</td>
	   	<td>Area</td>
	   	<td>Fecha_Crea</td>
	   	<td>Fecha_Modi  </td>
	   	<td>Acciones</td>
	 </tr>

<?php foreach ($areas as $area): ?>
	<tr>
		<td> <?php echo $area['Area']['id']; ?> </td>
		<td> <?php echo $area['Area']['area']; ?> </td>
		<td> <?php echo $area['Area']['created']; ?> </td>
		<td> <?php echo $area['Area']['modified']; ?> </td>
		<td> <?php echo $this->Html->link('Detalle', array('controller' => 'areas', 'action' =>'ver', $area['Area']['id'])); ?></td>
	</tr>
	
<?php endforeach; ?>

</table>