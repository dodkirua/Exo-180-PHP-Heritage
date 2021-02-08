<?php


class Habitation{
    private String $pays;
    private String $ville;
    private String $cp;
    private Int $chambre;
    private Int $piece;

    /**
     * Habitation constructor.
     * @param String $pays
     * @param String $ville
     * @param String $cp
     * @param Int $chambre
     * @param Int $piece
     */
    public function __construct(string $pays, string $ville, string $cp, int $chambre, int $piece)
    {
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setCp($cp);
        $this->setChambre($chambre);
        $this->setPiece($piece);
    }


    /**
     * return pays
     * @return String
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * change pays
     * @param String $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * return ville
     * @return String
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * change ville
     * @param String $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * return code postal
     * @return String
     */
    public function getCp(): string
    {
        return $this->cp;
    }

    /**
     * change code postal
     * @param String $cp
     */
    public function setCp(string $cp): void
    {
        $this->cp = str_pad($cp,5,"0",STR_PAD_LEFT);
    }

    /**
     * return chambre
     * @return Int
     */
    public function getChambre(): int
    {
        return $this->chambre;
    }

    /**
     * change chambre
     * @param Int $chambre
     */
    public function setChambre(int $chambre): void
    {
        $this->chambre = $chambre;
    }

    /**
     * return piece
     * @return Int
     */
    public function getPiece(): int
    {
        return $this->piece;
    }

    /**
     * change piece
     * @param Int $piece
     */
    public function setPiece(int $piece): void
    {
        $this->piece = $piece;
    }


}