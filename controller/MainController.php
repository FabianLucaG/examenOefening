<?php
require_once 'AuthController.php';

class MainController
{
	public function __construct()
	{
		$this->AuthController = new AuthController();
	}
	public function __destruct()
	{
	}
	public function handleRequest()
	{
		try {

			$controller = isset($_GET['con']) ? $_GET['con'] : 'auth';

			switch ($controller) {
				case 'auth':
					$this->AuthController->handleRequest();
					break;
				default:
					http_response_code(404);
					break;
			}
		} catch (Exception $e) {
			throw $e;
		}
	}
}
