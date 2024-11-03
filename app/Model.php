<?php
require_once(ROOT.'controllers/erreur.php');
abstract class Model {
    private $host = "localhost";
    private $db_name = "mvc";
    private $username = "root";
    private $password = "";
    protected $_connexion;
    public $table;
    public $id;
    
    /*** Fonction d'initialisation de la base de données **/
    public function getConnection() {
        $this->_connexion = null;
        try {
            $this->_connexion = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            $this->_connexion->set_charset("utf8");
        } catch (mysqli_sql_exception $exception) {
            // Utiliser getMessage() pour obtenir le message d'erreur
            echo "Erreur de connexion : " . $exception->getMessage();
        }
    }
    
    /** Méthode permettant d'obtenir un enregistrement de la table choisie en fonction d'un id **/
    public function getOne() {
        $sql = "SELECT * FROM ".$this->table." WHERE id=".$this->id;
        $query = $this->_connexion->query($sql);
        return $query->fetch_assoc(); 
    }
    
    /** Méthode permettant d'obtenir tous les enregistrements de la table choisie **/
    public function getAll() {
        $sql = "SELECT * FROM ".$this->table;
        $query = $this->_connexion->query($sql);
        return $query->fetch_all(MYSQLI_ASSOC); 
    }
}
?>
