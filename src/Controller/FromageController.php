<?php


namespace Controller;


use Model\Business\Fromage;
use Model\Data\daoFromage;

class FromageController
{
    private daoFromage $daoFromage;

    /**
     * FromageController constructor.
     */
    public function __construct()
    {
        $this->daoFromage = new daoFromage();
    }

    public function Show(int $id) : void
    {
        $f = $this->daoFromage->getFromage($id);
    }
    public function Edit(int $id) : void
    {
        $f = $this->daoFromage->getFromage($id);

        $this->daoFromage->updateFromage($f);
    }
    public function Create() : void
    {
        $f = new Fromage();
        $this->daoFromage->newFromage($f);
    }
    public function Delete(int $id) :void
    {
        $this->daoFromage->deleteFromage($id);
    }
}