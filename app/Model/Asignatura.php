<?php


class Asignatura extends AppModel
{
	var $name='Asignatura';
	var $belongsTo='Area';
	var $hasAndBelongsToMany='Estudiante';
}
?>