<?php
class Image extends Model {
    public function __construct() {
        // Nous définissons la table par défaut de ce modèle
        $this->table = "image";

        // Nous ouvrons la connection à la bdd
        $this->getConnection();
    }

    public function supprimer(int $id) {
        $sql= " DELETE FROM " .$this->table. " WHERE id=" .$id;
        $result=$this->_connexion->query($sql);
        return $result;
    }

    //Merci laure
    public function modifier(string $id) {
        $sql= " UPDATE " .$this->table. " SET chemin='".$_POST['chemin']."', alt='".addslashes($_POST['alt'])."' WHERE id= '$id'";
        //die($sql);
        $result=$this->_connexion->query($sql);
        return $result;
    }

    //Merci laure
    public function ajouter() {
        $sql= " INSERT INTO `image` (id, chemin, alt) VALUES (NULL, '".$_POST['prefix']."/".$_POST['chemin']."', '".$_POST['alt']."')";
        //die($sql);
        $result=$this->_connexion->query($sql);
        return $result;
    }
}
?>