<?php

namespace App\Controllers\User;

use App\Models\Entity\User;
use App\Controllers\AbstractController;
use App\Controllers\SecurityController;
use App\Models\Manager\UserManager;

class UserController extends AbstractController
{
    private $security;
    private $pdo;

    public function __construct($pdo)
    {
        $this->security = new SecurityController();
        $this->pdo = $pdo;
    }

    public function registerValidation(): void
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                throw new \Exception("Méthode de requête invalide");
            }

            if (!$this->security->verifyCSRFToken($_POST['csrf_token'])) {
                throw new \Exception("Token CSRF invalide");
            }

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $createdAt = date("Y-m-d H:i:s");

            $user = new User($firstname, $lastname, $username, $email, $phone, $address, $password, $createdAt);

            $usmgr = new UserManager();
            $result = $usmgr->insertUser($user);

            if ($result) {
                header('Location:home');
            } else {
                header('Location:register');
            }
        } catch (\Exception $e) {
            // Gestion de l'exception (affichage d'un message d'erreur ou redirection)
            echo $e->getMessage();
            // Vous pouvez également rediriger vers une page d'erreur ou afficher un message d'erreur convivial
            // header('Location: /errorPage');
        }
    }
}
