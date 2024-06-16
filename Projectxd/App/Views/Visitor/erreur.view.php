<?php
// App/Views/error.view.php

// Démarrer la session si ce n'est pas déjà fait
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur</title>
</head>

<body>
    <h1>Une erreur s'est produite</h1>
    <p><?php echo $_SESSION['error_message'] ?? 'Une erreur inconnue s\'est produite.'; ?></p>
    <a href="home.php">Retour à la page d'accueil</a>
</body>

</html>