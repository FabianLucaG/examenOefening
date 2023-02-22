<?php

require_once 'MainLogic.php';

class Auth extends MainLogic
{
    public function login($email, $password)
    {
        try {
            $password = Functions::encrypt($password);

            $sql = "SELECT * FROM `users` WHERE email = '{$email}' AND password = '{$password}'";
            $result = self::readData($sql);
            $result = $result->fetch(PDO::FETCH_ASSOC);

//            echo print_r($result);

            echo $result;

            if (!$result) {
                return false;
            } else {
                $_SESSION["user"] = [
                    'id' => $result->id,
                    'role_id' => $result->role_id
                ];
                return true;
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

}
