<div class="container mt-4">
    <!-- APRES voit cliqué sur le button ajouter que cele redirige sur une autre page  -->
    <?php
    if (isset($_GET['type'])) : ?>
        <?php require_once("./views/ajoutApprenant.php"); ?>
    <?php else :  ?>

        <div class="container card col-md-10">
            <div class="card-header bg-info">
                <?php if (isset($_GET['message'])) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Ajout des apprenant avec success</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php endif; ?>
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="text-white"> Liste des Apprenants</h3>
                    </div>
                    <div class="col-md-2 text-right">
                        <a href="?page=apprenant&type=add" class=" btn  btn-warning">Ajouter</a>

                    </div>
                </div>
            </div>
            <div class="card-boby"></div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Date de naissance</th>
                        <th>Lieu de naissance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($apprenants as $a) : ?>
                        <tr>
                            <td><?= $a->prenom ?></td>
                            <td> <?= $a->nom ?> </td>
                            <td><?= $a->adresse ?> </td>
                            <td> <?= $a->datenais  ?> </td>
                            <td><?= $a->lieunais ?> </td>
                            <td>
                                <!-- POUR appraution de button modifier (fa fa-eye) et supprimé (fa fa-trash) -->
                                <a href="?page=apprenant&type=edit&id" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
                                <a href=" ?page=apprenant&delete=<?= $c->id ?>  " class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>



                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    <?php endif; ?>
</div