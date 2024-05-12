<?php

class DataBaseConfig
{
    public $servername;
    public $username;
    public $password;
    public $databasename;

    public function __construct()
    {
        $this->servername = 'mysql'; // Используем имя сервиса MySQL из docker-compose.yml
        $this->username = 'root'; // Используем имя пользователя root
        $this->password = 'root'; // Используем пароль root
        $this->databasename = 'loginbase';

    }
}

?>
