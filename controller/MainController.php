<?php

class MainController
{
    public function __construct()
    {

    }
    public function __destruct()
    {
    }
    public function handleRequest()
    {
        try {

            $controller = isset($_GET['con']) ? $_GET['con'] : 'content';

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
