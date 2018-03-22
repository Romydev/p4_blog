<?php $this->titre = "Jean Forteroche"; ?>

<head>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=8mg86dch52p0mt8p327zzy46juhtmj0hmdkpmdmfnr5dsld9"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            width: 1000,
            language_url: 'http://localhost/P3/Contenu/tinymce_4.6.2/tinymce/js/tinymce/langs/fr_FR.js'

        });

    </script>
</head>

<body>

    <section class=" card col-lg-offset-3">
        <div class="edit">
            <h3>Ecrire un nouvel épisode</h3>

            <form method="post" action="index.php?action=editer">
                <p>Titre de l'épisode : <input type="text" id="titre" name="titre" /></p>
                <br/>
                <textarea id="txtBillet" name="contenu" style="width:80%;height:350px;"></textarea><br/>
                <button type="submit" class="btn btn-default" value="Publier"><span class="fa fa-edit"><strong> Poster votre épisode </strong></span></button>
            </form>

        </div>
    </section>

    <br/>

    <div class="buttonUp">
        <a href="<?= " index.php?action=adminBillet " ?>" role="button" class="btn btn-primary btn-lg"><span class="fa fa-caret-left" aria-hidden="true">
            <strong> Retour vers aux articles</strong></span></a>

    </div>

</body>
