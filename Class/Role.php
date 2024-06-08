<?php
require_once 'Realisateur.php';
require_once 'Genre.php';
require_once 'Personne.php';
require_once 'Film.php';
require_once 'Acteur.php';
require_once 'Casting.php';




class Role {

    private string $nom;

    private array $listeCasting = [];

    public function __construct(string $nom) {
        $this->nom = $nom;
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


    //Servira de Setter a listActeur
    public function addCasting(Casting $casting):void{
        if (!in_array($casting,$this->listeCasting)) { //On vérifie si l'acteur est deja dans la liste ou pas 
            $this->listeCasting[]=$casting;
        }
    }
    

    /**
     * Get the value of listeActeur
     *
     * @return array[Casting]
     */
    public function getListeCasting(): array
    {
        return $this->listeCasting;
    }

    public function printRole():string{
        $retour = "<h2>$this</h2>";
        if ($this->listeCasting!=[]) {
            $retour.= "<h3>Acteur ayant incarné ce role</h3><p>";
            foreach ($this->listeCasting as $casting) {
                $retour .=  $casting->getActeur() ." dans le film ". $casting->getFilm() ." <br>";
            }
            $retour.="</p>";
        }else {
            $retour .= "<p>Nous avons pas d'acteur ou de film pour ce role</p> <br>";
        }


        return $retour;
    }

    public function __toString()
    {
        return "$this->nom";
    }
}
?>