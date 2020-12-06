<?php


namespace View;


class FromageView
{

    /**
     * FromageView constructor.
     */
    public function __construct()
    {

    }

    public function Index(array $lstF)
    {
        ?>
        <h2>Liste des fromages</h2>
        <?php foreach ($lstF as $f) { ?>
            <p><?= $f->getNom(); ?>/p>
        <?php }
    }

    private function Fromage() : void
    {
        ?>
        <
        <?php
    }
}