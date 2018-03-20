<?php $this->titre = "Mon Blog - " . $billet['titre']; ?>

<article class="card">
    <header>
        <h1 class="titreBillet">
            <?= $billet['titre'] ?>
        </h1>
        <time> <?= $billet['date'] ?></time>
    </header>
    <p>
        <?= $billet['contenu'] ?>
    </p>
</article>

<div class="card card-comments mb-3 wow fadeIn">
    <div class="card-header font-weight-bold">Commentaire de l'article
        <?= $billet['titre'] ?>
    </div>
    <div class="card-body">

        <div class="media d-block d-md-flex mt-4">

            <div class="media-body text-center text-md-left ml-md-3 ml-0">



                <?php foreach ($commentaires as $commentaire): ?>
                <h5 class="mt-0 font-weight-bold">
                    <?= $commentaire['com_auteur'] ?> dit :
                </h5>
                <p>
                    <?= $commentaire['com_contenu'] ?>
                </p>

                <div class="col-lg-offset-10">
                    <div class="signal">
                        <form method="post" action="index.php?action=signalement" onclick="return(confirm('Êtes-vous sûr de vouloir signaler ce commentaire ?'))">
                            <input type="hidden" name="idComm" value="<?= $commentaire['com_id'] ?>" />
                            <input type="hidden" name="idBillet" value="<?= $billet['id'] ?>" />
                            <button type="submit" class="btn btn-danger btn-xs" title="Signaler"><span class="glyphicon glyphicon-alert"><strong> Signaler ce commentaire </strong></span></button>
                        </form>
                    </div>
                </div>
                <hr/>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3 wow fadeIn">
    <div class="card-header font-weight-bold">Ajouter un commentaire</div>
    <div class="card-body">

        <!-- Default form reply -->
        <form method="post" action="index.php?action=commenter">

            <!-- Comment -->
            <div class="form-group">
                <label for="replyFormComment">Votre commentaire</label>
                <textarea class="form-control" id="txtCommentaire" name="contenu" rows="5" required></textarea>
            </div>

            <!-- Name -->
            <label for="replyFormName">Votre pseudo</label>
            <input type="text" id="auteur" required name="auteur" class="form-control">

            <br>

            <input type="hidden" name="id" value="<?= $billet['id'] ?>" />


            <div class="text-center mt-4">
                <button class="btn btn-info btn-md" type="submit">Commenter</button>
            </div>
        </form>
        <!-- Default form reply -->



    </div>
</div>
