<?php

require_once 'MainLogic.php';

class Auth extends MainLogic
{
    public function login($email, $password)
    {
        try {
            $password = Functions::encrypt($password);

            $sql = "SELECT * FROM `users` WHERE user_email = '{$email}' AND user_password = '{$password}'";
            $result = self::readData($sql);
            $result = $result->fetch(PDO::FETCH_ASSOC);

            echo var_dump($result);

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
