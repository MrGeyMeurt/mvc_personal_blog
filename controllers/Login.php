<?php
require_once(ROOT.'controllers/Error.php');
session_start();
if(isset($_POST['envoie'])) {
	$login = $_POST['login'];
	$connexion = new mysqli ('localhost','root','','mvc');

	if($login->connect_errno){
		echo "echec de connexion n° {$login->connect_errno}:{$login->connect_error}";
	}
	$connexion -> set_charset("utf8");
	$sql = "SELECT `MDP` FROM `bousers` WHERE `login` = ?";
	
	$stmt=$connexion->prepare($sql);
	erreur($connexion);
	$stmt->bind_param("s",$login);
	erreur($connexion);
	
	if ($stmt -> execute()) { //La requête s'est exécutée
		//echo'all good';
		$stmt -> bind_result($hash);
		if ($stmt -> fetch()) {
			//echo'all good 2'.$hash.$_POST['mdp'];
			if(password_verify($_POST['mdp'], $hash)) {
				echo "
					<div class='alert alert-info'>
   						<strong>Information</strong> Vous êtes connecté
  					</div>
				";
				$_SESSION['co'] = $login;
			} else {
				echo "
					<div class='alert alert-danger'>
   						<strong>Attention</strong> Identifiant ou mot de passe incorrect
  					</div>
				";
			} 
		} else {
			echo "
				<div class='alert alert-danger'>
   					 <strong>Attention</strong> Identifiant ou mot de passe incorrect
  				</div>
			";
		}
	}
	erreur($connexion);
	$stmt-> close();
	$connexion -> close();
} //Fin de if isset $_POST['envoi']

if (isset($_POST['deco'])){
	unset($_SESSION['co']);
}

if(!isset($_SESSION['co'])) {
?>
<!--Form de login bootstrap-->
<section class="p-5">
	<div class="container-fluid">
		<div class="row align-item-center justify-content-between">
			<div class="col-md">
				<img src="icon\undraw_security_re_a2rk.svg" class="img-fluid w-100 d-none d-md-block" alt="security">
			</div>
			<div class="col-md p-5">                
				<h2 style="font-size: 2vw;">Portail backoffice</h2>
				<form method='post' action="/backoffice">
					<div class="form-floating mb-3 mt-3">
						<input type="text" class="form-control" id="login" placeholder="Entrer nom d'utilisateur" name="login" required>
						<label for="nom">Nom d'utilisateur:</label>
					</div>
					<div class="form-floating mb-3">
						<input type="password" class="form-control" id="mdp" placeholder="Entrer mot de passe" name="mdp" required>
						<label for="mdp">Mot de passe:</label>
					</div>
					<input type="submit" class="btn btn-primary" name="envoie" value="Se connecter" data-bs-toggle="tooltip" data-bs-placement="right" title="Le mot de passe c'est password" style="font-size: 1vw;">
				</form>
				<a href="/" class="btn btn-light mt-3" style="font-size: 1vw;">
					<i class="bi bi-chevron-right"></i>Revenir en arrière
				</a>
			</div>
		</div>
	</div>
</section>
</body>
</html>
<?php
    }
?>
<script>
// Tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>