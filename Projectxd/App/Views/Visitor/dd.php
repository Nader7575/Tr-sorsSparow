<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 300px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="<?= URL ?>registerValidation" method="POST" class="needs-validation" novalidate>

        <div class="container">
            <h2>Inscription</h2>
            <form class="box" action="" method="post">
                <h1 class="box-logo box-title"><a href="https://waytolearnx.com/">AirJordan.com</a></h1>
                <h1 class="box-title">S'inscrire</h1>
                <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
                <input type="text" class="box-input" name="email" placeholder="Email" required />
                <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
                <input type="submit" name="submit" value="S'inscrire" class="box-button" />
                <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
            </form>
        </div>
</body>

</html>
</body>

</html>