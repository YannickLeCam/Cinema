<?php
require_once 'Realisateur.php';
require_once 'Role.php';
require_once 'Personne.php';
require_once 'Film.php';
require_once 'Acteur.php';

class Genre {
    
    private string $nom;

    private array $films=[];

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function addFilm(Film $film):void{
        if (!in_array($film,$this->films)) {
            $this->films[]=$film;
        }
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of films
     *
     * @return array
     */
    public function getFilms(): array
    {
        return $this->films;
    }
}
?>