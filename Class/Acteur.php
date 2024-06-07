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
}

?>