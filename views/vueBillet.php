<?php $titre = "Mon Blog - " . $billet->getTitre(); ?>

<?php $this->titre = "Mon Blog - " . $billet->getTitre(); ?>

<article class="card">
    <header>
        <h1 class="titreBillet">
            <?= $billet->getTitre(); ?>
        </h1>
        <time><?= $billet->getDate(); ?></time>
    </header>
    <p>
        <?= $billet->getContenu(); ?>
    </p>
</article>

<div class="card card-comments mb-3 wow fadeIn">
    <div class="card-header font-weight-bold">Commentaire de l'article
        <?= $billet->getTitre(); ?>
    </div>
    <div class="card-body">

        <div class="media d-block d-md-flex mt-4">

            <div class="media-body text-center text-md-left ml-md-3 ml-0">



                <?php foreach ($commentaires as $commentaire): ?>
                <h5 class="mt-0 font-weight-bold">
                    <?= $commentaire['auteur'] ?> dit :
                </h5>
                <p>
                    <?= $commentaire['contenu'] ?>
                </p>
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
