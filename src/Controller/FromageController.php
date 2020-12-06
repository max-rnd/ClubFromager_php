<?php


namespace Controller;


use Model\Business\Fromage;
use Model\Data\daoFromage;
use View\FromageView;

class FromageController
{
    private daoFromage $daoFromage;
    private FromageView $viewFromage;

    /**
     * FromageController constructor.
     */
    public function __construct()
    {
        $this->daoFromage = new daoFromage();
        $this->viewFromage = new FromageView();
    }

    public function Index() : void
    {
        $lstF = $this->daoFromage->getFromageList();
        $this->viewFromage->Index($lstF);
    }
    public function Show(int $id) : void
    {
        $f = $this->daoFromage->getFromage($id);
        $this->viewFromage->Show($f);
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