<?php

use Twig\TwigFilter;
use Twig\Environment;
use Twig\TwigFunction;
use Twig\Loader\FilesystemLoader;

require 'vendor/autoload.php'; // autoloader
require 'src/data.php'; // les données

// initialisation de Twig
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader, [
    'debug' => true,
    'cache' => false // __DIR__ . '/cache'
]);

// ajoute une fonction permettant de cibler directement le dossier public
$twig->addFunction(new TwigFunction('asset', function ($asset) {
    return sprintf('./public/%s', ltrim($asset));
}));

// ajoute une fonction permettant de tronquer une chaîne de caratères
$twig->addFunction(new TwigFunction('truncate', function(string $string, int $nb) {
    $sup = strlen($string) > $nb ? '...' : null;
    return substr($string, 0, $nb) . $sup;
}));

// ajoute un filtre permettant de tronquer une chaîne de caratères
$twig->addFilter(new TwigFilter('truncate', function($string, int $nb, string $supplement) {
    $sup = strlen($string) > $nb ? $supplement : null;
    return substr($string, 0, $nb) . $sup;
}));

// ajoute une extension permettant d'utiliser la fonction {{ dump() }} dans les templates
$twig->addExtension(new \Twig\Extension\DebugExtension());

// router
$page = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : 'home';
// if (file_exists(__DIR__ . '/templates/' . $page . '.twig')) { // si le fichier exemple/template/lkjhgfdfghjk.twig existe, je l'affiche
//     echo $twig->render($page . '.twig');
// } else { // sinon, j'affiche la page d'accueil par défaut
//     echo $twig->render('home.twig');
// }
switch ($page) {
    case 'home':
        echo $twig->render('home.twig');
        break;
    case 'games':
        echo $twig->render('games.twig', [
            'jeux' => $games
        ]);
        break;
    case 'users':
        echo $twig->render('users.twig', [
            'membres' => $users
        ]);
        break;
    case 'possessions':
        echo $twig->render('possessions.twig', [
            'possessions' => $possessions
        ]);
        break;
    default:
        echo $twig->render('home.twig');
        break;
};
