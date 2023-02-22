<?php
require_once 'model/MainLogic.php';
class MainController{
	
	public function __construct() {
		$this->MainLogic = new MainLogic();
	}

	public function __destruct(){

	}

	public function handleRequest()
	{
		try {
			$op = isset($_REQUEST['op'])?$_REQUEST['op']:NULL;
			switch ($op) {
				

				//cases


			}			
		} catch (ValidationException $e) {
				$errors = $e->getErrors();

		}
		
	}

	//functions
}

?>