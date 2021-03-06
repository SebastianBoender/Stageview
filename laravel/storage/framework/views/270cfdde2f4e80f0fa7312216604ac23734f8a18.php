




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

	<style type="text/css">
.form-group {
    margin-left: 25px;
    margin-right: 70px;
}

body
{
	background-color: #fff;
}

.company
{
	margin-top: 15px;
	display: inline-block;
}


.effect7
{
  	position:relative;       
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}
.effect7:before, .effect7:after
{
	content:"";
    position:absolute; 
    z-index:-1;
    -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
    -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
    box-shadow:0 0 20px rgba(0,0,0,0.8);
    top:0;
    bottom:0;
    left:10px;
    right:10px;
    -moz-border-radius:100px / 10px;
    border-radius:100px / 10px;
} 
.effect7:after
{
	right:10px; 
    left:auto;
    -webkit-transform:skew(8deg) rotate(3deg); 
       -moz-transform:skew(8deg) rotate(3deg);     
        -ms-transform:skew(8deg) rotate(3deg);     
         -o-transform:skew(8deg) rotate(3deg); 
            transform:skew(8deg) rotate(3deg);
}

.borderBottom
{
	border-bottom: 1px solid gray;
}


	</style>


    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="white typed">Zoek door onze database met bedrijven.</h1>
                <span class="typed-cursor">|</span>
                 <hr>
                <form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Postcode</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Postcode">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Tags</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Tags">
  </div>

  <div class="form-group">
    <label class="" for="exampleInputPassword3">Afstand</label>
    <select type="password" class="form-control" id="exampleInputPassword4" placeholder="Afstand">
    <option>5 km</option>
    <option>10 km</option>
    <option>25 km</option>
    <option>50 km+</option>
    </select>
  </div>



<br>
  <button type="submit" style="margin-top: 25px;" class="btn btn-primary">Zoeken</button>
</form>
            </div>
        </div>
        <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
            <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/Traffic-blurred2.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
    </header>


    <div class="container " style="background-color: #ffffff;">
    	<div class=col-md-3>
    		<h3>Filter resultaten</h3>

    		<div class="filterBlock">
    			<h4 class="borderBottom">Locatie</h4>
    			<a href="#">Amtserdam(87)</a><br>
    			<a href="#">Rotterdam(63)</a><br>
    			<a href="#">Utrecht(37)</a><br>
    			<a href="#">Den Haag(18)</a><br>
    			<a href="#">Breda(29)</a><br>
    		</div>

    		<div class="filterBlock">
    			<h4 class="borderBottom">Tags</h4>
    			<a href="#">PHP(98)</a><br>
    			<a href="#">C#(23)</a><br>
    			<a href="#">CSS(96)</a><br>
    			<a href="#">Ruby(12)</a><br>
    			<a href="#">ASP.NET(8)</a><br>
    		</div>

    		<div class="filterBlock">
    			<h4 class="borderBottom">Specialisatie</h4>
    			<a href="#">Web(97)</a><br>
    			<a href="#">App(38)</a><br>
    			<a href="#">Software(17)</a><br>
    			<a href="#">Automatisering(11)</a><br>
    			<a href="#">Crossmedia(8)</a><br>
    		</div>
    	</div>

    	<div class="col-md-9">






<?php foreach($books as $book): ?>


<a <a href="<?php echo e(url('books',$book->id)); ?>">
    		<div class="company">
    			
	    			<div class="col-md-3">
	    				<img s<img src="<?php echo e(asset('img/'.$book->image.'')); ?>" class="img-responsive" />
	    			</div>

	    			<div class="col-md-9">
	    				<h2><?php echo e($book->compName); ?></h2>
	    				<p><?php echo e($book->title); ?></p>
	    				<p><span style="color: #000;">Tags:</span> <a href="#">PHP</a> , <a href="#">HTML</a> , <a href="#">CSS</a></p>
	    			</div>
	    		
    		</div>
</a>


<?php endforeach; ?>


<div class="pull-right">
  <ul class="pagination pagination-sm">
    <li class="page-item">
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
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


<style type="text/css">body{background-color: #fff;}</style>
</html>



