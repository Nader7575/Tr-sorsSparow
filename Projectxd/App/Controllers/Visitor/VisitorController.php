<?php

namespace App\Controllers\Visitor;

use App\Controllers\AbstractController;
use App\Controllers\SecurityController;
use App\Models\Manager\UserManager;

class VisitorController extends AbstractController
{

    private SecurityController $security;

    public function __construct()
    {
        $this->security = new SecurityController();
    }


    public function home(): void
    {
        $this->security->generateCsrfToken();
        $title = "Accueil";

        // Views to display
        $list = ["Visitor/home.view"];


        // Calling of the method to display the views
        $this->render($list, ["title" => $title]);
    }

    public function intense(): void
    {
        $title = "Collection intense";

        $list = ["Visitor/intense.view"];

        $this->render($list, ["title" => $title]);
    }

    public function prive(): void
    {
        $title = "Collection prive";

        $list = ["Visitor/prive.view"];

        $this->render($list, ["title" => $title]);
    }

    public function verif(): void
    {
        if (!empty($_POST)) {
            $email = $_POST["email"];
            $password = $_POST["motdepasse"];
        } else {
        }

        $usr = new UserManager();
        $usr->getUserByEmail($email);

        $usr->verifyPassword($email, $password);
    }

    public function connexion(): void
    {
        $title = "se connecter";

        $list = ["Visitor/connexion.view"];

        $this->render($list, ["title" => $title]);
    }

    public function spray(): void
    {
        $title = "spray d'ambiance";

        $list = ["Visitor/spray.view"];

        $this->render($list, ["title" => $title]);
    }


    public function contact(): void
    {
        $title = "Contacter nous";

        $list = ["Visitor/contact.view"];

        $this->render($list, ["title" => $title]);
    }



    public function register(): void
    {
        $title = "inscription";

        $list = ["Visitor/register.view"];

        $this->render($list, ["title" => $title]);
    }

    public function parfums(): void
    {
        $title = "Nos Parfums";

        $list = ["Visitor/parfum.view"];

        $this->render($list, ["title" => $title]);
    }

    public function cart(): void
    {
        $title = "shoppingcart";

        $list = ["Visitor/shopping.view"];

        $this->render($list, ["title" => $title]);
    }


    public function test(): void
    {
        // $title = "Se connecter";
        // $this->render("Visitor/test", [
        //     'title' => $title
        // ]);
    }
}
