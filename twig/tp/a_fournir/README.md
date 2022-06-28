# TWIG - TP

## CONTEXTE

L'objectif de cette évaluation est de mettre en place un blog qui traitera de tests de jeux de société. L'application devra comporter les pages suivantes :
- une page d'accueil recensant les trois derniers articles publiés (sous forme de cards).
- une page répertoriant tous les articles (sous forme de tableau).

## MISE EN PLACE

- créer un dossier pour le projet
- initialiser Composer
- installer Twig et mettre en place son environnement
- mettre en place l'arborescence du projet (base, héritage, partials, ...)

## AFFICHAGE

- intégrer Bootstrap
- le header et le footer devront être placés dans des fichiers séparés
- le header contiendra la barre de navigation
- le footer contiendra le copyright, le nom du site ainsi qu'un rappel de navigation
- créer les différentes pages et y afficher les données demandées

## DIVERS

- dans le footer, pour le copyright, afficher l'année actuelle (2022) de manière dynamique (avec une fonction)
- créer un filtre truncate50 permettant de tronquer une chaîne de caractères à 47 caractères, suivis de '...'
- utiliser au moins 5 filtres différents (fournis par Twig par défaut)
- utiliser au moins 5 fonctions différentes (fournies par Twig par défaut)
- prévoir un affichage par défaut au cas où le tableau d'articles serait vide
- installer l'extension DebugExtension et l'utiliser en bas de la page articles
