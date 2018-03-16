<?php $this->titre = "Jean Forteroche"; ?>

<section class="col-lg-offset-1 col-lg-10">
    <table border=6 cellspacing=10 cellpadding=10 width=100%>
        <thead>
            <th>ID</th>
            <th>Titre</th>
            <th>Date de publication</th>
            <th>Modification</th>
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
                <td>
                    <form method="post" action="index.php?action=editeurModifBillet">
                        <input type="hidden" name="id" value="<?php echo $billet['id']; ?>" />
                        <button type="submit" class="btn btn-info btn-xs" title="Modifier"><span class="glyphicon glyphicon-edit"> Modifier</span></button>
                    </form>
                    --
                    <form method="post" action="index.php?action=deleteBillet" onclick="return(confirm('Êtes-vous sûr de vouloir supprimer cet épisode ?'))">
                        <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
                        <button type="submit" class="btn btn-danger btn-xs" title="Supprimer"><span class="glyphicon glyphicon-trash"></span></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table><br>


    <div class="col-lg-offset-5">
        <a href="index.php?action=editeur"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Ajouter un nouvel article</button></a>
    </div>

</section>
