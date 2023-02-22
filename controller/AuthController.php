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

                default:
                    http_response_code(404);
                    $this->getStuff();
                    break;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getStuff() {
        echo $this->Auth->getStuffFromDb();
    }

    public function login()
    {
        include 'views/pages/login.php';
    }

    public function registration()
    {
        if(isset($_POST)) {
            $result = $this->Auth->login($_POST['password'], $_POST['email']);
            if ($result) {
                header('Location: /welcome');
                exit();
            }
        }

        include './views/pages/Registration.php';
    }

}
