




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stageview | Jij zoekt een stage, wij informeren</title>
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="../img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="../img/favicons/manifest.json">
    <link rel="shortcut icon" href="../img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="../img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/owl.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts/eleganticons/et-icons.css">
    <link rel="stylesheet" type="text/css" href="../css/cardio.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Stageview/css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/fix.css">
</head>

<body>
    <div class="preloader">
        <img src="../img/loader.gif" alt="Preloader image">
    </div>
  <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="../img/logo.png"  alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-nav">
                    <li><a href="/Stageview/companies.php">Bedrijven</a></li>
                    <li><a href="#services">Contact</a></li>
                    <li><a href="#pricing">FAQ</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modal2">Log in</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Registreer</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div style="margin-top: 100px;" class="container">

        <div class="container">

        <div class="col-md-12">
            <div class="col-md-3"> <img src="<?php echo e(asset('img/'.$book->image.'')); ?>" class="img-responsive"></div>
            <div class="col-md-9"><h1 style="font-weight: 100; margin-top: 10%;"><?php echo e($book->compName); ?></h1></div>
        </div>

        <div class="col-md-12">
        <div class="col-md-9 pull-right">
            <h2>Over het bedrijf</h2>
            <p><?php echo e($book->title); ?></p>

            <h2>Review</h2>
            <p>
                <?php echo e($book->review); ?>

            </p>

            <h2>Contact</h2>
            <p>Contactpersoon: <?php echo e($book->author); ?></p>
            <p>Email: <?php echo e($book->publisher); ?></p>


        </div>
        </div>

        </div>


    </div>
    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center-mobile">
                    <h3 class="white">Vind nu een passende stage!</h3>
                    <h5 class="light regular light-white">Wij zijn hier om je te helpen.</h5>
                    <a href="#" class="btn btn-blue ripple trial-button">Vacatures</a>
                </div>
                <div class="col-sm-6 text-center-mobile">
                    <h3 class="white">Contact<span class="open-blink"></span></h3>
                    <div class="row opening-hours">
                        <div class="col-sm-6 text-center-mobile">
                            <h5 class="light-white light">Mail</h5>
                            <h3 class="regular white">info@stageview.nl</h3>
                        </div>
                        <div class="col-sm-6 text-center-mobile">
                            <h5 class="light-white light">Contact</h5>
                            <h3 class="regular white"><a href="#">Klik hier</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bottom-footer text-center-mobile">
                <div class="col-sm-8">
                    <p>&copy; 2016 All Rights Reserved. Bergh&Boender dev.</p>
                </div>
                <div class="col-sm-4 text-right text-center-mobile">
                    <ul class="social-footer">
                        <li><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Holder for mobile navigation -->
    <div class="mobile-nav">
        <ul>
        </ul>
        <a href="#" class="close-link"><i class="arrow_up"></i></a>
    </div>
    <!-- Scripts -->
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/typewriter.js"></script>
    <script src="../js/jquery.onepagenav.js"></script>
    <script src="../js/main.js"></script>
</body>


<style type="text/css">body{background-color: #fff;}

.original{

    background-color: #2C2B44;
    margin-top: -50px;
    padding: 15px;
    }</style>
</html>
