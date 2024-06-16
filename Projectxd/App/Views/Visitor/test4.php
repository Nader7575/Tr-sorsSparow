<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: #fff;
      color: #000;
    }

    .navbar-custom {
      position: fixed !important;
      top: 0;
      width: 100%;
      z-index: 1000;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-size: 28px;
      color: #000;
      font-weight: 600;
    }

    .navbar-nav .nav-link {
      font-size: 18px;
      color: #000;
      font-weight: 500;
    }

    h1 {
      font-size: 36px;
      font-weight: bold;
      margin: 0;
    }

    .section-title {
      text-align: center;
      margin-top: 3rem;
      margin-bottom: 2rem;
      font-size: 24px;
      font-weight: 600;
    }

    .faq-item {
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      cursor: pointer;
      transition: border-color 0.3s ease;
      background-color: #fff;
    }

    .faq-item[open] {
      border-color: #000;
    }

    .faq-item summary {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: 600;
      font-size: 18px;
      color: #000;
    }

    .faq-item summary::marker {
      display: none;
    }

    .faq-item summary::after {
      content: '+';
      font-size: 20px;
      margin-left: 10px;
      transition: transform 1s ease;
    }

    .faq-item[open] summary::after {
      content: '-';
      transform: rotate(1440deg);
    }

    .faq-item summary {
      transition: transform 0.3s ease;
    }

    .faq-item p {
      color: black;
    }

    .faq-item[open] summary {
      transform: translateY(-5px);
    }

    .section {
      padding: 20px 0;
      background-color: transparent;
      margin-top: 100px;
    }

    .section-content {
      background-color: transparent;
      padding: 30px;
      margin-bottom: 30px;
    }

    .section-content img {
      border-radius: 10px;
    }

    .btn-damn {
      background: linear-gradient(45deg, #000000, #666666);
      border: rgb(58 58 58 / 30%) solid;
    }

    .carousel-item {
      background-color: transparent;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 10px;
    }
    .container {
    max-width: 100%;
    padding: 0;
}
header {
  background-image: url('image.jpg');
  background-size: cover;
  background-position: center;
  height: 100vh;
  position: relative;
}

header::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5));
}

.header-content {
  transform: translateY(150%) translateX(50%);
  padding: 0 40px;
  text-align: left;
}

.header-content h1 {
  font-size: 36px;
  margin-bottom: 20px;
}

.header-content p {
  font-size: 18px;
  margin-bottom: 30px;
}

.header-content .btn {
  display: inline-block;
  padding: 10px 20px;
  font-size: 18px;
  background-color: #ff6347;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.header-content .btn:hover {
  background-color: #e65c40;
}

  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-custom">
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
  <header>
  <div class="header-content">
    <h1>Titre de l'actualité</h1>
    <p>Description de l'actualité</p>
    <button class="btn">S'inscrire au tournoi</button>
  </div>
</header>



  <main>

    <section id="qui-sommes-nous" class="section">
      <div class="container">
        <h2 class="section-title">Qui sommes-nous</h2>
        <div class="section-content">
          <div class="row flex-md-row-reverse">
            <div class="col-md-6">
              <img src="imagetemp.png" alt="Image Qui sommes-nous" class="img-fluid mb-3 mb-md-0">
            </div>
            <div class="col-md-6">
              <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
              <div class="text-center mt-5">
                <button type="button" class="btn btn-primary mt-3 btn-damn">Inscription</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="ce-quon-propose" class="section">
      <div class="container">
        <h2 class="section-title">Ce qu'on propose</h2>
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <i class="fas fa-trophy fa-3x mb-3" style="color: gold;"></i>
                  <h5 class="card-title">Tournoi</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <i class="fas fa-calendar-alt fa-3x mb-3" style="color: gold;"></i>
                  <h5 class="card-title">Event</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <i class="fas fa-vote-yea fa-3x mb-3" style="color: gold;"></i>
                  <h5 class="card-title">Vote</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="projets-futurs" class="section">
      <div class="container">
        <h2 class="section-title">Projets Futurs</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Projet 1</h5>
                      <img src="imagetemp.png" alt="Image Projet 1" class="img-fluid mb-3">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Projet 2</h5>
                      <img src="imagetemp2.png" alt="Image Projet 2" class="img-fluid mb-3">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Projet 3</h5>
                      <img src="imagetemp3.png" alt="Image Projet 3" class="img-fluid mb-3">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <section id="faq" class="section">
      <div class="container">
        <h2 class="section-title">Questions Fréquentes</h2>
        <div class="section-content">
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
                <summary              </div>
              <div class="col-md-6">
                <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
                <div class="text-center mt-5">
                  <button type="button" class="btn btn-primary mt-3 btn-damn">Inscription</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="ce-quon-propose" class="section">
      <div class="container">
        <h2 class="section-title">Ce qu'on propose</h2>
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <i class="fas fa-trophy fa-3x mb-3" style="color: gold;"></i>
                  <h5 class="card-title">Tournoi</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <i class="fas fa-calendar-alt fa-3x mb-3" style="color: gold;"></i>
                  <h5 class="card-title">Event</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card text-center">
                <div class="card-body">
                  <i class="fas fa-vote-yea fa-3x mb-3" style="color: gold;"></i>
                  <h5 class="card-title">Vote</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="projets-futurs" class="section">
      <div class="container">
        <h2 class="section-title">Projets Futurs</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Projet 1</h5>
                      <img src="imagetemp.png" alt="Image Projet 1" class="img-fluid mb-3">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Projet 2</h5>
                      <img src="imagetemp2.png" alt="Image Projet 2" class="img-fluid mb-3">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Projet 3</h5>
                      <img src="imagetemp3.png" alt="Image Projet 3" class="img-fluid mb-3">
                      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla velit fermentum a.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <section id="faq" class="section">
      <div class="container">
        <h2 class="section-title">Questions Fréquentes</h2>
        <div class="section-content">
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras porttitor metus justo, ut fringilla4</summary>
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
      </div>
    </section>
  </main>
</body>

</html>



