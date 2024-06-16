<div class="container">
    <h1 class="text-center text-light my-4">
        Formulaire d'inscription
    </h1>
        <form action="<?= URL ?>registerValidation" method="POST" class="needs-validation" novalidate>
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
            <div id="password_errors" class="mb-3">
            <div id="length" class="error-message">Au moins 8 caractères</div>
            <div id="lowercase" class="error-message">Au moins une lettre minuscule</div>
            <div id="uppercase" class="error-message">Au moins une lettre majuscule</div>
            <div id="number" class="error-message">Au moins un chiffre</div>
            <div id="special" class="error-message">Au moins un caractère spécial</div>
            </div>
            <input type="hidden" name="csrf_token" value="<?= $token ?>">
            <button type="submit" class="btn btn-primary" id="submit_button" disabled>S'inscrire</button>
        </form>
</div>
    <script>
    document.addEventListener("DOMContentLoaded", function (){
        const password= document.getElementById("password");
        const confirmPassword = document.getElementById("confirm_password");
        const lengthError=document.getElementById("length");
        const uppercaseError=document.getElementById("uppercase");
        const lowercaseError=document.getElementById("lowercase");
        const numberError=document.getElementById("number");
        const specialError=document.getElementById("special");
        const submitButton=document.getElementById("submit_button");

        function validatePassword(){
            lengthError.style.color = password.value.length >= 8 ? 'green':'red';
            lowercaseError.style.color= /[a-z]/.test(password.value) ? 'green':'red';
            uppercaseError.style.color= /[A-Z]/.test(password.value) ? 'green':'red';
            numberError.style.color= /[0-9]/.test(password.value) ? 'green':'red';
            specialError.style.color= /[\W_]/.test(password.value) ? 'green':'red';

            confirmPassword.style.borderColor= password.value=== confirmPassword.value ? 'green':'red';
            const allGreen=['length','lowercase', 'uppercase', 'number', 'special'].every(
                id => document.getElementById(id).style.color === 'green'
            );
            submitButton.disabled= !allGreen || password.value !== confirmPassword.value;
        }
        password.addEventListener("input", validatePassword);
        confirmPassword.addEventListener("input", validatePassword);
    })

    const selectAge = document.getElementById("age");

                for (let i = 1; i <= 120; i++) {
                    const option = document.createElement("option");
                    option.value = i;
                    option.textContent = i;
                    selectAge.appendChild(option);
                }
</script>