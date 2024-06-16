<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $title  ?></title>
  <link rel="stylesheet" href="<?= URL ?>/assets/css/styles.css" />
  <link rel="stylesheet" href="<?= URL ?>/assets/css/modal.css" />
  <script src="<?= URL ?>/assets/js/script.js" defer></script>
  <script src="<?= URL ?>/assets/js/modal.js" defer></script>
</head>
<style>
  .colored-icon path {
    fill: red;
    /* Remplacez 'red' par la couleur de votre choix */
    stroke: blue;
    /* Optionnel : définissez une couleur de contour si nécessaire */
  }


  body {
    height: 2000px;
    /* Pour permettre le défilement */
    transition: background-color 0.5s;
  }

  .hero {
    background-image: url("<?= URL ?>/assets/img/item_14.png");
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    /* Ajustez selon la taille souhaitée */
    width: 100%;
    height: auto;
  }

  .btn {
    padding: 5px 10px;
    font-size: 15px;
    color: #fff;
    background-color: #030303;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: transform 0.2s, background-color 0.2s;
  }

  .btn:active {
    transform: scale(0.9);
    background-color: #0056b3;
  }

  .effect {
    animation: ripple 0.6s linear;
  }

  @keyframes ripple {
    0% {
      box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7);
    }

    70% {
      box-shadow: 0 0 0 20px rgba(0, 123, 255, 0);
    }

    100% {
      box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
    }
  }

  input {
    padding: 15px;
    border-radius: 30px;
    border: none;
    outline: none;
    background-color: #f2f2f2;
    margin-bottom: 70px;
  }



  .shopping-cart {
    padding: 10px;
    margin-bottom: 60px;
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

  .product-section {
    padding: 20px;
  }




  .product-card:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }





  .logo {
    font-size: 1.5em;
    font-weight: bold;
  }

  .header-right {
    display: flex;
    align-items: center;
    height: 5px;
    padding: 10px 10px;
    font-size: 14px;

  }

  .shopping-cart,
  .search {
    margin-left: 20px;
  }

  .shopping-cart a,
  .search label {
    color: #000000;
    text-decoration: none;
  }

  .content {
    padding: 100px 20px 20px;
  }

  .content p {
    margin: 20px 0;
  }

  /* Swiper styles */
  .swiper-container {
    width: 100%;
    height: 300px;
    margin-top: 20px;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: auto;
  }

  /* .register {
    top: 20px;

  } */



  .register {
    font-size: 30px;
    /* Taille de l'icône */
    color: black;
    /* Couleur de l'icône */
    position: relative;
    /* Position relative pour l'animation */
    bottom: 50px;
    /* Application de l'animation */
  }

  /* Définition de l'animation avec @keyframes */
</style>

