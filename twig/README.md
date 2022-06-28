# TWIG

## INSTALLATION DE TWIG

- initialiser Composer dans le projet :
```
composer init
```
- répondre aux questions (en laissant les valeurs par défaut)
- charger Twig avec Composer :
```
composer require twig/twig
```
- inclure l'autloader dans index.php :
```PHP
require 'vendor/autoload.php'
```

## FONCTIONNEMENT DE BASE

- charger un loader :
```PHP
$loader = new FilesystemLoader(__DIR__ . '/templates');
```
- initialiser Twig :
```PHP
$twig = new Environment($loader, [
    'debug' => true,
    'cache' => __DIR__ . '/cache' // mettre le cache à false en développement pour que la page se recharge lors d'une actualisation
]);
```
- rendre un template :
```PHP
$lastName = 'HURTREL';
echo $twig->render('home.twig', [
    'firstName' => 'David',
    'lastName' => $lastName
]);
```
- afficher les variables :
```HTML
<p>Bonjour {{ firstName }} {{ lastName }} !</p>
```
- balises :
```
{# commentaire #}
{{ maVariable }} => affichage (équivalent echo)
{% if maVariable %} => utilisation de fonction
```
