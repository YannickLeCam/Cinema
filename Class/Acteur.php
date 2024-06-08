<?php
require_once 'Film.php';
require_once 'Role.php';
require_once 'Realisateur.php';
require_once 'Genre.php';
require_once 'Personne.php';
require_once 'Casting.php';


class Acteur extends Personne{

    private array $castings=[];

    public function __construct(string $nom,string $prenom,string $naissance,string $sexe) {
        parent::__construct($nom,$prenom,$naissance,$sexe);
    }

    /**
     * Get the value of castings
     *
     * @return array[Film]
     */
    public function getCastings(): array
    {
        return $this->castings;
    }

    public function addCasting(Casting $casting):void{
        if (!in_array($casting,$this->castings)) {
            $this->castings[]=$casting;
        }
    }

    public function printActeur():string{
        $retour = "<h2>$this</h2>";
        if ($this->castings!=[]) {
            $retour .= "<p>";
            foreach ($this->castings as $casting) {
                $retour.= $casting->getRole() . " dans le film " . $casting->getFilm() ."<br>";
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