<?php
class Articles extends Controller{
    
    /*** Cette méthode affiche la liste des articles**/
    public function index(){
        // On instancie le modèle "Article"
        $this->loadModel('Article');
        // On stocke la liste des articles dans $articles
        $articles = $this->Article->getAll();
        // On affiche les données
        //var_dump($articles);
        // On envoie les données à la vue index
        $this->render('index', compact('articles'));
    }
    
    public function loadModel(string $model){
        // On va chercher le fichier correspondant au modèle souhaité
        require_once(ROOT.'models/'.$model.'.php');
        // On crée une instance de ce modèle. Ainsi "Article" sera accessible par $this->Article
        $this->$model = new $model();
    }

    public function lire(string $slug){
        // On instancie le modèle "Article"
        $this->loadModel('Article');
        // On stocke l'article dans $article
        $article = $this->Article->findBySlug($slug);
        // On envoie les données à la vue lire
        $this->render('lire', compact('article'));
    }
}
?>