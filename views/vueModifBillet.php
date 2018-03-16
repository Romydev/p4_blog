<?php $this->titre = "Jean Forteroche"; ?>

<head>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=plr4j6thzz7be0gg07sn7v9bamkgjmd6jte6e5eztyy4ufnr"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            width: 1000,
            language_url: 'http://localhost/P3/Contenu/tinymce_4.6.2/tinymce/js/tinymce/langs/fr_FR.js'

        });

    </script>
</head>

<body>

    <section class="col-lg-offset-3">
        <div class="edit">
            <h3>Modifier l'article</h3>

            <form method="post" action="index.php?action=modifBillet">
                <input type="hidden" name="id" value="<?= $modifBillet['id'] ?>">
                <p>Titre : <input type="text" id="titre" name="titre" value="<?= $modifBillet['titre'] ?>" />
                </p>
                <br/>
                <textarea id="txtBillet" name="contenu" style="width:80%;height:350px;"><?= $modifBillet['contenu'] ?></textarea><br/>
                <button type="submit" class="btn btn-default" value="Enregistrer la modification"><strong>Enregistrer la modification </strong><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
            </form>

        </div>
    </section>

    <br/>

    <div class="buttonUp">
        <a href="<?= " index.php?action=adminBillet " ?>" role="button" class="btn btn-primary btn-lg">
            Retour vers la page Article
        </a>
    </div>

</body>
