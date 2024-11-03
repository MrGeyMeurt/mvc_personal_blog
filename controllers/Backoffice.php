<?php
class Backoffice extends Controller {
    public function index() {
        $this->loadModel('Image');
        
        $images = $this->Image->getAll();
        
        $this->render('index', compact('images'));
    }

    public function supprimer(int $id) {
        $this->loadModel('Image');
        if (isset($_POST['supprimer'])) {
            //on lance la requete sql supprimer($id)
            $this->Image->supprimer($id);
            $msg = "
            <div class='alert alert-danger'><strong>Attention</strong> Le fichier a été supprimer de la base de données.</div>
            ";
        }
        $images = $this->Image->supprimer($id);
        //apres avoir supprimer on réaffiche toutes les images avec le getAll pour actualiser
        $images = $this->Image->getAll();
        $images['msg'] = $msg;
        //render = ce qu'on affiche, compact = ce qu'on envoie
        $this->render('index', compact('images'));
    }
    
    //aide laure
    public function modifier(string $id) {
        $msg="";
        $this->loadModel('Image');
        if(isset($_POST['modifier'])) {
            //on lance la requete sql modifier($id)
            $this->Image->modifier($id);
            $msg = "
            <div class='alert alert-info'><strong>Information</strong> Le fichier a été mis a jour dans la base de données.</div>
            ";
        }
        //apres avoir modifier on réaffiche toutes les images avec le getAll pour actualiser
        $images = $this->Image->getAll();
        $images['msg'] = $msg;
        //render = ce qu'on affiche, compact = ce qu'on envoie
        $this->render('index', compact('images'));
    }

    //Merci laure
    public function ajouter() {
        $msg="";
        $this->loadModel('Image');
        if (isset($_POST['ajouter'])) {
            $this->Image->ajouter($id);
            $msg = "
            <div class='alert alert-success'><strong>Bravo</strong> Le fichier a été ajouter à la base de données.</div>
            ";
        }
        $images = $this->Image->getAll();
        $images['msg'] = $msg;
        $this->render('index', compact('images'));
    }
}
?>