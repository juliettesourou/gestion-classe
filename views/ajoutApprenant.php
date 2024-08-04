<div class="container card col-md-6">
    <div class="card-header">
        <div class="row">
            <div class="col-md-10">
                <h3> Formulaire d' <?= isset($c) ? "edition" :  "ajoute" ?> des apprenants </h3>
            </div>
            <div class="col-md-2">
                <a href="?page=apprenant" class="btn btn-outline-info btn-sm">Retour</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form action="" method="post">
            <?php if (isset($c)) : ?>
                <input type="hidden" name="id" value="<?= $c->id ?>">
            <?php endif; ?>
            <div class="form-group">
                <label for="">Prenom <span class="text-danger"></span></label>
                <input type="text" class="form-control" require value="<?= isset($c) ?  $c->prenom : '' ?> " name="prenom">
            </div>
            <div class="form-group">
                <label for="">Nom <span class="text-danger"></span></label>
                <input type="text" class="form-control" require value="<?= isset($c) ?  $c->nom : '' ?> " name="nom">
            </div>
            <div class="form-group">
                <label for="">Adresse <span class="text-danger"></span></label>
                <input type="text" class="form-control" require value="<?= isset($c) ?  $c->adresse : '' ?> " name="adresse">
            </div>
            <div class="form-group">
                <label for="">Date de naissance <span class="text-danger"></span></label>
                <input type="date" class="form-control" require value="<?= isset($c) ?  $c->datenais : '' ?> " name="datenais">
            </div>
            <div class="form-group">
                <label for="">Lieu de naissance <span class="text-danger"></span></label>
                <input type="text" class="form-control" require value="<?= isset($c) ?  $c->lieunais : '' ?> " name="lieunais">
            </div>
            <div class="form-group">
                <label for=""> Classe <span class="text-danger"></span></label>
                <select name="idclasse" value="<?= isset($c) ?  $c->idclasse : '' ?> " id="" class="form-control">
                    <option value="">Veuillez selectionner une classe</option>
                    <?php foreach ($classes as $c) : ?>
                        <option value="<?= $c->id ?>"><?= $c->nom ?></option>
                    <?php endforeach ?>
                </select>
            </div>
    </div>


    <button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
    </form>
</div>
</div>