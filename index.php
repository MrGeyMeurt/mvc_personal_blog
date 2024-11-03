<?php
// Afficher toutes les erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Gestionnaire d'exceptions global
set_exception_handler(function($e) {
    echo 'Exception: ', $e->getMessage(), "\n";
});

// Définition de la racine
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

// Vérification des fichiers requis
$requiredFiles = [
    ROOT . 'app/Model.php',
    ROOT . 'app/Controller.php',
    ROOT . 'controllers/handler.php'
];

foreach ($requiredFiles as $file) {
    if (!file_exists($file)) {
        die("Le fichier requis $file est manquant.");
    } else {
        require_once($file);
        //echo "$file included successfully<br>";
    }
}

// On sépare les paramètres et on les met dans le tableau $params
$params = explode('/', isset($_GET['p']) ? $_GET['p'] : '');

//if (!empty($params)) {
//    echo "<pre>";
//    var_dump($params);
//    echo "</pre>";
//}

// Si au moins 1 paramètre existe
if (isset($params[0]) && $params[0] != "") {
    // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
    $controller = ucfirst($params[0]);
    // On sauvegarde le 2ème paramètre dans $action s'il existe, sinon index
    $action = isset($params[1]) ? $params[1] : 'index';

    // Debugging
    echo "Controller: $controller, Action: $action<br>";

    // On appelle le contrôleur
    $controllerFile = ROOT . 'controllers/' . $controller . '.php';
    if (file_exists($controllerFile)) {
        require_once($controllerFile);
        // On instancie le contrôleur
        if (class_exists($controller)) {
            $controllerInstance = new $controller();
            if (method_exists($controllerInstance, $action)) {
                // On supprime les 2 premiers paramètres
                unset($params[0]);
                unset($params[1]);
                // On appelle la méthode $action du contrôleur $controller
                call_user_func_array([$controllerInstance, $action], $params);
            } else {
                // On envoie le code réponse 404
                http_response_code(404);
                echo "La méthode $action n'existe pas dans le contrôleur $controller.";
            }
        } else {
            echo "Le contrôleur $controller n'existe pas.";
        }
    } else {
        echo "Le fichier contrôleur $controllerFile n'existe pas.";
    }
} else {
    // Ici aucun paramètre n'est défini
    // On appelle le contrôleur par défaut
    require_once(ROOT . 'controllers/Main.php');
    // On instancie le contrôleur
    $controllerInstance = new Main();
    // On appelle la méthode index
    $controllerInstance->index();
}

//var_dump($params);
//var_dump($controller);
?>
