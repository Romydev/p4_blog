<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?= $title ?>
    </title>
    <meta name="description" content="<?= $description ?>" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="views/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="views/css/style.css" rel="stylesheet">
</head>

<body>
    <div id="global">
        <header>

            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
                <div class="container">

                    <!-- Brand -->
                    <a href="index.php" class="brand-logo">Jean Forteroche</a>

                    <!-- Collapse -->


                    <!-- Links -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Left -->
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="article" target="_blank">Bio </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="article" target="_blank">Episodes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="views/vueContact.php" target="_blank">Contact</a>
                            </li>
                        </ul>

                        <!-- Right -->
                        <ul class="navbar-nav nav-flex-icons">
                            <li class="nav-item">
                                <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                            </li>
                            <li class="nav-item">
                                <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect" target="_blank">
                                <i class="fa fa-github mr-2"></i>MDB GitHub
                            </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </nav>
            <!-- Navbar -->

        </header>

        <main class="mt-5 pt-5">
            <div class="container">

                <!--Section: Jumbotron-->
                <section class="card wow fadeIn" style="background-image: url(http://s1.1zoom.me/b5050/907/Mountains_Scenery_Lake_469445_2048x1152.jpg);">

                    <!-- Content -->
                    <div class="card-body text-white text-center py-5 px-5 my-5">

                        <h1 class="mb-4">
                            <strong>Learn Bootstrap 4 with MDB</strong>
                        </h1>
                        <p>
                            <strong>Best & free guide of responsive web design</strong>
                        </p>
                        <p class="mb-4">
                            <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written
                            versions available. Create your own, stunning website.</strong>
                        </p>
                        <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
                        <i class="fa fa-graduation-cap ml-2"></i>
                    </a>

                    </div>
                    <!-- Content -->
                </section>
                <!--Section: Jumbotron-->

                <br/>


                <!--Section: Cards-->
                <section class="text-center">


                    <div class="row mb-12 wow fadeIn">

                        <!--Grid column-->
                        <div class="col-lg-12 col-md-12 mb-4">


                            <?= $contenu ?>


                        </div>
                    </div>


                </section>
            </div>
        </main>
        <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">

            <!--Call to action-->

            <!--/.Call to action-->

            <hr class="my-4">

            <!-- Social icons -->
            <div class="pb-4">
                <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

                <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>

                <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
            </a>

                <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>

                <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fa fa-dribbble mr-3"></i>
            </a>

                <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fa fa-pinterest mr-3"></i>
            </a>

                <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fa fa-github mr-3"></i>
            </a>

                <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fa fa-codepen mr-3"></i>
            </a>
            </div>
            <!-- Social icons -->

            <!--Copyright-->
            <div class="footer-copyright py-3">
                © 2018 Copyright:
                <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
            </div>
            <!--/.Copyright-->

        </footer>
    </div>
    <!-- #global -->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="views/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="views/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="views/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="views/js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();

    </script>
</body>

</html>
