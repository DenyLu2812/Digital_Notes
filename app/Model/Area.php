<?php

class Area extends AppModel

 {

/*validacion de los campos que no deben enviarse sin datos el mas sencillo metodo
public $validate = array(
       "area" => array(
       	         'rule' => 'notBlank'
       	)
	);
*/


/*validacion de el campo se solo numerico*/
public $validate = array(
       "area" => array(
       	         'notBlank' => array(
       	         	      'rule' => 'notBlank'
       	         	              ),
       	      'numeric' => array( 
       	         	     'rule' => 'numeric',
       	         	     'message' => 'solo Numeros'
       	         	          )
       	         )
       );




/*	var $name='Area';
	
	var $hasMany='Asignatura';*/
 }
?>