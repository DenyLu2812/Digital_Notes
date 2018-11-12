CREATE TABLE tasks (
id int(10) unsigned NOT NULL auto_increment,
title varchar(255) NOT NULL,
done tinyint(1) default NULL,
created datetime default NULL,
modified datetime default NULL,
PRIMARY KEY (id)
);





<?php
class Task extends AppModel {
var $name = 'Task';
}
?>



<?php
class TasksController extends AppController {
var $name = 'Tasks';
function index() {
$this->set('tasks', $this->Task->find('all'));
}
}
?>

vista carpeta Tasks


<h2>Tasks</h2>
<?php if(empty($tasks)): ?>
There are no tasks in this list
<?php else: ?>
<table>
<tr>
<th>Title</th>
<th>Status</th>
<th>Created</th>
<th>Modified</th>
<th>Actions</th>
</tr>
<?php foreach ($tasks as $task): ?>
<tr>
<td>
<?php echo $task['Task']['title'] ?>
</td>
<td>
<?php
if($task['Task']['done']) echo "Done";
else echo "Pending";
?>
</td>
<td>
<?php echo $task['Task']['created'] ?>
</td>
<td>
<?php echo $task['Task']['modified'] ?>
</td>
<td>
<!-- actions on tasks will be added later -->
</td>


</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>




-------




