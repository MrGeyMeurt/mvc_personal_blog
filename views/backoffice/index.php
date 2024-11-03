<?php require_once "controllers/Login.php";
if(isset($_SESSION['co'])) {
    $msg = $images['msg']; unset($images['msg']);
    ?>
        <?=$msg?>
    <!-- Section -->
    <section class="p-5 pb-0">
        <div class="container-fluid">
            <div class="row align-item-center justify-content-between">
                <div class="col-md">
                    <img src="..\..\icon\undraw_launching_re_tomg.svg" class="img-fluid" alt="gaming">
                </div>
                <div class="col-md p-5">
                    <h2 style="font-size: 2vw;"><strong>Backoffice</strong></h2>
                    <p class="lead" style="font-size: 1.4vw;">Ajouter, modifier ou supprimer des images.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, animi nesciunt doloribus culpa dolores blanditiis distinctio soluta ullam, expedita enim similique, adipisci voluptatum. Voluptatibus illo quod corporis ratione ipsam fuga iste placeat eaque culpa facilis.</p>
                    <a href="/" class="btn btn-light mt-3" style="font-size: 1vw;">
                        <i class="bi bi-chevron-right"></i>Revenir en arrière
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ajouter-->
    <section class="p-5 bg-dark text-light">
        <div class="container-fluid">
            <div class="row align-item-center justify-content-between">
                <div class="col-md p-5">
                    <h2 style="font-size: 2vw;"><strong>Ajouter une image</strong></h2>
                    <p>Insérer une nouvelle image dans la base de données.</p>
                    <form action="/backoffice/ajouter" method="POST">                   
                        <input type="file" class="form-control mb-3" style="font-size: 1vw;" name="chemin" id="customFile" required/>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="font-size: 1vw;">Changer le chemin si necessaire</span>
                            </div>
                            <input class="form-control" type="text" style="font-size: 1vw;" name="prefix" value="/media">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="font-size: 1vw;">Choisir une description</span>
                            </div>
                            <input class="form-control" type="text" name="alt" required>
                        </div>
                        <button type="submit" name="ajouter" class="btn btn-primary my-2" style="font-size: 1vw;">Ajouter</button>
                    </form>
                </div>
                <div class="col-md">
                    <img src="..\..\icon\undraw_uploading_re_okvh.svg" class="img-fluid" alt="gaming">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Table bootstrap -->
    <section class="p-5">
        <div class="container-fluid">
            <div class="row align-item-center justify-content-between">
                <div class="col-md-5 px-2">
                    <img src="..\..\icon\undraw_add_post_re_174w.svg" class="img-fluid" alt="post">
                    <img src="..\..\icon\undraw_add_file_re_s4qf.svg" class="img-fluid" alt="file">
                    <img src="..\..\icon\undraw_observations_re_ohja.svg" class="img-fluid" alt="observation">
                    <img src="..\..\icon\undraw_insert_re_s97w.svg" class="img-fluid" alt="insert">
                    <img src="..\..\icon\undraw_upload_image_re_svxx.svg" class="img-fluid" alt="upload_image">
                </div>
                <div class="col-md-7 table-responsive">                
                    <table class="table table-striped table align-middle">
                        <h2 style="font-size: 2vw;">Liste des images</h2>
                        <thead class="table">
                            <tr>
                                <th style="font-size: 1vw;">Image</th>
                                <th style="font-size: 1vw;">ID</th>
                                <th style="font-size: 1vw;">Chemin</th>
                                <th style="font-size: 1vw;">Descriptions</th>
                            </tr>
                        </thead>
                        <?php foreach($images as $image):?>
                        <tbody>
                            <tr>
                                <form action="/backoffice/modifier/<?= $image['id'] ?>" method="post">
                                    <td><img src="<?= $image['chemin'] ?>" alt="<?= $image['alt'] ?>" style="max-width: 100px;"></td>
                                    <th style="font-size: 1vw;"><?= $image['id'] ?></th>
                                    <td><input type="text" value="<?= $image['chemin'] ?>" name="chemin" style="font-size: 1vw;"></td>
                                    <td><input type="text" value="<?= $image['alt'] ?>" name="alt" style="font-size: 1vw;"></td>
                                    <td class="d-flex flex-column align-items-center">
                                        <button type="submit" class="btn btn-outline-primary" name="modifier" style="font-size: 1vw;">
                                            <i class="bi bi-pencil-square"></i>
                                            Modifier
                                        </button>
                                    </form>
                                    <form action="/backoffice/supprimer/<?= $image['id'] ?>" method="post">
                                        <button type="submit" class="btn btn-danger mx-4 my-3" name="supprimer" style="font-size: 1vw;">
                                            <i class="bi bi-trash"></i>
                                            Supprimer
                                        </button>
                                    </form> 
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>