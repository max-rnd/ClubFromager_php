<?php


namespace View;


class FromageView extends MainView
{
    public function Index(array $lstF)
    {
        $this->Header();
        ?>
            <h2>Liste des fromages</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody><?php foreach ($lstF as $f) { ?>
                <tr>
                  <th scope="row"><?= $f->getId(); ?></th>
                  <td><?= $f->getNom(); ?></td>
                  <td><a href="<?= $f->getId(); ?>" class="btn btn-primary">Voir</a></td>
                  <td><a href="<?= $f->getId(); ?>" class="btn btn">Modifier</a></td>
                  <td><a href="<?= $f->getId(); ?>" class="btn btn-danger">Supprimer</a></td>
                </tr><?php } ?>
              </tbody>
            </table>
        <?php $this->Footer();
    }

    private function Fromage() : void
    {
        ?>

        <?php
    }
}