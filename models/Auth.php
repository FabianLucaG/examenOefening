<?php

require_once 'MainLogic.php';

class Auth extends MainLogic
{
    public function getStuffFromDb() {
        $dump = self::readsData('SELECT * FROM `users`');

        $dump = $dump->fetchAll(PDO::FETCH_ASSOC);

        return var_dump($dump);
    }

}
