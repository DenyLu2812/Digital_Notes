<h2>Tasks</h2>

<?php
 if(empty($tasks)): 
 ?>

 No hay datos en la lista

<?php 
  else: 
?>

<table>
<tr>
<th>Title</th>
<th>Status</th>
<th>Created</th>
<th>Modified</th>
<th>Actions</th>
</tr>

<?php 
   foreach ($tasks as $linea): 
?>
<tr>
<td>
    <?php echo $linea['Task']['title'] ?>
</td>

<td>


<?php
if($linea['Task']['done']) 
    echo "Deny";
else 
    echo "Pending";
?>
</td>

<td>
<?php echo $linea['Task']['created'] ?>
</td>
<td>
<?php echo $linea['Task']['modified'] ?>
</td>
<td>

</td>




</tr>

<?php endforeach; ?>
</table>
<?php 
  endif; 
  ?>
  
  