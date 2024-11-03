<?php
function erreur($connexion) {
    if ($connexion->errno) {
        echo "<p>Erreur n° {$connexion->errno}:{$connexion->error}</p>";
        exit(1);
    }
}
?>