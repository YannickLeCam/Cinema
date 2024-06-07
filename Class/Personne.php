<?php
require_once 'Film.php';
require_once 'Role.php';
require_once 'Realisateur.php';
require_once 'Genre.php';
require_once 'Acteur.php';
require_once 'Casting.php';
?>


<?php
class Personne {

    private string $nom;

    private string $prenom;

    private DateTime $naissance;

    private string $sexe;

    public function __construct(string $nom,string $prenom,string $naissance,string $sexe) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new DateTime($naissance);
        $this->sexe = $sexe;
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
     * Get the value of prenom
     *
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of naissance
     *
     * @return DateTime
     */
    public function getNaissance(): DateTime
    {
        return $this->naissance;
    }

    /**
     * Set the value of naissance
     *
     * @param DateTime $naissance
     *
     * @return self
     */
    public function setNaissance(DateTime $naissance): self
    {
        $this->naissance = $naissance;

        return $this;
    }

    /**
     * Get the value of sexe
     *
     * @return string
     */
    public function getSexe(): string
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @param string $sexe
     *
     * @return self
     */
    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }
}



?>