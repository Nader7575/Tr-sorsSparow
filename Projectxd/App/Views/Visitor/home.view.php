<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header Example</title>
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="./modal.css" />

    <style>
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



        .btn:active {
            transform: scale(0.9);
            background-color: #0056b3;
        }

        .effect {
            animation: ripple 0.6s linear;
        }

        .btn {
            padding: 20px 10px;
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

        .promo-section {
            position: relative;
            background-image: url("<?= URL ?>/assets/img/item_13.png");
            background-size: cover;
            background-position: center;
            text-align: center;
            /* Aligner le texte au centre */
            padding: 100px 0;
            /* Ajuster en fonction de la hauteur souhaitée */
            width: 100%;
            height: 500px;
        }


        .card-header {
            padding: 10px 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .card-header .title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .card-header .price {
            font-size: 16px;
            color: #ff6f61;
        }

        /* Card body styling */
        .card-body {
            padding: 15px;
        }

        .card-body p {
            color: #777;
            font-size: 14px;
            line-height: 1.5;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
</head>

<body>
    </head>

    <body>
        <!-- debut header -->


        <!-- debut hero -->
        <section class="hero">
            <div class="hero-content">
                <h1>LES TRÉSORS DE SPARROW</h1>
                <p>MAISON DE PARFUM</p>
                <a href="#" class="btn">VOIR LES PARFUMS</a>
            </div>
        </section>
        <!-- Fin du hero -->


        <!-- debut product section -->
        <section class="product-section">
            <h2 class="product-section-title"> <a href="parfum.html">PARFUMS DE SPARROW</a></h2>
            <button class="nav-arrow left-arrow">
                <span class="arrow-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M14 17.308L8.692 12L14 6.692l.708.708l-4.6 4.6l4.6 4.6z" />
                    </svg>

                </span>
            </button>



            <div class="product-grid">
                <!-- Produit 1 -->
                <div class="product-card" style="width: 100px;">
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
                <!-- Dupliquez la div "product-card" pour chaque produit supplémentaire -->

                <button class="nav-arrow right-arrow">
                    <span class="arrow-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m13.292 12l-4.6-4.6l.708-.708L14.708 12L9.4 17.308l-.708-.708z" />
                        </svg>
                    </span>
                </button>

            </div>
            <div class="view-collection">
                <a href="#" class="btn">voir la collection</a>
            </div>
        </section>
        <!-- Fin du product section -->



        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <img src="" id="modal-img">
            </div>
        </div>



        <!-- debut autre product section -->
        <section class="product-section product-section-special">
            <h2 class="product-section-title"> <a href="intense.html">collection intense </a></h2>
            <p class="collection-description">Découvrez notre collection unique de parfums aux senteurs intenses</p>
            <button class="nav-arrow left-arrow">
                <span class="arrow-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M14 17.308L8.692 12L14 6.692l.708.708l-4.6 4.6l4.6 4.6z" />
                    </svg>
                </span>
            </button>

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
                <!-- Dupliquez la div "product-card" pour chaque produit supplémentaire -->

                <button class="nav-arrow right-arrow">
                    <span class="arrow-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m13.292 12l-4.6-4.6l.708-.708L14.708 12L9.4 17.308l-.708-.708z" />
                        </svg>
                    </span>
                </button>

            </div>
            <div class="view-collection">
                <a href="#" class="btn">voir les produits</a>
            </div>
        </section>
        <!-- Fin autre product section -->


        <!-- debut autre  section -->
        <section class="category-section">
            <h2 class="categories-header">NOS PARFUMS PAR CATÉGORIES</h2>
            <div class="category-container">
                <div class="category-item">
                    <img src="<?= URL ?>/assets/img/item_10.png" alt="Intense" />
                    <h3 class="category-title sec product-section-title"><a href="intense.html">INTENSE</a></h3>
                </div>
                <div class="category-item">
                    <img src="<?= URL ?>/assets/img/item_11.png" alt="Élixir Privé" />
                    <h3 class="category-title product-section-title"><a href="prive.html">ÉLIXIR PRIVÉ </a< /h3>
                </div>
            </div>
        </section>

        <!-- Fin autre section -->


        <!-- debut autre product section -->
        <section class="product-section">
            <h2 class="product-section-title"> <a href="prive.html">élixir privé</a></h2>
            <p class="collection-description">Trouvez le parfum idéal parmi notre collection d'élixirs privés</p>
            <button class="nav-arrow left-arrow special">
                <span class="arrow-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M14 17.308L8.692 12L14 6.692l.708.708l-4.6 4.6l4.6 4.6z" />
                    </svg>
                </span>
            </button>

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
            </div>

        </section>
        <!-- Fin autre product section -->


        <!-- Debut section avec une grande image de fond et un texte -->
        <section class="promo-section">
            <div class="promo-content">
                <h2 class="promo-title">PACK DE 3 PARFUMS 50 ML</h2>
                <p class="promo-description">CE PACK COMPREND TROIS PARFUMS DE LA COLLECTION INTENSE : UN BOIS INTENSE, UN BAKARA ET UN PARFUM MYSTÈRE ! OFFRE À DURÉE LIMITÉE</p>
            </div>
        </section>


        <!-- Fin section avec une grande image de fond et un texte -->






        <!-- debut autre product section -->
        <section class="product-section">
            <h2 class="product-section-title">parcourir les meilleur ventes </h2>
            <p class="collection-description">Stimulez vos sens avec des fragrances uniques et enivrantes</p>


            <div class="product-grid">
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
                <!-- Dupliquez la div "product-card" pour chaque produit supplémentaire -->



            </div>
            <div class="view-collection">
                <a href="#" class="btn">voir la collection</a>
            </div>
        </section>
        <!-- Fin autre product section -->


        <!-- Début feature section -->
        <section class="feature-section">
            <div class="feature-image">
                <img src="<?= URL ?>/assets/img/item_5.png" alt="Parfum">
            </div>
            <div class="feature-content">
                <h2>Les Trésors de sparrow ou les senteurs rencontrent l'élégance</h2>
                <p>ou les senteurs rencontrent l'élégance
                    Chez Trésors de sparrow, nous sommes dédiés à la création d'une collection de parfums qui racontent une histoire, éveillent les sens et captivent l'esprit. Nous souhaitons vous offrir une expérience exceptionnelle, où chaque note évoque une histoire, un souvenir, une émotion.
                    De l'intemporel floral au boisé audacieux, chaque parfum de notre collection est un hommage à la beauté et à la distinction. Venez explorer avec nous les subtilités du monde des parfums. Laissez vous guider par vos sens et trouvez le parfum idéal qui vous correspond.</p>
                <a href="#" class="feature-link">VOIR TOUT LES PARFUMS</a>
            </div>
        </section>
        <!-- fin feature section -->



        <!-- Début testimonials section -->
        <section class="testimonials-section">
            <div class="testimonials-header">
                <h2>Nos clients parlent de nous</h2>
                <p>Découvrez quelques avis laissés par nos clients</p>
            </div>
            <div class="testimonials-container">
                <!-- Témoignage 1 -->
                <div class="testimonial-item">
                    <div class="testimonial-name">NOUR</div>
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-comment">Bonne Idée de cadeau</p>
                    <p class="testimonial-detail">"parfum au top"</p>
                </div>
                <!-- Dupliquez le bloc ci-dessus pour chaque témoignage supplémentaire -->

                <div class="testimonial-item">
                    <div class="testimonial-name">NOUR</div>
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-comment">Bonne Idée de cadeau</p>
                    <p class="testimonial-detail">"parfum au top"</p>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial-name">NOUR</div>
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-comment">Bonne Idée de cadeau</p>
                    <p class="testimonial-detail">"parfum au top"</p>
                </div>
            </div>
        </section>
        <!-- Fin testimonials section -->



        <!-- Début services section -->
        <section class="services-section">
            <div class="service-item">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62px" height="68px" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M4 16h12v2H4zm-2-5h10v2H2z" />
                        <path fill="currentColor" d="m29.919 16.606l-3-7A.999.999 0 0 0 26 9h-3V7a1 1 0 0 0-1-1H6v2h15v12.556A3.992 3.992 0 0 0 19.142 23h-6.284a4 4 0 1 0 0 2h6.284a3.98 3.98 0 0 0 7.716 0H29a1 1 0 0 0 1-1v-7a.997.997 0 0 0-.081-.394M9 26a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2m14-15h2.34l2.144 5H23Zm0 15a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2m5-3h-1.142A3.995 3.995 0 0 0 23 20v-2h5Z" />
                    </svg>
                </span> <!-- Remplacez par l'icône appropriée -->
                <h3>LIVRAISON RAPIDE</h3>
                <p>Toutes nos commandes sont traitées dans un délai de 24 à 48h maximum</p>
            </div>
            <div class="service-item">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62px" height="68px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M18 21H7V8l7-7l1.25 1.25q.175.175.288.475t.112.575v.35L14.55 8H21q.8 0 1.4.6T23 10v2q0 .175-.05.375t-.1.375l-3 7.05q-.225.5-.75.85T18 21m-9-2h9l3-7v-2h-9l1.35-5.5L9 8.85zM9 8.85V19zM7 8v2H4v9h3v2H2V8z" />
                    </svg>
                </span> <!-- Remplacez par l'icône appropriée -->
                <h3>SATISFACTION GARANTIE</h3>
                <p>Vous avez jusqu'à 30 jours pour obtenir un remboursement en cas de besoin</p>
            </div>
            <div class="service-item">
                <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="62px" height="68px" viewBox="0 0 14 14">
                        <path fill="currentColor" fill-rule="evenodd" d="M6.987 1.5A3.18 3.18 0 0 0 3.75 4.628V9a1 1 0 0 1-1 1H1.5A1.5 1.5 0 0 1 0 8.5v-2A1.5 1.5 0 0 1 1.5 5h.75v-.39A4.68 4.68 0 0 1 7 0a4.68 4.68 0 0 1 4.75 4.61V5h.75A1.5 1.5 0 0 1 14 6.5v2a1.5 1.5 0 0 1-1.5 1.5h-.75v.5a2.75 2.75 0 0 1-2.44 2.733A1.5 1.5 0 0 1 8 14H6.5a1.5 1.5 0 0 1 0-3H8c.542 0 1.017.287 1.28.718a1.25 1.25 0 0 0 .97-1.218V4.627A3.18 3.18 0 0 0 6.987 1.5" clip-rule="evenodd" />
                    </svg></span> <!-- Remplacez par l'icône appropriée -->
                <h3>SUPPORT CLIENT</h3>
                <p>Vous avez une question ou besoin d'aide ? Nous vous assistons 24/7</p>
            </div>
            <div class="service-item">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62px" height="68px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m11.005 2l7.298 2.28a1 1 0 0 1 .702.955V7h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1l-3.22.001c-.387.51-.857.96-1.4 1.33L11.005 22l-5.38-3.668a6 6 0 0 1-2.62-4.958V5.235a1 1 0 0 1 .702-.954zm0 2.094l-6 1.876v7.404a4 4 0 0 0 1.558 3.169l.189.136l4.253 2.9L14.787 17h-4.782a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h7V5.97zm0 7.906v3h9v-3zm0-2h9V9h-9z" />
                    </svg>
                </span> <!-- Remplacez par l'icône appropriée -->
                <h3>PAIEMENTS SÉCURISÉS</h3>
                <p>Effectuez un paiement avec votre méthode préférée en toute sécurité</p>
            </div>
        </section>
        <!-- Fin services section -->








        <script src="script.js"></script>
        <script src="modal.js"></script>



        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // JavaScript pour gérer l'ajout de produits au panier

                // Sélectionner tous les boutons d'ajout de produit
                const addButtons = document.querySelectorAll(".product-add");

                // Fonction pour ajouter un produit au panier
                function addToCart(event) {
                    // Identifier le bouton cliqué
                    const button = event.target.closest("button");

                    // Ajouter un nouvel élément de produit dans la liste du panier
                    const cartItems = document.querySelector(".shopping-cart .cart-items");
                    const newItem = document.createElement("li");
                    newItem.textContent = "";
                    newItem.classList.add("cart-item");
                    cartItems.appendChild(newItem);

                    // Mettre à jour le compteur du panier
                    const cartCountElement = document.getElementById("cart-count");
                    let currentCount = parseInt(cartCountElement.textContent);
                    cartCountElement.textContent = currentCount + 1;
                }

                // Ajouter un écouteur d'événements à chaque bouton
                addButtons.forEach((button) => {
                    button.addEventListener("click", addToCart);
                    // Mettre à jour le compteur du panier au chargement de la page
                    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                    const cartCountElement = document.getElementById('cart-count');
                    cartCountElement.textContent = cartItems.length;
                });


            });

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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    </body>



</html>