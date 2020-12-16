<form class="m-4">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="nom">Nom</label>
        <input value="<?= $f->getNom(); ?>" type="text" class="form-control col-sm-10" id="nom">
    </div>
    <div class="from-group row">
        <label class="col-sm-2 col-form-label" for="origine">Origine</label>
        <select class="form-control col-sm-10" id="origine">
            <option selected value="<?= $f->getOrigin()->getId(); ?>"><?= $f->getOrigin()->getNom(); ?></option>
            <?php foreach ($lstP as $p) { ?>
            <option value="<?= $p->getId(); ?>"><?= $p->getNom(); ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="creation">Nom</label>
        <input type="text" class="form-control col-sm-10" id="creation">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>