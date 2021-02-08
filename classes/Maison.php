<?php


class Maison extends Habitation{
    private Bool $jardin;
    private Int $etage;
    private Bool $garage;

    /**
     * Maison constructor.
     * @param string $pays
     * @param string $ville
     * @param string $cp
     * @param int $chambre
     * @param int $piece
     * @param bool $jardin
     * @param int $etage
     * @param bool $garage
     */
    public function __construct(string $pays, string $ville, string $cp, int $chambre, int $piece,bool $jardin, int $etage, bool $garage)
    {
        parent::__construct($pays, $ville, $cp, $chambre, $piece);
        $this->setGarage($garage);
        $this->setEtage($etage);
        $this->setJardin($jardin);
    }

    /**
     * return jardin
     * @return bool
     */
    public function hasJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * change jardin
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * return etage
     * @return Int
     */
    public function getEtage(): int
    {
        return $this->etage;
    }

    /**
     * change etage
     * @param Int $etage
     */
    public function setEtage(int $etage): void
    {
        $this->etage = $etage;
    }

    /**
     * return garage
     * @return bool
     */
    public function hasGarage(): bool
    {
        return $this->garage;
    }

    /**
     * change garage
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }

    /**
     * return a string whit information
     * @return String
     */
    public function __toString(): String{
        $garage = "";
        $jardin = "";
        if ($this->hasGarage()){
            $garage = " avec un garage";
        }
        if ($this->hasJardin()){
            $jardin = " et un jardin";
        }
        return "Maison situé  ".$this->getPays()." dans la ville de ".$this->getVille()." avec le code postal : ".$this->getCp()." avec ".$this->getEtage()." étage(s) ".", ".$this->getChambre()." chambre(s)".$garage.$jardin;
    }
}