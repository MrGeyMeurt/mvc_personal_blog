<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="icon" type="image/x-icon" href="../../favicon.ico">
  <title>MVC Blog</title>
  <style type="text/css">
    html {
      scroll-behavior: smooth;
    }

    @media only screen and (min-width: 3000px) {
    .col-lxl-1 {width: 8.33%;}
    .col-lxl-2 {width: 16.66%;}
    .col-lxl-3 {width: 25%;}
    .col-lxl-4 {width: 33.33%;}
    .col-lxl-5 {width: 41.66%;}
    .col-lxl-6 {width: 50%;}
    .col-lxl-7 {width: 58.33%;}
    .col-lxl-8 {width: 66.66%;}
    .col-lxl-9 {width: 75%;}
    .col-lxl-10 {width: 83.33%;}
    .col-lxl-11 {width: 91.66%;}
    .col-lxl-12 {width: 100%;}
    }

    p {
      font-size: 1.3vw;
    }

    h3 {
      font-size:1.8vw;
    }
  </style>
</head>
<body class="m-0 p-0">
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container-fluid px-5">
        <a class="navbar-brand" href="/" style="font-size: 1.1vw;">Welcome</a>
        
        <button 
        class="navbar-toggler" 
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navmenu"
        >
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php
          if(isset($_SESSION['co'])) {
            ?>
              <form method='post' action="/backoffice">
                <input type ='submit' class="btn btn-danger" name='deco' value='Se déconnecter'/>
              </form>
            <?php
          }
          ?>
      
      <div class="collapse navbar-collapse" style="font-size: 1.1vw;" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/" >Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/articles">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/images">Images</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="">Bientôt</a>
          </li>          
        </ul>
      </div>
    </div>
  </nav>
</header>
<main class="pt-4">
  <!-- Showcase -->
  <section class="bg-dark text-light mt-5 p-5 p-lg-0 pt-lg-5 text-center text-md-start">
    <div class="container-fluid px-5">
      <div class="d-sm-flex align-item-center justify-content-between">
        <div>
          <h1 style="font-size: 3vw;">Bienvenue sur <span class="text-warning">Mon Blog</span></h1>
          <p class="lead my-4" style="font-size: 1.3vw;">
            Alors on dirait pas mais c'est un blog plutôt sympa avec pas mal d'articles et de memes en tout genres donc profités, c'est pas souvent que vous aurait l'occas de voir un blog comme ça.
          </p>
          <button type="button" style="font-size: 1.3vw;" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">
            Commencer
          </button>
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title text-dark">Il n'y à rien à voir ici</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <iframe src="https://pointerpointer.com/" height="230" width="470" title="Le pointeur du doigt"></iframe>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="img-fluid w-50 d-none d-md-block" src="..\..\icon\undraw_hello_re_3evm.svg" alt="hello">
      </div>
    </div>
  </section>
  
  <!-- Sélection contenu -->
  
  
  <!-- Section 1 -->
  
  
  <!-- Section 2 -->
  
  
  <!-- Contenu -->
  <?= $content ?>
  
  <!-- Footer -->
  <footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
      <p class="lead" style="font-size: 1.3vw;">Copyright <a href="/backoffice" class="text-light" style="text-decoration: none; cursor: text;">&copy;</a> 2022 Manu TEAO HEREVERI</p>
      <a href="#" class="position-absolute bottom-0 end-0 p-5">
        <i class="bi bi-arrow-up-circle h1"></i>
      </a>
    </div>
  </footer>
</main>
</body>
</html>