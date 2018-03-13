<?php $this->titre = "Mon Blog"; ?>

<?php foreach ($billets as $billet):
    ?>
<article class="card">
    <header>
        <a href="<?= " index.php?action=billet&id=" . $billet['id'] ?>">
            <h1 class="card-title">
                <?= $billet['titre'] ?>
            </h1>
        </a>
        <time><?= $billet['date'] ?></time>
    </header>
    <p class="card-text">
        <?= $billet['contenu'] ?>
    </p>
</article>

<?php endforeach; ?>
