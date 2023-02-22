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
                case 'index':
                    $this->login();
                    break;

                case 'registration':
                    $this->registration();
                    break;
                case 'forgot':
                    $this->forgotPassword();
                    break;

                default:
                    http_response_code(404);
                    break;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }


    public function login()
    {
        include 'views/pages/login.php';

        //var_dump($this->Auth->getStuffFromDb());

    }

    public function registration()
    {
        include './views/pages/Registration.php';
    }

    public function forgotPassword()
    {
        include './views/pages/Forgot.php';
    }
}
