<?php
require_once 'Class/Film.php';
require_once 'Class/Role.php';
require_once 'Class/Realisateur.php';
require_once 'Class/Genre.php';
require_once 'Class/Acteur.php';
require_once 'Class/Casting.php';
require_once 'Class/Personne.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéma</title>
</head>
<body>
    <h1>Exercice Cinéma :</h1>
    <?php
        // Créer des instances de Genre
        $genreAction = new Genre("Action");
        $genreDrama = new Genre("Drama");

        // Créer des instances de Réalisateur
        $realisateur1 = new Realisateur("Nolan", "Christopher", "1970-07-30", "M");
        $realisateur2 = new Realisateur("Spielberg", "Steven", "1946-12-18", "M");

        // Créer des instances d'Acteur
        $acteur1 = new Acteur("DiCaprio", "Leonardo", "1974-11-11", "M");
        $acteur2 = new Acteur("Hanks", "Tom", "1956-07-09", "M");
        $acteur3 = new Acteur("Page", "Elliot", "1987-02-21", "M");
        $acteur4 = new Acteur("Hardy", "Tom", "1977-09-15", "M");
        $acteur5 = new Acteur("Damon", "Matt", "1970-10-08", "M");
        $acteur6 = new Acteur("Burns", "Edward", "1968-01-29", "M");

        // Créer des instances de Film
        $film1 = new Film("Inception", "2010-07-16", 148, $realisateur1, $genreAction, [], "A thief who steals corporate secrets through the use of dream-sharing technology.");
        $film2 = new Film("Saving Private Ryan", "1998-07-24", 169, $realisateur2, $genreDrama, [], "Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.");

        // Créer des instances de Role
        $role1 = new Role("Dom Cobb");
        $role2 = new Role("Captain John H. Miller");
        $role3 = new Role("Ariadne");
        $role4 = new Role("Eames");
        $role5 = new Role("Private James Francis Ryan");
        $role6 = new Role("Private Richard Reiben");

        // Ajouter des castings pour le film Inception
        $casting1 = new Casting($role1,$acteur1, $film1);
        $casting2 = new Casting($role3,$acteur3, $film1);
        $casting3 = new Casting($role4,$acteur4, $film1);

        // Ajouter des castings pour le film Saving Private Ryan
        $casting4 = new Casting($role2,$acteur2, $film2);
        $casting5 = new Casting($role5,$acteur5, $film2);
        $casting6 = new Casting($role6, $acteur6, $film2);

        echo $film1->printFilm();
        echo $acteur1->printActeur();
        echo $genreDrama->printListFilm();
        echo $realisateur1->printRealisateur();
        echo $role1->printRole();

    ?>
</body>
</html>