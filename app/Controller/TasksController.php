<?php
class TasksController extends AppController {
var $name = 'Tasks';
function index() {
$this->set('tasks', $this->Task->find('all'));
}
}
?>