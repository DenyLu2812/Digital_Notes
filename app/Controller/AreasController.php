<?php

class AreasController extends AppController
{
	public  $helpers = array ('Html','Form');
	public $components = array('Session');

	public function index ()

	
	{
		$this->set('areas', $this->Area->find('all'));
	}

	public function ver($id = null)
	{

		if (!$id) 
		{
			throw new NotFoundException('Datos Invalidos');
		}
		$area = $this->Area->findById($id);

		if (!$area)
		{
			throw new NotFoundException('El mesero no Existe');
		}
		$this->set('area', $area);
	}

	public function nuevo()
	{
		if ($this->request->is('post'))
	    {
			$this->Area->create();
			if ($this->Area->save($this->request->data)) 
			{
				$this->Session->setFlash('El area ha sido creada', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));

			}
			$this->Session->setFlash('No se pudo crear la area');
		}
	}
}



?>