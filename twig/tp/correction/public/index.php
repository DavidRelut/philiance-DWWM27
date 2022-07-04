<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Twig\TwigFilter;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twig\Extension\DebugExtension;

require '../vendor/autoload.php';
require '../data/posts.php';

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader, [
    'debug' => true,
    'cache' => false
]);

$twig->addExtension(new DebugExtension());

$twig->addFilter(new TwigFilter('truncate50', function($string) {
    $sup = strlen($string) > 47 ? '...' : null;
    return substr($string, 0, 47) . $sup;
}));

$page = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : 'home';
$id = (isset($_GET['id']) && !empty($_GET['id']) ? (int)$_GET['id'] : null) - 1;

switch ($page) {
    case 'home':
        echo $twig->render('pages/home.twig', [
            'posts' => $posts
        ]);
        break;
    case 'posts':
        echo $twig->render('pages/posts.twig', [
            'posts' => $posts
        ]);
        break;
    case 'post':
        echo $twig->render('pages/post.twig', [
            'post' => $posts[$id]
        ]);
        break;
    case 'authors':
        echo $twig->render('pages/authors.twig');
        break;
    default:
        echo $twig->render('error/error404.twig');
        break;
}
