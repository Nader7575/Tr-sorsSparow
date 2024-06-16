<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
    body {
      background-color: #212529;
    }
  </style>
</head>
<body>
<div class="container">
        <h1 class="text-center text-light my-4">Formulaire d'inscription</h1>
        <form>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="lastname" placeholder="Nom" required>
                        <label for="lastname">Nom</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="firstname" placeholder="Prénom" required>
                        <label for="firstname">Prénom</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Mail</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="age" aria-label="Âge" required>
                    <option value="" disabled selected>Choisissez votre âge</option>
                </select>
                <label for="age">Âge</label>
            </div>

            <script>
                const selectAge = document.getElementById("age");

                for (let i = 1; i <= 120; i++) {
                    const option = document.createElement("option");
                    option.value = i;
                    option.textContent = i;
                    selectAge.appendChild(option);
                }
            </script>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" placeholder="Pseudo" required>
                <label for="username">Pseudo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Mot de passe" required>
                <label for="password">Mot de passe</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="confirm_password" placeholder="Confirmer le mot de passe" required>
                <label for="confirm_password">Confirmer le mot de passe</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="country" aria-label="Pays" required>
                    <option value="" disabled selected>Choisissez un pays</option>
                    <option value="fr">France</option>
                    <option value="us">États-Unis</option>
                    <option value="ca">Canada</option>
                    <!-- api -->
                </select>
                <label for="country">Pays</label>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
</body>
</html>
