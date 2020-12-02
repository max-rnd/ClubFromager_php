<?php


namespace Model\Business;



class Fromage extends Aliment
{
    protected int $dureeAffinage;
    protected string $recette;

    /**
     * @return int
     */
    public function getDureeAffinage(): int
    {
        return $this->dureeAffinage;
    }

    /**
     * @param int $dureeAffinage
     */
    public function setDureeAffinage(int $dureeAffinage): void
    {
        $this->dureeAffinage = $dureeAffinage;
    }

    /**
     * @return string
     */
    public function getRecette(): string
    {
        return $this->recette;
    }

    /**
     * @param string $recette
     */
    public function setRecette(string $recette): void
    {
        $this->recette = $recette;
    }
}