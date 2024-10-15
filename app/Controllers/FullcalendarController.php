<?php

namespace App\Controllers;

use App\Models\ModelHorario;
class FullcalendarController extends  BaseController
{
    protected $horario;
    protected $helpers = ['antltl'];
    public function __construct()
    {
        $this->horario = new ModelHorario(); 
    }
   public function index()
	{
		return view('diretor/homediretor/homediretor');
	}

	public function loadData()
	{
		// on page load this ajax code block will be run
		$data = $this->horario->where([
			'start >=' => $this->request->getVar('start'),
			'end <='=> $this->request->getVar('end')
		])->findAll();

		return json_encode($data);
	}

	public function ajax()
	{

		switch ($this->request->getVar('type')) {

				// For add EventModel
			case 'add':
				$data = [
					'title' => $this->request->getVar('title'),
					'start' => $this->request->getVar('start'),
					'end' => $this->request->getVar('end'),
				];
				$this->horario->insert($data);
				return json_encode($this->horario);
				break;

				// For update EventModel        
			case 'update':
				$data = [
					'title' => $this->request->getVar('title'),
					'start' => $this->request->getVar('start'),
					'end' => $this->request->getVar('end'),
				];

				$event_id = $this->request->getVar('id');
				
				$this->horario->update($event_id, $data);

				return json_encode($this->horario);
				break;

				// For delete EventModel    
			case 'delete':

				$event_id = $this->request->getVar('id');

				$this->horario->delete($event_id);

				return json_encode($this->horario);
				break;

			default:
				break;
		}
	}
}
