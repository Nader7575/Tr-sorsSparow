<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .navbar-brand {
      font-size: 32px;
    }
    .navbar-nav .nav-link {
      font-size: 20px;
    }
    nav {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 100;
    }
    header {
      background: linear-gradient(90deg, #000, #404040);
      color: white;
      padding: 200px 0;
    }
    .section-title {
      text-align: center;
      margin-top: 5rem;
      margin-bottom: 3rem;
    }
    .faq-item {
  border: 1px solid #e0e0e0;
  border-radius: 10px;
  padding: 30px;
  margin-bottom: 20px;
  cursor: pointer;
  overflow: hidden;
  position: relative; /* Ajoute une position relative pour centrer le contenu */
}

.faq-item[open] {
  border-color: #0062cc;
  height: auto;
}

.faq-item summary {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: 600;
  list-style: none;
  position: relative; /* Modifie la position en relative pour éviter le centrage */
  width: 100%; /* Définit la largeur de l'élément sur "100%" pour qu'il s'adapte à la largeur de l'élément parent */
  box-sizing: border-box; /* Inclut le remplissage et la bordure dans la largeur de l'élément */
}

.faq-item summary::marker {
  display: none;
}

.faq-item summary::after {
  content: '+';
  font-size: 20px;
  margin-left: 10px;
}

.faq-item[open] summary::after {
  content: '-';
}

/* Ajoute une transition à la hauteur de l'élément */
.faq-item {
  transition: height 0.5s ease;
  height: 0;
}

.faq-item summary {
  transition: transform 0.5s ease;
  transform: translateY(-10px);
}

.faq-item[open] summary {
  transform: translateY(0);
}


.card {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.card-body i {
  transition: transform 0.3s ease;
}

.card-body i:hover {
  transform: scale(1.2);
}

#qui-sommes-nous .btn {
  display: block;
  margin: 0 auto;
}

#actualites img,
#qui-sommes-nous img {
  border-radius: 10px;
}

.btn-primary:hover {
  background-color: #0062cc;
  border-color: #0056b3;
}

#projets-futurs img {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

#projets-futurs .card-body {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

#projets-futurs img {
  max-width: 100%;
  height: auto;
}
  </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Test</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Classement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Événement</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Inscription</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="text-center">
    <h1 style="font-size: 40px;">Titre de la bannière</h1>
  </header>

  <main class="container mt-5">
    <section id="actualites">
      <h2 class="section-title">Actualités</h2>
      <div class="row">
        <div class="col-md-6">
          <img src="imagetemp.png" alt="Image actualité" class="img-fluid mb-3 mb-md-0">
        </div>
        <div class="col-md-6">
          <h3>Titre de l'actualité</h3>
          <article>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="qui-sommes-nous" class="my-5">
      <h2 class="section-title">Qui sommes-nous</h2>
      <div class="row flex-md-row-reverse">
        <div class="col-md-6">
          <img src="imagetemp.png" alt="Image Qui sommes-nous" class="img-fluid mb-3 mb-md-0">
        </div>
        <div class="col-md-6">
          <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
          <button type="button" class="btn btn-primary mt-3">Inscription</button>
        </div>
      </div>
    </section>

    <section id="ce-quon-propose" class="text-center my-5">
      <h2 class="section-title">Ce qu'on propose</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
      <div class="row">
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-body">
              <i class="fas fa-trophy fa-3x mb-3" style="color: gold;"></i>
              <h5 class="card-title">Tournoi</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-body">
              <i class="fas fa-calendar-alt fa-3x mb-3" style="color: gold;"></i>
              <h5 class="card-title">Event</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-body">
              <i class="fas fa-vote-yea fa-3x mb-3" style="color: gold;"></i>
              <h5 class="card-title">Vote</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="text-center mt-5">
      <button type="button" class="btn btn-primary btn-lg px-5">Inscription</button>
    </div>

    <section id="projets-futurs" class="my-5">
      <h2 class="section-title">Projets Futurs</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Projet 1</h5>
              <img src="imagetemp.png" alt="Image Projet 1" class="img-fluid mb-3">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Projet 2</h5>
              <img src="imagetemp.png" alt="Image Projet 2" class="img-fluid mb-3">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Projet 3</h5>
              <img src="imagetemp.png" alt="Image Projet 3" class="img-fluid mb-3">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="faq" class="my-5">
  <div class="container">
    <h2 class="section-title">Questions Fréquentes</h2>
    <div class="row">
      <div class="col-md-6">
        <details class="faq-item">
          <summary>Question 1</summary>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
        </details>
        <details class="faq-item">
          <summary>Question 2</summary>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
        </details>
        <details class="faq-item">
          <summary>Question 3</summary>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
        </details>
      </div>
      <div class="col-md-6">
        <details class="faq-item">
          <summary>Question 4</summary>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
        </details>
        <details class="faq-item">
          <summary>Question 5</summary>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
        </details>
        <details class="faq-item">
          <summary>Question 6</summary>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
        </details>
      </div>
    </div>
  </div>
</section>

  </main>
</body>
</html>
