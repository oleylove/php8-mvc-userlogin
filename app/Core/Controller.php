<?php
namespace App\Core;

class Controller{

	public function view($view, $data = [])
	{
		$dirView = VIEW.$view.'.php';
		
		if (file_exists($dirView)) {
			require_once $dirView;

		}else{
			$this->redirect('errors/pagenotfound');
		}	
	}

	public function model($model)
	{
		$method = MODEL.$model.'.php';
		if (file_exists($method)) {
			require_once $method;
			$InstanceModel = '\\App\\Models\\' . $model;
			return new $InstanceModel;
		}else{
			$this->redirect('errors/pagenotfound');
		}	
	}

	public function redirect($view){
		header('location: '. BASEURL . '/'.$view);
	}
}