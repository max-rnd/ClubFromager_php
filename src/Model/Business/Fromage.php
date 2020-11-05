<?php


namespace Model\Business;


class Fromage extends Aliment implements IBusinessClass
{
    private int $dureeAffinage;
    private string $recette;

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

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        // TODO: Implement hydrate() method.
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->origin = $data['origin']; // Agrégation unidirectionnelle
        $this->creation = $data['creation'];
        $this->image = $data['image'];
    }
}