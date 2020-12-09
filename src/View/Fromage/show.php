<h2><?= $f->getNom(); ?></h2>
<p>Origine : <?= $f->getOrigin()->getNom(); ?></p>
<p>Création : <?= $f->getCreation()->format("d/m/Y"); ?></p>
<p>Durée d'affinage : <?= $f->getDureeAffinage(); ?> jours</p>
<p>Recette : <?= $f->getRecette(); ?></p>
<img src="img/fromage/<?= $f->getImage(); ?>">
</br>
<a href="/fromage" class="btn btn-primary">Retour</a>