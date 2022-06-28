<?php

require 'vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader; // require 'vendor/twig/twig/src/Loader/FilesystemLoader.php';

$loader = new FilesystemLoader(__DIR__ . '/templates');

$twig = new Environment($loader, [
    'debug' => true,
    'cache' => __DIR__ . '/cache' // mettre le cache à false en développement pour que la page se recharge lors d'une actualisation
]);

$lastName = 'HURTREL';
// echo $twig->render('home.twig', [
//     'firstName' => 'David',
//     'lastName' => $lastName
// ]);

$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
if ($page === 'home') {
    echo $twig->render('home.twig');
} elseif ($page === 'test') {
    echo $twig->render('test.twig');
}