<body>

  <header id="header">
    <!-- <div class="logo">
      <!-- You can put an image or text here -->
    </div> -->

    <!-- Bouton pour le menu hamburger (affiché uniquement en version mobile) -->
    <button class="menu-toggle">
      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 21 21">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M4.5 6.5h12m-12.002 4h11.997M4.5 14.5h11.995" />
      </svg>
    </button>

    <nav>
      <ul>
        <li><a href="<?= URL ?>home">ACCUEIL</a></li>
        <li><a href="<?= URL ?>parfums">parfum</a></li>
        <li><a href="<?= URL ?>intense">INTENSE</a></li>
        <li><a href="<?= URL ?>prive">PRIVÉ</a></li>
        <li><a href="<?= URL ?>spray">SPRAY</a></li>
        <li><a href="<?= URL ?>contact">CONTACT</a></li>

      </ul>
    </nav>



    <div class="header-right">

      <!-- Ajout de l'élément pour activer la recherche -->
      <div class="search">
        <form>
          <input type="recherche" placeholder="Rechercher" />
        </form>
      </div>
      <!-- Panier d'achat -->
      <div class="shopping-cart">
        <a href="<?= URL ?>shoppingCart">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
            <path fill="currentColor" fill-rule="evenodd" d="M19.148 5.25H5.335l-1.18-2.115A.75.75 0 0 0 3.5 2.75H2a.75.75 0 0 0 0 1.5h1.06l1.164 2.088L6.91 12.28l.003.006l.237.523l-2.697 2.877a.75.75 0 0 0 .462 1.258l2.458.281a40.68 40.68 0 0 0 9.254 0l2.458-.28a.75.75 0 0 0-.17-1.491l-2.458.28a39.256 39.256 0 0 1-8.914 0l-.975-.11l1.98-2.112a.768.768 0 0 0 .053-.064l.752.098c1.055.138 2.122.165 3.182.08a9.29 9.29 0 0 0 6.366-3.268l.579-.685a.734.734 0 0 0 .053-.072l1.078-1.642c.764-1.164-.071-2.71-1.463-2.71M8.656 11.944a.484.484 0 0 1-.377-.278l-.002-.003l-2.22-4.913h13.09a.25.25 0 0 1 .21.387l-1.053 1.604l-.549.65a7.79 7.79 0 0 1-5.338 2.741c-.957.076-1.919.052-2.87-.072z" clip-rule="evenodd" />
            <path fill="currentColor" d="M6.5 18.5a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3M16 20a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0" />
          </svg>
          <span id="cart-count">0</span>
        </a>
        <ul class="cart-items"></ul>
      </div>

      <div class="register">

        <a href="<?= URL ?>register">
          <svg class="svg-icon colored-icon" width="1em" height="1em" viewBox="0 0 20 20">
            <path fill="none" d="M10,10.9c2.373,0,4.303-1.932,4.303-4.306c0-2.372-1.93-4.302-4.303-4.302S5.696,4.223,5.696,6.594C5.696,8.969,7.627,10.9,10,10.9z M10,3.331c1.801,0,3.266,1.463,3.266,3.263c0,1.802-1.465,3.267-3.266,3.267c-1.8,0-3.265-1.465-3.265-3.267C6.735,4.794,8.2,3.331,10,3.331z"></path>
            <path fill="none" d="M10,12.503c-4.418,0-7.878,2.058-7.878,4.685c0,0.288,0.231,0.52,0.52,0.52c0.287,0,0.519-0.231,0.519-0.52c0-1.976,3.132-3.646,6.84-3.646c3.707,0,6.838,1.671,6.838,3.646c0,0.288,0.234,0.52,0.521,0.52s0.52-0.231,0.52-0.52C17.879,14.561,14.418,12.503,10,12.503z"></path>
          </svg>
        </a>
      </div>
  </header>
  <!-- Fin du header -->
  <main>
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <?php if (isset($_SESSION["alert"])) : ?>
          <div class="alert alert-<?= $_SESSION["alert"]["type"]; ?> alert-dismissible fade show" role="alert"><?= $_SESSION["alert"]["message"]; ?></div>

          <?php unset($_SESSION["alert"]); ?>
        <?php endif; ?>

        <?= $content ?>
      </div>

  </main>
</body>


