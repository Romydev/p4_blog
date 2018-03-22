<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>
        <?= $titre ?>
    </title>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="icon" href="vendor/img/fav.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- style -->
    <link href="vendor/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/css/component.css" rel="stylesheet">
    <!--  <link href="vendor/css/mdb.min.css" rel="stylesheet"> -->
    <!-- custom styles  -->
    <link href="vendor/css/style.css" rel="stylesheet">
</head>

<body class="caselandingpage">

    <!-- nav-wrapper -->
    <nav id="nav-wrapper">

        <!-- navbar -->
        <div class="navbar">

            <!-- container -->
            <div class="menu-padd">
                <!-- row -->
                <div class="row">

                    <!-- col-md-12 -->
                    <div class="col-md-12">

                        <!-- navbar-header -->
                        <div class="navbar-header">

                            <!-- Mobile Menu -->
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                    <i class="fa fa-bars"></i>
                                </button>
                            <!-- / mobile Menu -->

                            <!-- logo -->
                            <a href="index.php" class="navbar-brand" data-scroll>
                                <!--<h3 class="logo-text">One</h3>-->
                                <img src="vendor/img/logo.png" alt="Logo" />
                            </a>
                            <!-- /logo -->

                        </div>
                        <!-- /navbar-header -->

                        <!-- navbar-collapse -->
                        <div class="navbar-collapse collapse">

                            <!-- nav -->
                            <ul class="nav navbar-nav navbar-right">

                                <!-- Home -->
                                <li>
                                    <a href="index.php" data-scroll class="scrollto">
                                          Accueil
                                        </a>


                                </li>

                                <li>
                                    <a href="http://p4blog/index.php?action=adminBillet">Bio </a>


                                </li>
                                <li>

                                    <a href="index.php?action=contact">Contact</a>
                                </li>

                            </ul>
                            <!-- /nav -->

                        </div>

                    </div>
                    <!-- /col-md-12 -->

                </div>
                <!-- /row -->


            </div>
            <!-- /container -->

        </div>
        <!-- /navbar -->
    </nav>
    <!-- /nav-wrapper -->



    <div class="blog-banner">
        <h1>Billet simple pour l'Alaska</h1>
        <div class="overlay-aboutpage"></div>

    </div>

    <div class="col-md-12 no-padding caselamding-content ">
        <div class="container">
            <div class="col-md-12">
                <?= $contenu ?>

            </div>



            <div class="clearfix"></div>

        </div>
    </div>
    <!-- Footer Start -->
    <div id="footer-sec" class="col-md-12 footer-bg">
        <div class="container">
            <footer class="footer">
                <div class="col-lg-3">
                    <a href="index.php?action=formulaire"><button type="button" class="btn btn-success" title="Connexion"><span class="glyphicon glyphicon-log-in"></span> Connexion</button></a>
                </div>

                <div class="col-xs-6 col-sm-3 col-md-3 wow fadeInUp">
                    <div class="row">

                    </div>
                </div>

            </footer>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-ms-12 copy-bg">
        <div class="container">
            <div class="">
                <a class="copy-text wow fadeInUp" href="http://multia.in/">
                    <p class="copytxt">2017 Copyright</p>
                </a>

            </div>
        </div>
    </div>
    <!-- Footer End -->

    <script type="text/javascript" src="vendor/js/jquery.js"></script>
    <script type="text/javascript" src="vendor/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="vendor/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendor/js/smooth-scroll.min.js"></script>
    <script type="text/javascript" src="vendor/js/wow.min.js"></script>
    <script type="text/javascript" src="vendor/js/owl.carousel.js"></script>
    <script type="text/javascript" src="vendor/js/contact-me.js"></script>
    <script type="text/javascript" src="vendor/js/newsletter.js"></script>
    <script type="text/javascript" src="vendor/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="vendor/js/init.js"></script>
</body>

</html>
