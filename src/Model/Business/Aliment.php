<?php

namespace Model\Business;


abstract class Aliment
{
    protected int $id;
    protected string $name;
    protected Pays $origin;
    protected \DateTime $creation;
    protected string $image;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Pays
     */
    public function getOrigin(): Pays
    {
        return $this->origin;
    }

    /**
     * @param Pays $origin
     */
    public function setOrigin(Pays $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @return \DateTime
     */
    public function getCreation(): \DateTime
    {
        return $this->creation;
    }

    /**
     * @param \DateTime $creation
     */
    public function setCreation(\DateTime $creation): void
    {
        $this->creation = $creation;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function display()
    {
        echo $this->id;
        echo $this->name;
        echo $this->origin->getNom();
        echo $this->creation->format('d/m/Y');
        echo $this->image;
    }
}