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

            $action = isset($_GET['op']) ? $_GET['op'] : 'login';

            switch ($action) {
                case 'login':
                    $this->login();
                    break;

                    case 'registration':
                        $this->registration();
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
        if(!empty($_POST)) {
            $result = $this->Auth->login($_POST['password'], $_POST['email']);
            if ($result) {
//                header('Location: /welcome');
                exit();
            }
        }
        include 'views/pages/login.php';
    }

    public function registration()
    {
        include './views/pages/Registration.php';
    }

}
