<?php

namespace App\Controllers;

abstract class AbstractController
{
    public function render(array $viewNames, array $data = [], string $template = 'user'): void
    {

        // Get every view content (if there's only one then the foreach isn't necessary tho)
        foreach ($viewNames as $viewName) {
            ob_start();
            extract($data);
            include VIEWS_PATH . $viewName . '.php';
            $content = ob_get_clean();
        }

        // if admin, then :
        $templateFile = ($template === 'admin') ? 'Admin/templateAdmin.php' : 'template.php';
        include VIEWS_PATH . $templateFile;
    }
    public  function  redirectToRoute(string $route): void
    {
        header("Location: " . URL . $route);
        exit();
    }
}
