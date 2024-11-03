<?php
class Main extends Controller {
    /**Cette méthode affiche la page principale**/
    public function index(){
        
        // On garde la structure avec une variable $main pour anticiper un éventuel besoin
        $main = array();

        //On envoie les données à la vue index
        $this->render('index', compact('main'));
    }
}
?>