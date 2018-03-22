<?php $titre = "Mon Blog - " . $billet['titre']; ?>

<article class="card z-depth-5 ">
    <header>
        <h4 class="titreBillet center-align">
            <?= $billet['titre'] ?>
        </h4>
        <time> <?= $billet['date'] ?></time>
    </header>
    <p>
        <?= $billet['contenu'] ?>
    </p>
</article>

<div class="card card-comments mb-3 wow fadeIn z-depth-5  ">
    <h3 class="titreBillet center-align">Commentaire de l'article
        <?= $billet['titre'] ?>
    </h3>
    <div class="card-body">

        <div class="media d-block d-md-flex mt-4">

            <div class="media-body text-center text-md-left ml-md-3 ml-0">



                <?php foreach ($commentaires as $commentaire): ?>
                <div class="left-align com">
                    <p class="mt-0 font-weight-bold">
                        <?= $commentaire['com_auteur'] ?> dit :
                    </p>
                    <p>
                        <?= $commentaire['com_contenu'] ?>
                    </p>
                </div>

                <div class="col-lg-offset-10">
                    <div class="signal">
                        <form method="post" action="index.php?action=signalement" onclick="return(confirm('Êtes-vous sûr de vouloir signaler ce commentaire ?'))">
                            <input type="hidden" name="idComm" value="<?= $commentaire['com_id'] ?>" />
                            <input type="hidden" name="idBillet" value="<?= $billet['id'] ?>" />
                            <button type="submit" class="btn btn-dark btn-xs" title="Signaler"><span class="fa fa-bullhorn" aria-hidden="true"  ><strong> Signaler ce commentaire </strong></span></button>

                        </form>
                    </div>
                </div>
                <hr/>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3 wow fadeIn z-depth-5 ">
    <h3 class="titreBillet center-align">Ajouter un commentaire</h3>
    <div class="card-body">

        <!-- Default form reply -->
        <form method="post" action="index.php?action=commenter">

            <div class="form-control">
                <i class="fa fa-user-circle"></i>
                <input id="icon_prefix" id="auteur" name="auteur" type="text" class="validate">
                <label for="icon_prefix">Votre pseudo</label>
            </div>

            <div class="form-control">
                <i class="fa fa-edit"></i>
                <textarea id="icon_prefix2" name="contenu"></textarea>
                <label>Message</label>
            </div>

            <br>

            <input type="hidden" name="id" value="<?= $billet['id'] ?>" />


            <div class="text-center mt-4">
                <button class="btn btn-secondary btn-lg btn-block" type="submit">Commenter</button>
            </div>
        </form>
        <!-- Default form reply -->



    </div>
</div>
