<?php


namespace Model\Business;


class Pays implements IBusinessClass
{
    private int $id;
    private string $nom;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->nom = $data['nom'];
    }

    public function hydrate(array $data)
    {
        // TODO: Implement hydrate() method.
        $this->id = $data['id'];
        $this->nom = $data['nom'];
    }
}