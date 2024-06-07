<?php
require_once 'Realisateur.php';
require_once 'Role.php';
require_once 'Personne.php';
require_once 'Genre.php';
require_once 'Acteur.php';
require_once 'Film.php';



class Casting {

    private Role $role;

    private Acteur $acteur;

    private Film $film;

    public function __construct(Role $role,Acteur $acteur,Film $film) {
        $this->role = $role;
        $this->acteur = $acteur;
        $this->film = $film;
        $this->role->addCasting($this);
        $this->acteur->addCasting($this);
        $this->film->addCasting($this);

    }

    /**
     * Get the value of role
     *
     * @return Role
     */
    public function getRole(): Role
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @param Role $role
     *
     * @return self
     */
    public function setRole(Role $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of acteur
     *
     * @return Acteur
     */
    public function getActeur(): Acteur
    {
        return $this->acteur;
    }

    /**
     * Set the value of acteur
     *
     * @param Acteur $acteur
     *
     * @return self
     */
    public function setActeur(Acteur $acteur): self
    {
        $this->acteur = $acteur;

        return $this;
    }

    /**
     * Get the value of film
     *
     * @return Film
     */
    public function getFilm(): Film
    {
        return $this->film;
    }

    /**
     * Set the value of film
     *
     * @param Film $film
     *
     * @return self
     */
    public function setFilm(Film $film): self
    {
        $this->film = $film;

        return $this;
    }
}


?>