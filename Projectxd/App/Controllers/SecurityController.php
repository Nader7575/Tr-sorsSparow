<?php

namespace App\Controllers;

class SecurityController{
    //verif, nettoyage, failles, authentification
    public function cleanInput($data): false|string
    {
        if (!isset($data) || empty($data)){
            return false;
        }
        return htmlspecialchars(trim($data));
    }

    //CSRF
    public function generateCsrfToken(): string
    {
        $_SESSION['csrf_token']=bin2hex(random_bytes(32));
        return $_SESSION['csrf_token'];
    }

    public function verifyCsrfToken(string $token): bool
    {
        $tokenIsValid= isset($_SESSION['csrf_token']) && $_SESSION['csrf_token']===$token;
        return $tokenIsValid;
    }

    public static function isLogAdmin() {
        //Est-ce que l'user est bien défini, est-ce que son rôle l'est aussi et est-ce que son rôle est égal à admin ?
        return isset($_SESSION["user"]) && isset($_SESSION["user"]["role"]) && $_SESSION["user"]["role"]===["admin"];
    }
}