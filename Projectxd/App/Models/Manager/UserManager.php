<?php

namespace App\Models\Manager;

use App\Core\Database;
use App\Models\Entity\User;
use db;
use PDO;
use PDOException;

class UserManager
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


    public function insertUser(User $user)
    {
        try {

            # Prepared Statements 
            $statement = $this->pdo->prepare("INSERT INTO clients (first_name, last_name, username, email, phone, address, password, created_at) VALUES (?,?,?,?,?,?,?,?)");

            # Statement execution with params
            $statement->execute([$user->getFirstName(), $user->getLastName(), $user->getUsername(), $user->getEmail(), $user->getPhone(), $user->getAddress(), $user->getPassword(), $user->getCreatedAt()]);
            return true;
        } catch (PDOException $e) {
            echo ($e->getMessage());
            return false;
        }
    }




    public function getUserByEmail(string $email): mixed
    {
        $stmt = $this->pdo->prepare("SELECT * FROM clients WHERE email=:email");
        $stmt->execute(["email" => $email]);
        $user = $stmt->fetch();
        return $user;
    }

    public function verifyPassword(string $email, string $password): bool
    {
        $user = $this->getUserByEmail($email);

        if ($user && password_verify($password, $user->getPassword())) {
            return true;
        }

        return false;
    }
}
