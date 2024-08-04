<div class="container card col-md-5 mt-3">

    <div class="card-header bg-info">
        <div class="row">
            <div class="col-md-10">
                <h3 class="text-white ">Formulaire d' <?= isset($c) ? "edition" :  "ajoute" ?> classe</h3>
            </div>
            <div class="col-md-2 text-right">
                <a href="?page=classe" class=" btn  btn-warning">Retour</a>

            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <?php if (isset($c)) : ?>
                <input type="hidden" name="id" value="<?= $c->id ?>">
            <?php endif; ?>
            <div class="form-group">
                <lable>Nom</lable>
                <input type="text" name="nom" value="<?= isset($c) ?  $c->nom : '' ?> " placeholder="Entrer le nom de la classe" class="form-control">
            </div>
            <div class="form-group">
                <lable>Taille</lable>
                <input type="number" name="taille" value="<?= isset($c) ? $c->taille : '' ?>" placeholder="Entrer la taille" class="form-control">
            </div>
            <?php if (isset($c)) : ?>
                <button type="submit" name="modifier" class="btn btn-outline-warning">Modifier</button>
            <?php else : ?>
                <button type="submit" name="ajouter" class="btn btn-outline-success">Ajouter</button>
            <?php endif; ?>
        </form>

    </div>
</div>