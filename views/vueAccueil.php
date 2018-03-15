<?php $this->titre = "Mon Blog"; ?>

<?php foreach ($billets as $billet): ?>

<article class="card">
    <header>
        <a href="<?= " index.php?action=billet&id=". $billet->getId()?>">
            <h1 class="card-title">
                <?= $billet->getTitre(); ?>
            </h1>
        </a>
        <time><?= $billet->getDate(); ?></time>
    </header>
    <p class="card-text">
        <?= $billet->getContenu(); ?>
    </p>
</article>

<?php endforeach; ?>
