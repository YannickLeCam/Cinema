<?php
require_once 'Realisateur.php';
require_once 'Role.php';
require_once 'Personne.php';
require_once 'Genre.php';
require_once 'Acteur.php';
require_once 'Casting.php';



class Film {

    private string $titre;

    private DateTime $dateSortie;

    private int $duree;

    private string $synopsis;

    private array $castings=[];

    private Realisateur $realisateur;

    private Genre $genre; //Dans l'exercice un film = un genre !


    public function __construct(string $titre,string $dateSortie,int $duree,Realisateur $realisateur,Genre $genre,array $castings=[],string $synopsis="") {
        $this->titre = $titre;
        $this->dateSortie = new DateTime($dateSortie);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->realisateur = $realisateur;
        $this->genre = $genre;

        $this->realisateur->addFilm($this);
        $this->genre->addFilm($this);
        foreach ($castings as $casting) {
            $this->addCasting($casting);
        }
    }

    /**
     * Get the value of realisateur
     *
     * @return Realisateur
     */
    public function getRealisateur(): Realisateur
    {
        return $this->realisateur;
    }

    /**
     * Set the value of realisateur
     *
     * @param Realisateur $realisateur
     *
     * @return self
     */
    public function setRealisateur(Realisateur $realisateur): self
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    /**
     * Get the value of genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     */
    public function setGenre($genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of synopsis
     *
     * @return string
     */
    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    /**
     * Set the value of synopsis
     *
     * @param string $synopsis
     *
     * @return self
     */
    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get the value of duree
     *
     * @return int
     */
    public function getDuree(): int
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @param int $duree
     *
     * @return self
     */
    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of dateSortie
     *
     * @return DateTime
     */
    public function getDateSortie(): DateTime
    {
        return $this->dateSortie;
    }

    /**
     * Set the value of dateSortie
     *
     * @param DateTime $dateSortie
     *
     * @return self
     */
    public function setDateSortie(DateTime $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get the value of titre
     *
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param string $titre
     *
     * @return self
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function addCasting(Casting $casting){
        if (!in_array($casting,$this->castings)) {
            $this->castings[]=$casting;
        }
        
    }

    public function printFilm():string{
        $retour = "<h2>$this</h2>";
        $retour .= "<p>Date de sortie (en France) : ". $this->dateSortie->format("d-m-Y")."<br>";
        $retour .= "Le réalisateur est $this->realisateur <br>";
        $retour .= "le genre du film est : $this->genre <br>";
        $retour .= "la durée : $this->duree</p>";
        if ($this->synopsis!="") {
            $retour.= "<h3>Synopsis</h3>";
            $retour.= "<p>$this->synopsis</p>";
        }
        if ($this->castings != []) {
            $retour .= "<h3>Personnages</h3><p>";
            foreach ($this->castings as $casting) {
                $retour .= "".$casting->getRole()." est incarné par " . $casting->getActeur() .".<br>";
            }
            $retour.="</p>";
        }
        return $retour;
    }

    public function __toString()
    {
        return "$this->titre";
    }
}
?>