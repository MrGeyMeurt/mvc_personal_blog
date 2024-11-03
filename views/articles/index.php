<section id="learn" class="p-5">
    <div class="container-fluid">
        <div class="row align-item-center justify-content-between">
            <div class="col-md">
                <img src="icon\undraw_world_re_768g.svg" class="img-fluid w-150 d-none d-md-block" alt="world">
            </div>
            <div class="col-md p-5">                
                <div class="list-group">
                    <?php foreach($articles as $article): ?>
                    <a href="/articles/lire/<?= $article['slug'] ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 text-primary text-uppercase" style="font-size: 1.3vw;"><strong><?= $article['titre'] ?></strong></h5>
                        </div>
                        <p class="mb-1"><?= $article['contenu'] ?></p>
                        <small>/Article</small>
                    </a>
                    <?php endforeach ?>
                </div>
                <a href="/" class="btn btn-light mt-3" style="font-size: 1vw;">
                    <i class="bi bi-chevron-right"></i>Revenir en arrière
                </a>
            </div>
        </div>
    </div>
</section>