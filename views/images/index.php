<script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<link rel="stylesheet" href="/css/magnific-popup.css">
<link rel="stylesheet" href="/css/lightbox.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<section id="learn" class="p-5 m-5 bg-dark text-light">
  <div class="container-fluid">
    <div class="row align-item-center justify-content-between">
      <div class="col-md p-5">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
          
          <!-- Indicators/dots -->
          <!-- Aide de Marie-Lou -->
          <div class="carousel-indicators">
          <?php $compteur = 0; $active = true; foreach($images as $image):?>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="<?= $compteur++ ?>" class="<?php if($active){echo 'active'; $active = false;}?>"></button>
            <?php endforeach ?>
          </div>
          
          <!-- The slideshow/carousel -->
          <!-- Aide de Clarisse -->
          <div class="carousel-inner">
            <?php $active = true; foreach($images as $image): ?>
            <div class="carousel-item <?php if($active){echo 'active'; $active = false;}?>">
              <a href="<?= $image['chemin'] ?>">
                <img src="<?= $image['chemin'] ?>" class="rounded mx-auto d-block" style="max-width:20vw;"></img>
              </a>
              <div class="carousel-caption">
                <div class="card" style="width: 10rem;">
                  <div class="card-body">
                    <h5 class="card-title text-dark">Description</h5>
                    <p class="card-text text-secondary"><?= $image['alt'] ?></p>
                  </div>
                </div>     
              </div>
            </div>
            <?php endforeach ?>
          </div> 
          
          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
          
        </div>
        <!-- Bouton revenir en arrière -->
        <div class="col-md">
            <a href="/" class="btn btn-light mt-3" style="font-size: 1vw;">
              <i class="bi bi-chevron-right"></i>Revenir en arrière
            </a>
          </div>
      </div>
    </div>
  </div>
</section>