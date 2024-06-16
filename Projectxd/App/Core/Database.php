<?php

namespace App\Core;

use PDO;


class Database
{
    private PDO $pdo;
    private $dsn;
    private $username;
    private $password;
    // private $options;
    public function __construct()
    {
        $dsn = "mysql:host=172.18.0.101;dbname=parfum;charset=utf8;port=3306";
        $username = "root";
        $password = "root";
        // $options = [];
        // parent::__construct($dsn, $username, $password, $options);

        $this->pdo = new PDO($dsn, $username, $password);
    }
}
