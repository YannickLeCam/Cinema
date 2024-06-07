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
    public function getListeActeur(): array
    {
        return $this->listeCasting;
    }
}
?>