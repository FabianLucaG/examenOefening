<?php

require_once './models/Auth.php';

class AuthController
{
    public function __construct()
    {
        $this->Auth = new Auth();
    }

    public function __destruct()
    {
    }

    public function handleRequest()
    {
        try {

            $action = isset($_GET['op']) ? $_GET['op'] : 'index';

            switch ($action) {

                default:
                    http_response_code(404);
                    break;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

}
