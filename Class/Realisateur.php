<?php
require_once 'Film.php';
require_once 'Role.php';
require_once 'Personne.php';
require_once 'Genre.php';
require_once 'Acteur.php';
require_once 'Casting.php';





class Realisateur extends Personne{

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

    public function printRealisateur():string{
        $retour = "<h2>$this</h2>";
        $retour .= "<h3>Informations</h3>";
        $retour .= "<strong>Naissance : </strong>". $this->naissance->format("d-m-Y")."<br>";
        $retour .= "<strong>Sexe :</strong> $this->sexe"."<br>";

        if ($this->filmographie!=[]) {
            $retour .= "<p>";
            $retour.="<h3>Filmographie</h3>";
            foreach ($this->filmographie as $film) {
                $retour.= "$film <br>";
            }
            $retour .= "</p>";
        }

        return $retour;
    }
    
    public function __toString()
    {
        return strtoupper($this->nom)." $this->prenom";
    }
}
?>