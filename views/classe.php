<div class="container mt-4">
    <div class="container card col-md-10">
        <div class="card-header bg-info">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="text-white ">Liste des classes</h3>
                </div>
                <div class="col-md-2 text-right">
                    <a href="?page=classe&type=add" class=" btn  btn-warning">Ajouter</a>

                </div>
            </div>
        </div>
        <div class="card-boby"></div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Tailler</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classe as $c) : ?>
                    <tr>
                        <td><?= $c->nom ?></td>
                        <td><?= $c->taille ?></td>
                        <td> 
                            <a href="?page=classe&type=edit&id=<?= $c->id ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="?page=classe&delete=<?= $c->id ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>