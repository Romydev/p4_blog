<?php $this->titre = "Jean Forteroche"; ?>
<div class="col-lg-offset-1 col-lg-12 ">
    <p>Articles</p>
</div>

<section class="col-lg-offset-1 col-lg-12">

    <table class="table table-hover table-bordered mb-0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Date</th>
                <th class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($billets as $billet):?>
            <tr>
                <td>
                    <?= $billet['id'] ?>
                </td>
                <td>
                    <?= $billet['date'] ?>
                </td>
                <td>
                    <?= $billet['titre'] ?>
                </td>
                <td class="text-nowrap">

                    <form method="post" action="index.php?action=editeurModifBillet">
                        <input type="hidden" name="id" value="<?php echo $billet['id']; ?>" />
                        <button type="submit" class="btn btn-info btn-xs" title="Modifier"><span class="glyphicon glyphicon-edit"> Modifier</span></button>
                    </form>

                    <form method="post" action="index.php?action=deleteBillet" onclick="return(confirm('Êtes-vous sûr de vouloir supprimer cet épisode ?'))">
                        <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
                        <button type="submit" class="btn btn-danger btn-xs" title="Supprimer"><span class="glyphicon glyphicon-trash"></span></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <div class="col-lg-offset-5">
        <a href="index.php?action=editeur"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Ajouter un nouvel article</button></a>
    </div>

</section>
<div class="col-lg-offset-1 col-lg-12 ">
    <p>Commentaires</p>
</div>

<section class="col-lg-offset-1 col-lg-12">
    <table class="table table-hover table-bordered mb-0">
        <thead>
            <tr>
                <th>ID</th>
                <th>titre</th>
                <th>Auteur</th>
                <th>Contenu</th>
                <th>Date</th>
                <th class="text-nowrap">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($commentaires as $commentaire): ?>
            <tr>
                <td>
                    <?= $commentaire['id'] ?>
                </td>
                <td>
                    <?= $commentaire['titre'] ?>
                </td>
                <td>
                    <?= $commentaire['auteur'] ?>
                </td>
                <td>
                    <?= $commentaire['contenu'] ?>
                </td>
                <td>
                    <?= $commentaire['date'] ?>
                </td>
                <td class="text-nowrap">

                    <form method="post" action="index.php?action=editeurModifComm">
                        <input type="hidden" name="id" value="<?php echo $commentaire['id']; ?>" />
                        <button type="submit" class="btn btn-info btn-xs" title="Modifier"><span class="glyphicon glyphicon-edit"> Modifier</span></button>
                    </form>

                    <form method="post" action="index.php?action=deleteComm" onclick="return(confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?'))">
                        <input type="hidden" name="id" value="<?= $commentaire['com_id'] ?>" />
                        <button type="submit" class="btn btn-danger btn-xs" title="Supprimer"><span class="glyphicon glyphicon-trash"></span></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table><br>
</section>
