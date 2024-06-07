<?php
require_once 'Realisateur.php';
require_once 'Genre.php';
require_once 'Personne.php';
require_once 'Film.php';
require_once 'Acteur.php';




class Role {

    private string $nom;

    private array $listeActeur = [];

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
    public function addActeur(Acteur $acteur):void{
        if (!in_array($acteur,$this->listeActeur)) { //On vérifie si l'acteur est deja dans la liste ou pas 
            $this->listeActeur[]=$acteur;
        }
    }
    

    /**
     * Get the value of listeActeur
     *
     * @return array[Acteur]
     */
    public function getListeActeur(): array
    {
        return $this->listeActeur;
    }
}
?>