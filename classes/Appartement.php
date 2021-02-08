<?php


class Appartement extends Habitation
{
    private Bool $garage;

    public function __construct(string $pays, string $ville, string $cp, int $chambre, int $piece, bool $garage)
    {
        parent::__construct($pays, $ville, $cp, $chambre, $piece);
        $this->setGarage($garage);
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

    public function __toString(): String{
        $garage = "";
        if ($this->hasGarage()){
            $garage = " avec un garage";
        }

        return "Appartement situé  ".$this->getPays()." dans la ville de ".$this->getVille()." avec le code postal : ".$this->getCp()." avec "." étage(s) ".", ".$this->getChambre()." chambre(s)".$garage;
    }
}