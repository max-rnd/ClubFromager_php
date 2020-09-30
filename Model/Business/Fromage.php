<?php


namespace Model\Business;


class Fromage
{
    private $_nom;
    private $_creation;
    private $_image;
    private $_pays_origin;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCreation()
    {
        return $this->_creation;
    }

    /**
     * @param mixed $creation
     */
    public function setCreation($creation): void
    {
        $this->_creation = $creation;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->_image = $image;
    }

    /**
     * @return mixed
     */
    public function getPaysOrigin()
    {
        return $this->_pays_origin;
    }

    /**
     * @param mixed $pays_origin
     */
    public function setPaysOrigin($pays_origin): void
    {
        $this->_pays_origin = $pays_origine;
    }

    public function getArray()
    {
        return array(
            'nom' => $this->_nom,
            'creation' => $this->_creation,
            'image' => $this->_image,
            'pays_origin' => $this->_pays_origin
        );
    }
}