<!-- Début footer-section -->
<footer class="footer-section">
  <div class="footer-content">
    <div class="footer-block">
      <h4>TRÉSORS SPARROW</h4>
      <p>Inscrivez-vous à notre newsletter et recevez nos promotions, offres spéciales et nouveautés avant tout le monde.</p>
      <form action="#" method="post" class="newsletter-form">
        <div class="input-with-icon">
          <svg class="email-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="currentColor" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z" />
          </svg>
          <input type="email" placeholder="Entrez votre email">
        </div>

        <button type="submit">
          <svg xmlns="http://www.w3.org/2000/svg" width="23px" height="34px" viewBox="0 0 16 9">
            <path fill="currentColor" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5" />
            <path fill="currentColor" d="M10 8.5a.47.47 0 0 1-.35-.15c-.2-.2-.2-.51 0-.71l3.15-3.15l-3.15-3.15c-.2-.2-.2-.51 0-.71c.2-.2.51-.2.71 0l3.5 3.5c.2.2.2.51 0 .71l-3.5 3.5c-.1.1-.23.15-.35.15Z" />
          </svg>
        </button>
      </form>
    </div>
    <div class="footer-block">
      <h4>MENU PRINCIPAL</h4>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Nos Parfums</a></li>
        <li><a href="#">Collection intense</a></li>
        <li><a href="#">Collection élixir privé</a></li>
        <li><a href="#">Nos lots de parfums</a></li>
        <li><a href="#">Spray d'ambiance</a></li>
        <li><a href="#">Contact</a></li>
        <!-- Plus de liens ici -->
      </ul>
    </div>
    <div class="footer-block">
      <h4>LIENS UTILES</h4>
      <ul>
        <li><a href="#">Rechercher</a></li>
        <li><a href="#">Suivi de Commande</a></li>
        <li><a href="#">Cgv</a></li>
        <li><a href="#">Mentions légales</a></li>
        <li><a href="#">Politique de confidentialité</a></li>
        <li><a href="#">Contact</a></li>
        <!-- Plus de liens ici -->
      </ul>
    </div>
    <div class="footer-block">
      <h4>INFORMATIONS</h4>
      <p>Vous avez une question ou besoin d'aide ? Nous sommes disponibles du mardi au dimanche de 14h à 19h.
        <br><br>
        +33695935279
        <br>
        emirati-senteur@outlook.fr
      </p>
      <!-- Plus d'informations ici -->
    </div>
  </div>



  <div class="footer-bottom">
    <div class="footer-separator"></div>
    <div class="footer-bottom-content">
      <div class="footer-copy">
        <p>© trésors spparow 2024 - Tous droits réservés</p>
      </div>
      <div class="footer-payment-icons">
        <!-- Ajoutez ici vos icônes/images de paiement -->
        <svg xmlns="http://www.w3.org/2000/svg" width="82px" height="56px" viewBox="0 0 256 302">
          <path fill="#27346a" d="M217.168 23.507C203.234 7.625 178.046.816 145.823.816h-93.52A13.393 13.393 0 0 0 39.076 12.11L.136 259.077c-.774 4.87 2.997 9.28 7.933 9.28h57.736l14.5-91.971l-.45 2.88c1.033-6.501 6.593-11.296 13.177-11.296h27.436c53.898 0 96.101-21.892 108.429-85.221c.366-1.873.683-3.696.957-5.477c-1.556-.824-1.556-.824 0 0c3.671-23.407-.025-39.34-12.686-53.765" />
          <path fill="#27346a" d="M102.397 68.84a11.737 11.737 0 0 1 5.053-1.14h73.318c8.682 0 16.78.565 24.18 1.756a101.6 101.6 0 0 1 6.177 1.182a89.928 89.928 0 0 1 8.59 2.347c3.638 1.215 7.026 2.63 10.14 4.287c3.67-23.416-.026-39.34-12.687-53.765C203.226 7.625 178.046.816 145.823.816H52.295C45.71.816 40.108 5.61 39.076 12.11L.136 259.068c-.774 4.878 2.997 9.282 7.925 9.282h57.744L95.888 77.58a11.717 11.717 0 0 1 6.509-8.74" />
          <path fill="#2790c3" d="M228.897 82.749c-12.328 63.32-54.53 85.221-108.429 85.221H93.024c-6.584 0-12.145 4.795-13.168 11.296L61.817 293.621c-.674 4.262 2.622 8.124 6.934 8.124h48.67a11.71 11.71 0 0 0 11.563-9.88l.474-2.48l9.173-58.136l.591-3.213a11.71 11.71 0 0 1 11.562-9.88h7.284c47.147 0 84.064-19.154 94.852-74.55c4.503-23.15 2.173-42.478-9.739-56.054c-3.613-4.112-8.1-7.508-13.327-10.28c-.283 1.79-.59 3.604-.957 5.477" />
          <path fill="#1f264f" d="M216.952 72.128a89.928 89.928 0 0 0-5.818-1.49a109.904 109.904 0 0 0-6.177-1.174c-7.408-1.199-15.5-1.765-24.19-1.765h-73.309a11.57 11.57 0 0 0-5.053 1.149a11.683 11.683 0 0 0-6.51 8.74l-15.582 98.798l-.45 2.88c1.025-6.501 6.585-11.296 13.17-11.296h27.444c53.898 0 96.1-21.892 108.428-85.221c.367-1.873.675-3.688.958-5.477c-3.122-1.648-6.501-3.072-10.14-4.279a83.26 83.26 0 0 0-2.77-.865" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="82px" height="56px" viewBox="0 0 24 24">
          <path fill="currentColor" d="m2.15 4.318l-.454.003c-.15.005-.303.013-.452.04a1.44 1.44 0 0 0-1.06.772c-.07.138-.114.278-.14.43c-.028.148-.037.3-.04.45L0 6.222v11.557q0 .104.003.207c.004.15.013.303.04.452q.039.224.142.429a1.44 1.44 0 0 0 .63.63c.138.07.278.115.43.142c.148.027.3.036.45.04l.208.003h20.194l.207-.003c.15-.004.303-.013.452-.04s.291-.071.428-.141a1.43 1.43 0 0 0 .631-.631c.07-.138.115-.278.141-.43c.027-.148.036-.3.04-.45q.003-.104.003-.208l.001-.246V6.221q0-.104-.004-.207a3 3 0 0 0-.04-.452a1.45 1.45 0 0 0-1.2-1.201a3 3 0 0 0-.452-.04a11 11 0 0 0-.453-.003zm0 .512h19.942q.098 0 .197.003c.115.004.25.01.375.032c.109.02.2.05.287.094a.93.93 0 0 1 .407.407a1 1 0 0 1 .094.288c.022.123.028.258.031.374q.003.097.003.197v11.552q0 .097-.003.196c-.003.115-.009.25-.032.375a.93.93 0 0 1-.5.693a1 1 0 0 1-.286.094a3 3 0 0 1-.373.032l-.2.003H1.906q-.1 0-.196-.003a3 3 0 0 1-.375-.032c-.109-.02-.2-.05-.288-.094a.9.9 0 0 1-.406-.407a1 1 0 0 1-.094-.288a2.5 2.5 0 0 1-.032-.373l-.002-.197V6.224l.002-.197c.004-.114.01-.248.032-.375c.02-.108.05-.199.094-.287a.93.93 0 0 1 .407-.406a1 1 0 0 1 .287-.094c.125-.022.26-.029.375-.032l.196-.003zm4.71 3.7c-.3.016-.668.199-.88.456c-.191.22-.36.58-.316.918c.338.03.675-.169.888-.418c.205-.258.345-.603.308-.955zm2.207.42v5.493h.852v-1.877h1.18c1.078 0 1.835-.739 1.835-1.812c0-1.07-.742-1.805-1.808-1.805zm.852.719h.982c.739 0 1.161.396 1.161 1.089c0 .692-.422 1.092-1.164 1.092h-.979zm-3.154.3c-.45.01-.83.28-1.05.28c-.235 0-.593-.264-.981-.257a1.45 1.45 0 0 0-1.23.747c-.527.908-.139 2.255.374 2.995c.249.366.549.769.944.754c.373-.014.52-.242.973-.242c.454 0 .586.242.98.235c.41-.007.667-.366.915-.733c.286-.417.403-.82.41-.841c-.007-.008-.79-.308-.797-1.209c-.008-.754.615-1.113.644-1.135c-.352-.52-.9-.578-1.09-.593zm8.204.397c-.99 0-1.606.533-1.652 1.256h.777c.072-.358.369-.586.845-.586c.502 0 .803.266.803.711v.309l-1.097.064c-.951.054-1.488.484-1.488 1.184c0 .72.548 1.207 1.332 1.207c.526 0 1.032-.281 1.264-.727h.019v.659h.788v-2.76c0-.803-.62-1.317-1.591-1.317m1.94.072l1.446 4.009c0 .003-.073.24-.073.247c-.125.41-.33.571-.711.571c-.069 0-.206 0-.267-.015v.666c.06.011.267.019.335.019c.83 0 1.226-.312 1.568-1.283l1.5-4.214h-.868l-1.012 3.259h-.015l-1.013-3.26zm-1.167 2.189v.316c0 .521-.45.917-1.024.917c-.442 0-.731-.228-.731-.579c0-.342.278-.56.769-.593z" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="82px" height="56px" viewBox="0 0 256 83">
          <defs>
            <linearGradient id="logosVisa0" x1="45.974%" x2="54.877%" y1="-2.006%" y2="100%">
              <stop offset="0%" stop-color="#222357" />
              <stop offset="100%" stop-color="#254aa5" />
            </linearGradient>
          </defs>
          <path fill="url(#logosVisa0)" d="M132.397 56.24c-.146-11.516 10.263-17.942 18.104-21.763c8.056-3.92 10.762-6.434 10.73-9.94c-.06-5.365-6.426-7.733-12.383-7.825c-10.393-.161-16.436 2.806-21.24 5.05l-3.744-17.519c4.82-2.221 13.745-4.158 23-4.243c21.725 0 35.938 10.724 36.015 27.351c.085 21.102-29.188 22.27-28.988 31.702c.069 2.86 2.798 5.912 8.778 6.688c2.96.392 11.131.692 20.395-3.574l3.636 16.95c-4.982 1.814-11.385 3.551-19.357 3.551c-20.448 0-34.83-10.87-34.946-26.428m89.241 24.968c-3.967 0-7.31-2.314-8.802-5.865L181.803 1.245h21.709l4.32 11.939h26.528l2.506-11.939H256l-16.697 79.963zm3.037-21.601l6.265-30.027h-17.158zm-118.599 21.6L88.964 1.246h20.687l17.104 79.963zm-30.603 0L53.941 26.782l-8.71 46.277c-1.022 5.166-5.058 8.149-9.54 8.149H.493L0 78.886c7.226-1.568 15.436-4.097 20.41-6.803c3.044-1.653 3.912-3.098 4.912-7.026L41.819 1.245H63.68l33.516 79.963z" transform="matrix(1 0 0 -1 0 82.668)" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="82px" height="56px" viewBox="0 0 256 199">
          <path d="M46.54 198.011V184.84c0-5.05-3.074-8.342-8.343-8.342c-2.634 0-5.488.878-7.464 3.732c-1.536-2.415-3.731-3.732-7.024-3.732c-2.196 0-4.39.658-6.147 3.073v-2.634h-4.61v21.074h4.61v-11.635c0-3.731 1.976-5.488 5.05-5.488c3.072 0 4.61 1.976 4.61 5.488v11.635h4.61v-11.635c0-3.731 2.194-5.488 5.048-5.488c3.074 0 4.61 1.976 4.61 5.488v11.635zm68.271-21.074h-7.463v-6.366h-4.61v6.366h-4.171v4.17h4.17v9.66c0 4.83 1.976 7.683 7.245 7.683c1.976 0 4.17-.658 5.708-1.536l-1.318-3.952c-1.317.878-2.853 1.098-3.951 1.098c-2.195 0-3.073-1.317-3.073-3.513v-9.44h7.463zm39.076-.44c-2.634 0-4.39 1.318-5.488 3.074v-2.634h-4.61v21.074h4.61v-11.854c0-3.512 1.536-5.488 4.39-5.488c.878 0 1.976.22 2.854.439l1.317-4.39c-.878-.22-2.195-.22-3.073-.22m-59.052 2.196c-2.196-1.537-5.269-2.195-8.562-2.195c-5.268 0-8.78 2.634-8.78 6.805c0 3.513 2.634 5.488 7.244 6.147l2.195.22c2.415.438 3.732 1.097 3.732 2.195c0 1.536-1.756 2.634-4.83 2.634c-3.073 0-5.488-1.098-7.025-2.195l-2.195 3.512c2.415 1.756 5.708 2.634 9 2.634c6.147 0 9.66-2.853 9.66-6.805c0-3.732-2.854-5.708-7.245-6.366l-2.195-.22c-1.976-.22-3.512-.658-3.512-1.975c0-1.537 1.536-2.415 3.951-2.415c2.635 0 5.269 1.097 6.586 1.756zm122.495-2.195c-2.635 0-4.391 1.317-5.489 3.073v-2.634h-4.61v21.074h4.61v-11.854c0-3.512 1.537-5.488 4.39-5.488c.879 0 1.977.22 2.855.439l1.317-4.39c-.878-.22-2.195-.22-3.073-.22m-58.833 10.976c0 6.366 4.39 10.976 11.196 10.976c3.073 0 5.268-.658 7.463-2.414l-2.195-3.732c-1.756 1.317-3.512 1.975-5.488 1.975c-3.732 0-6.366-2.634-6.366-6.805c0-3.951 2.634-6.586 6.366-6.805c1.976 0 3.732.658 5.488 1.976l2.195-3.732c-2.195-1.757-4.39-2.415-7.463-2.415c-6.806 0-11.196 4.61-11.196 10.976m42.588 0v-10.537h-4.61v2.634c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976c0 6.366 4.61 10.976 10.537 10.976c3.073 0 5.269-1.097 6.586-3.073v2.634h4.61zm-16.904 0c0-3.732 2.415-6.805 6.366-6.805c3.732 0 6.367 2.854 6.367 6.805c0 3.732-2.635 6.805-6.367 6.805c-3.951-.22-6.366-3.073-6.366-6.805m-55.1-10.976c-6.147 0-10.538 4.39-10.538 10.976c0 6.586 4.39 10.976 10.757 10.976c3.073 0 6.147-.878 8.562-2.853l-2.196-3.293c-1.756 1.317-3.951 2.195-6.146 2.195c-2.854 0-5.708-1.317-6.367-5.05h15.587v-1.755c.22-6.806-3.732-11.196-9.66-11.196m0 3.951c2.853 0 4.83 1.757 5.268 5.05h-10.976c.439-2.854 2.415-5.05 5.708-5.05m114.372 7.025v-18.879h-4.61v10.976c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976c0 6.366 4.61 10.976 10.537 10.976c3.074 0 5.269-1.097 6.586-3.073v2.634h4.61zm-16.903 0c0-3.732 2.414-6.805 6.366-6.805c3.732 0 6.366 2.854 6.366 6.805c0 3.732-2.634 6.805-6.366 6.805c-3.952-.22-6.366-3.073-6.366-6.805m-154.107 0v-10.537h-4.61v2.634c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976c0 6.366 4.61 10.976 10.537 10.976c3.074 0 5.269-1.097 6.586-3.073v2.634h4.61zm-17.123 0c0-3.732 2.415-6.805 6.366-6.805c3.732 0 6.367 2.854 6.367 6.805c0 3.732-2.635 6.805-6.367 6.805c-3.951-.22-6.366-3.073-6.366-6.805" />
          <path fill="#ff5f00" d="M93.298 16.903h69.15v124.251h-69.15z" />
          <path fill="#eb001b" d="M97.689 79.029c0-25.245 11.854-47.637 30.074-62.126C114.373 6.366 97.47 0 79.03 0C35.343 0 0 35.343 0 79.029c0 43.685 35.343 79.029 79.029 79.029c18.44 0 35.343-6.366 48.734-16.904c-18.22-14.269-30.074-36.88-30.074-62.125" />
          <path fill="#f79e1b" d="M255.746 79.029c0 43.685-35.343 79.029-79.029 79.029c-18.44 0-35.343-6.366-48.734-16.904c18.44-14.488 30.075-36.88 30.075-62.125c0-25.245-11.855-47.637-30.075-62.126C141.373 6.366 158.277 0 176.717 0c43.686 0 79.03 35.563 79.03 79.029" />
        </svg>
      </div>
    </div>
  </div>

</footer>
<!-- Fin footer-section -->


</html>