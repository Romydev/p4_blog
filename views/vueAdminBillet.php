<?php $this->titre = "Jean Forteroche"; ?>


<section class="card col-lg-offset-1 col-lg-12">
    <div>
        <h4>Articles</h4>

        <table class="table table-hover table-bordered mb-0">
            <thead class="mdb-color lighten-2">
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
                        <?= $billet['titre'] ?>
                    </td>

                    <td>
                        <?= $billet['date'] ?>
                    </td>
                    <td class="text-nowrap">

                        <form method="post" action="index.php?action=editeurModifBillet">
                            <input type="hidden" name="id" value="<?=$billet['id']?>" />
                            <button type="submit" class="btn btn-info btn-xs" title="Modifier"><span class="fa fa-edit" aria-hidden="true"> Modifier</span> 
                        </button>
                        </form>

                        <form method="post" action="index.php?action=deleteBillet" onclick="return(confirm('Êtes-vous sûr de vouloir supprimer cet épisode ?'))">
                            <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
                            <button type="submit" class="btn btn-danger btn-xs" title="Supprimer"><span class="fa fa-trash" aria-hidden="true"></span></button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div>
            <a href="index.php?action=editeur"><button type="button" class="btn btn-info"><i class="fa fa-plus-square"></i>  Ajouter un nouvel article</button></a>
            <br/>
        </div>
    </div>
</section>


<section class="card col-lg-offset-1 col-lg-12">

    <h4>Commentaires</h4>

    <table class="table table-hover table-bordered mb-0">
        <thead>
            <tr>
                <th>ID</th>
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
                    <?= $commentaire['com_id'] ?>
                </td>
                <td>
                    <?= $commentaire['COM_AUTEUR'] ?>
                </td>
                <td>
                    <?= $commentaire['com_contenu'] ?>
                </td>
                <td>
                    <?= $commentaire['com_date'] ?>
                </td>
                <td class="text-nowrap">

                    <form method="post" action="index.php?action=validComm">
                        <input type="hidden" name="id" value="<?php echo $commentaire['com_id']; ?>" />
                        <button type="submit" class="btn btn-info btn-xs" title="Valider"><span class="glyphicon glyphicon-edit"> Valider</span></button>
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
