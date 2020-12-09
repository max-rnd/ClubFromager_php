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

    public function Index() : string
    {
        $lstF = $this->daoFromage->getFromageList();
        $content = $_SERVER['DOCUMENT_ROOT'].'/../src/View/Fromage/index.php';
        return require $_SERVER['DOCUMENT_ROOT'].'/../src/View/template.php';
    }
    public function Show(int $id) : string
    {
        $f = $this->daoFromage->getFromage($id);
        $content = $_SERVER['DOCUMENT_ROOT'].'/../src/View/Fromage/show.php';
        return require $_SERVER['DOCUMENT_ROOT'].'/../src/View/template.php';
    }
    public function Edit(int $id) : string
    {
        $f = $this->daoFromage->getFromage($id);
        $content = $_SERVER['DOCUMENT_ROOT'].'/../src/View/Fromage/edit.php';
        return require $_SERVER['DOCUMENT_ROOT'].'/../src/View/template.php';
        // $this->daoFromage->updateFromage($f);
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