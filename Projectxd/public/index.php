<?php

session_start();

use App\Controllers\Admin\AdminController;
use App\Controllers\SecurityController;
use App\Controllers\User\UserController;
use App\Controllers\Visitor\VisitorController;

require_once __DIR__ . '/../vendor/autoload.php';


//define('URL',"http://localhost:8888/marketlev/");
define("URL", str_replace("public/", "", str_replace(
    "index.php",
    "",
    (isset($_SERVER['HTTPS']) ? "https" : "http")
        . "://$_SERVER[HTTP_HOST]"
        . dirname($_SERVER['PHP_SELF'])
) . '/'));

define('VIEWS_PATH', __DIR__ . '/../App/Views/');


$visitor = new VisitorController();
$user = new UserController($_GET);
$admin = new AdminController();

try {
    if (empty($_GET["page"])) {
        $visitor->home();
    } else {
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));

        switch ($url[0]) {
            case "cart":
                $visitor->cart();
                break;

            case "intense":
                $visitor->intense();
                break;
            case "prive":
                $visitor->prive();
                break;
            case "verif":
                $visitor->verif();
                break;
            case "spray":
                $visitor->spray();
                break;
            case "contact":
                $visitor->contact();
                break;
            case "home":
                $visitor->home();
                break;
            case "parfums":
                $visitor->parfums();
                break;
            case "connexion":
                $visitor->connexion();
                break;

            case "loginValidation":
                $user->loginValidation();
                break;
            case "logout":
                $user->logout();
                break;
            case "register":
                $visitor->register();
                break;
            case "registerValidation":
                $user->registerValidation();
                break;
            case "admin":
                if (SecurityController::isLogAdmin()) {
                    if (!empty($url[1])) {
                        switch ($url[1]) {
                            case "dashboard":
                                $admin->dashboard();
                                break;
                                // case "product":
                                // if (!empty($url[2]) && $url[2]==='addproduct'){
                                // $admin->addProduct();
                                // }else{
                                // $admin->indexProduct();
                                // }
                            default:
                                $admin->dashboard();
                        }
                    } else {
                        $admin->dashboard();
                        break;
                    }
                } else {
                    $visitor->home();
                    break;
                }
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $exception) {

    //  var_dump(VIEWS_PATH); 
    // die();
    $path = "../App/Views/";
    $error = $exception->getMessage();
    include $path . 'erreur.view.php';
}
