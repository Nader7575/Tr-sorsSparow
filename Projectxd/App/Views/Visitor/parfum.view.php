<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nos parfums</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<style>
  body {
    height: 2000px;
    /* Pour permettre le défilement */
    transition: background-color 0.5s;
  }


  .btn {
    padding: 10px 20px;
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
    <h1>Produits</h1>
    <nav class="breadcrumb">
      <a href="index.html"><span>A</span>ccueil</a> > Produits
    </nav>
  </div>

  <!-- New Section Below Header -->
  <div class="new-section">
    <!-- Content of the new section goes here -->
  </div>



  <section class="product-section">
    <div class="product-grid">
      <!-- Produit 1 -->
      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_1.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_1.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>

        <div class="card-header">
          <h4 class="title">Channel</h4>
          <h4 class="price">199,99 €</h4>
        </div>
        <div class="card-body">
          <p>parfum pour homme</p>
        </div>
      </div>

      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_2.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_2.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_3.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_3.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_4.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="img/<?= URL ?>/assets/img/item_4.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>
  </section>



  <section class="product-section">
    <div class="product-grid">
      <!-- Produit 1 -->
      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_1.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_1.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>

        <div class="card-header">
          <h4 class="title">Channel</h4>
          <h4 class="price">199,99 €</h4>
        </div>
        <div class="card-body">
          <p>parfum pour homme</p>
        </div>
      </div>

      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_2.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_2.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_3.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_3.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_4.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="img/<?= URL ?>/assets/img/item_4.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>
  </section>



  <section class="product-section">
    <div class="product-grid">
      <!-- Produit 1 -->
      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_1.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_1.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>

        <div class="card-header">
          <h4 class="title">Channel</h4>
          <h4 class="price">199,99 €</h4>
        </div>
        <div class="card-body">
          <p>parfum pour homme</p>
        </div>
      </div>

      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_2.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_2.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_3.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_3.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_4.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="img/<?= URL ?>/assets/img/item_4.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>
  </section>




  <section class="product-section">
    <div class="product-grid">
      <!-- Produit 1 -->
      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_1.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_1.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>

        <div class="card-header">
          <h4 class="title">Channel</h4>
          <h4 class="price">199,99 €</h4>
        </div>
        <div class="card-body">
          <p>parfum pour homme</p>
        </div>
      </div>

      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_2.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_2.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_3.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_3.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_4.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="img/<?= URL ?>/assets/img/item_4.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>
  </section>




  <section class="product-section">
    <div class="product-grid">
      <!-- Produit 1 -->
      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_1.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_1.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>

        <div class="card-header">
          <h4 class="title">Channel</h4>
          <h4 class="price">199,99 €</h4>
        </div>
        <div class="card-body">
          <p>parfum pour homme</p>
        </div>
      </div>

      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_2.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_2.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_3.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_3.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_4.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="img/<?= URL ?>/assets/img/item_4.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>
  </section>



  <section class="product-section">
    <div class="product-grid">
      <!-- Produit 1 -->
      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_1.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_1.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>

        <div class="card-header">
          <h4 class="title">Channel</h4>
          <h4 class="price">199,99 €</h4>
        </div>
        <div class="card-body">
          <p>parfum pour homme</p>
        </div>
      </div>

      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_2.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_2.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_3.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_3.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_4.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="img/<?= URL ?>/assets/img/item_4.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>
  </section>


  <section class="product-section">
    <div class="product-grid">
      <!-- Produit 1 -->
      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_1.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_1.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>

        <div class="card-header">
          <h4 class="title">Channel</h4>
          <h4 class="price">199,99 €</h4>
        </div>
        <div class="card-body">
          <p>parfum pour homme</p>
        </div>
      </div>

      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_2.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_2.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_3.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_3.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_4.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="img/<?= URL ?>/assets/img/item_4.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>
  </section>



  <section class="product-section">
    <div class="product-grid">
      <!-- Produit 1 -->
      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_13.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_1.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>

      </div>

      <div class="product-card">
        <img src="<?= URL ?>/assets/img/item_2.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_2.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_3.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="<?= URL ?>/assets/img/item_3.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>

      <div class="product-card hide-on-mobile">
        <img src="<?= URL ?>/assets/img/item_4.png" alt="N°5 CHANEL" class="modal-trigger" data-modal-img="img/<?= URL ?>/assets/img/item_4.png">
        <button class="product-add">
          <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="20px" viewBox="0 0 48 48">
            <g fill="none">
              <path d="M39 32H13L8 12h36z" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M3 6h3.5L8 12m0 0l5 20h26l5-20z" />
              <circle cx="13" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <circle cx="39" cy="39" r="3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" />
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M22 22h8m-4 4v-8" />
            </g>
          </svg>
        </button>
      </div>
  </section>












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