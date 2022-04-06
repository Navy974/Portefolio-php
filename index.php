<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TYPO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS Custom -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/icon.css">
    <title>Portefolio - Yvan Sevanandee</title>
</head>
<body>
    <!-- NAVBAR debut -->
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#C1">A propos de moi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#C2">Formation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#C3">Expérience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#C4">Portefolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#C5">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<!-- FIN NAVBAR -->
<!-- DEBUT CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="source/cadrage-photo.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="source/San-Francisco-Sunset.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="source/téléchargement (1).jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- FIN CAROUSEL -->
<!-- BARRE JAUNE  -->
<div class="container-fluid bg-yellow py-4 ">
    <div class="container">
        <div class="row justify-content-center text-white align-items-center">
                <p class="pr-3 mb-0 text-cv">Mon CV</p>
                <button type="button" class="btn btn-outline-light ml-3 custom">Télécharger</button>
        </div>
    </div>
</div>
<!-- FIN BARRE JAUNE  -->
<!-- CONTENU -->
<div class="container">
    <div class="row title">
        <h2 class="text-center" id="C1">A Propos de moi</h2>
        <hr>
        <p class="text-center w-100 px-5 text-about">Salut et Bienvenue sur mon portfolio, je suis Yvan passionné des technologies, du monde de la photographie et du cinéma. 
Voilà depuis plus de 4 ans que je réalise des shootings photo ainsi que des clips et reportages vidéo.
Je suis également diplômé d'un titre professionnel RNCP en développement web.
Ici vous allez découvrir les projets réaliser qui reflète la qualité de mon travail. 
Bonne visite à tous! </p>
    </div>
    <div class="row">
        <!-- bloc 1 -->
        <div class="col-12 col-lg-3 d-flex mb-4 mb-lg-0">
                    <div class="bg-about">
                    <span class="icon-monitor"></span>
                        <h4>Développement Web</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor eum corporis asperiores voluptatum cumque. Doloremque quis accusantium alias. Obcaecati, quas tempore! Quibusdam officia animi vel eum hic at doloremque?</p>
                    </div>
        </div>
        <div class="col-12 col-lg-3 d-flex mb-4 mb-lg-0">
                    <div class="bg-about">
                        <span class="icon-camera"></span>
                        <h4>Photographie</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor eum corporis asperiores voluptatum cumque. Doloremque quis accusantium alias. Obcaecati, quas tempore! Quibusdam officia animi vel eum hic at doloremque?</p>
                    </div>
        </div>
        <div class="col-12 col-lg-3 d-flex mb-4 mb-lg-0">
                    <div class="bg-about">
                        <span class="icon-video-camera"></span>
                        <h4>Video</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor eum corporis asperiores voluptatum cumque. Doloremque quis accusantium alias. Obcaecati, quas tempore! Quibusdam officia animi vel eum hic at doloremque?</p>
                    </div>
        </div>
        <div class="col-12 col-lg-3 d-flex mb-4 mb-lg-0">
                    <div class="bg-about">
                        <span class="icon-image"></span>
                        <h4>Graphisme</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor eum corporis asperiores voluptatum cumque. Doloremque quis accusantium alias. Obcaecati, quas tempore! Quibusdam officia animi vel eum hic at doloremque?</p>
                    </div>
        </div>
    </div>
    <!-- FIN BLOC -->
    <!-- FORMATION -->
    <div class="row title">
        <h2 class="text-center" id="C2">Formation</h2>
        <hr>
    </div>
    <!-- BLOC FORMATION -->
    <div class="row">
    <div class="col-12 col-lg-4 d-flex ">
                    <div class="bg-about">
                        <i class="fa" aria-hidden="true"></i>
                        <h4>2020-2021 Titre RNCP Développeur web et mobile</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor eum corporis asperiores voluptatum cumque. Doloremque quis accusantium alias. Obcaecati, quas tempore! Quibusdam officia animi vel eum hic at doloremque?</p>
                    </div>
        </div>
    <div class="col-12 col-lg-4 d-flex ">
                    <div class="bg-about">
                        <i class="fa" aria-hidden="true"></i>
                        <h4>2004-2006 Bac pro Commerce</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor eum corporis asperiores voluptatum cumque. Doloremque quis accusantium alias. Obcaecati, quas tempore! Quibusdam officia animi vel eum hic at doloremque?</p>
                    </div>
        </div>
    <div class="col-12 col-lg-4 d-flex ">
                    <div class="bg-about">
                        <i class="fa" aria-hidden="true"></i>
                        <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo aspernatur iusto quod mollitia ipsum asperiores, neque totam beatae fuga laudantium! Reiciendis debitis impedit eligendi qui nisi nostrum, alias consectetur quod.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum dolor eum corporis asperiores voluptatum cumque. Doloremque quis accusantium alias. Obcaecati, quas tempore! Quibusdam officia animi vel eum hic at doloremque?</p>
                    </div>
        </div>
    </div>
    <!-- FIN BLOC FORMATION -->
<!-- PORTFOLIO -->
<div class="row title" id="portfolio">
            <h2 class="text-center w-100" id="C4">Portfolio</h2>
            <hr>
            <p class="text-center w-100 px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ex reiciendis illum voluptas aspernatur fuga praesentium tenetur nam, placeat exercitationem, eos quos est eius, aliquam minima ipsa aut incidunt numquam quo!</p>
        </div>
        <!-- GALLERY -->
        <div class="row">
        <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <img src="source/San-Francisco-Sunset.jpeg" alt="<?php echo $bloc["texte"]; ?>" class="photo">
                </div>
        <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <img src="source/cadrage-photo.jpeg" alt="<?php echo $bloc["texte"]; ?>" class="photo">
                </div>
        <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <img src="source/téléchargement (1).jpeg" alt="<?php echo $bloc["texte"]; ?>" class="photo">
                </div>
        </div>
        </div>
        <!-- FIN GALLERY -->
<!-- FIN PORTFOLIO -->
<!-- CONTACT -->
<div class="row title">
    <h2 class="text-center" id="C5">Contact</h2>
    <hr>
    <p class="text-center w-100 px-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error reiciendis enim earum? Voluptate dicta aperiam 
      assumenda totam quae earum neque et? Provident distinctio deleniti et esse temporibus excepturi saepe ipsum.</p>
</div>
<div class="row">
    <div class="col navy-contact">
      <div class="navy-span">
        <span class="icon-mail4"></span>
      </div>
        <h4>Email</h4>
        <p>test@gmail.com</p>
        <div class="navy-span">
          <span class="icon-phone"></span>
        </div>
        <h4>Téléphone</h4>
        <p>000000000</p>
    </div>
    <div class="col navy-form">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nom</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Prénom</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prénom">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Téléphone</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tel">
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<a class="btn btn-primary" href="#" role="button">Envoyer</a>
    </div>
</div>
<!-- FIN CONTACT -->
</div>
<div class="footer-bg">
  <div class="row">
    <div class="col">
      <div class="footer-social">
        <span class="icon-facebook2"></span>
        <span class="icon-instagram"></span>
        <span class="icon-linkedin"></span>
      </div>
    </div>
    <div class="col">

    </div>
  </div>
</div>
<!-- FIN CONTENU -->
<!-- CDN JS BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>