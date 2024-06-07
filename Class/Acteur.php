<?php
require_once 'Film.php';
require_once 'Role.php';
require_once 'Realisateur.php';
require_once 'Genre.php';
require_once 'Personne.php';


class Acteur extends Personne{

    private array $filmographie=[];

    public function __construct(string $nom,string $prenom,string $naissance,string $sexe) {
        parent::__construct($nom,$prenom,$naissance,$sexe);
    }

    /**
     * Get the value of filmographie
     *
     * @return array[Film]
     */
    public function getFilmographie(): array
    {
        return $this->filmographie;
    }

    public function addFilm(Film $film):void{
        if (!in_array($film,$this->filmographie)) {
            $this->filmographie[]=$film;
        }
    }
}

?>