<?php
class Usuario extends AppModel
{
	


public $validate = array(
       "Password" => array(
       	         'notBlank' => array(
       	         	      'rule' => 'notBlank'
       	         	              ),
       	      'numeric' => array( 
       	         	     'rule' => 'numeric',
       	         	     'message' => 'solo Numeros'
       	         	          )
       	         ),
       


       "Username" => array(
       	        'rule' => 'notBlank'
       	),
       "Tipo_documento" => array(
       	        'rule' => 'notBlank'
       	),

"N°_documento" => array(
       	         'notBlank' => array(
       	         	      'rule' => 'notBlank'
       	         	              ),
       	      'numeric' => array( 
       	         	     'rule' => 'numeric',
       	         	     'message' => 'solo Numeros'
       	         	          )
       	         ),
       



       "Nombres" => array(
       	        'rule' => 'notBlank'
       	),
       "Apellidos" => array(
       	        'rule' => 'notBlank'
       	),
       "Direccion" => array(
       	        'rule' => 'notBlank'
       	),
       "Username" => array(
       	        'rule' => 'notBlank'
       	),
       
       
"Telefono" => array(
       	         'notBlank' => array(
       	         	      'rule' => 'notBlank'
       	         	              ),
       	      'numeric' => array( 
       	         	     'rule' => 'numeric',
       	         	     'message' => 'solo Numeros'
       	         	          )
       	         ),
"Email" => array(
       	        'rule' => 'notBlank'
       	),
       "Genero" => array(
       	        'rule' => 'notBlank'
       	),
        "Fecha_nacimiento" => array(
       	        'rule' => 'notBlank'
      ) 
      


 );





}
?>




