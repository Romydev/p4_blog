<?php $this->titre = "Mon Blog"; ?>

<?php foreach ($billets as $billet):
    ?>
<article class="col-md-12 card z-depth-5 ">
    <a href="<?= " index.php?action=billet&id=" . $billet['id'] ?>">
        <h1 class="card-title">
            <?= $billet['titre'] ?>
        </h1>
    </a>
    <p style="line-height: 1.3;">Publié le <time><?= $billet['date'] ?></time></p>
    <div class="highlights_txt">
        <p>
            <?= $billet['contenu'] ?>
        </p>
    </div>

</article>
<hr />

<?php endforeach; ?>
