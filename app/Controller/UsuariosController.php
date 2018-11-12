<?php
class UsuariosController extends AppController 

{
	public  $helpers = array ('Html','Form');
	public $components = array('Session');
    var $name='Usuario';
  
     public function usua() 
     {
		$this->set('usuarios', $this->Usuario->find('all'));
	 }


public function nuevo()
	{
		if ($this->request->is('post'))
	    {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) 
			{
				$this->Session->setFlash('El Usuario ha sido creado', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'usua'));

			}
			$this->Session->setFlash('No se pudo crear el usuarios');
		}
	}
}
?>



	
