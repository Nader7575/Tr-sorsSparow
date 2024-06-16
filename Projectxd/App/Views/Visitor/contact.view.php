<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<style>
    .shopping-cart {
        padding: 10px;
        margin-top: 10px;
        position: fixed;
        right: 10px;
        z-index: 1000;
    }

    .shopping-cart a {
        text-decoration: none;
        color: #000;
        font-weight: bold;
    }

    .shopping-cart .cart-items {
        list-style-type: none;
        padding: 0;
        margin: 10px 0 0 0;
    }

    .shopping-cart .cart-item {
        position: fixed;
        color: #000;
        margin: 5px 0;
        padding: 5px;
        border-bottom: 1px solid #080808;
    }

    input {
        padding: 15px;
        border-radius: 30px;
        border: none;
        outline: none;
        background-color: #f2f2f2;
    }
</style>

</html>

<body>


    <div class="header">
        <h1>Contact</h1>
        <nav class="breadcrumb">
            <a href="index.html"><span>A</span>ccueil</a> > Contact
        </nav>
    </div>

    <!-- New Section Below Header -->
    <div class="new-section">
        <!-- Content of the new section goes here -->
    </div>



    <div class="contact-section">
        <h1>Formulaire de Contact</h1>
        <p>Vous avez une question ou besoin d'aide ? Remplissez le formulaire, nous reviendrons vers vous dans les plus brefs délais.</p>
    </div>


    <div class="contact-container">
        <div class="form-container">
            <form action="#" method="post">
                <input type="text" id="name" name="name" placeholder="Nom" required>

                <input type="email" id="email" name="email" placeholder="Messagerie électronique" required>


                <input type="tel" id="phone" name="phone" placeholder="Numéro de téléphone">

                <textarea id="message" name="message" rows="4" required placeholder="Message"></textarea>

                <div class="view-collection">
                    <a href="#" class="btn">Envoyer</a>
                </div>
            </form>


        </div>


        <div class="info-container">
            <h3>INFORMATIONS</h3>
            <p>+33659935279</p>
            <p>emirati-senteur@outlook.fr</p>

            <h3>SUPPORT CLIENT</h3>
            <p>Nous sommes disponibles du mardi au dimanche, de 14h à 19h pour répondre à vos questions.</p>

            <h3>UNE QUESTION ?</h3>
            <p>Vous avez une question sur nos produits ? Prenez contact avec l'un de nos experts à emirati-senteur@outlook.fr</p>
        </div>
    </div>

    </div>







    <script>
        let lastScrollTop = 0;
        const header = document.getElementById('header');

        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                // Scroll down
                header.style.top = '-110px'; // Adjust this value as needed
            } else {
                // Scroll up
                header.style.top = '0';
            }
            lastScrollTop = scrollTop;
        });
    </script>
</body>

</html>