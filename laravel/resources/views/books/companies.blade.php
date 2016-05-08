

<?php

$q_string = Request::input('tags');
$d_string = Request::input('distance');
$z_string = Request::input('ozip');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stageview | Jij zoekt een stage, wij informeren</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
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

    <script>
        function showResult(str) {
          if (str.length==0) { 
            document.getElementById("livesearch").innerHTML="";
            $("#livesearch").removeClass("hintBox");
            return;
          }
          if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
          } else {  // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
              document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
              $("#livesearch").addClass('hintBox');
            }
          }
          xmlhttp.open("GET","livesearch.php?q="+str,true);
          xmlhttp.send();
        }
    </script>

    <style type="text/css">
/*    .hintBox
    {
        border-right: 1px solid white;
        border-left: 1px solid white;
        border-bottom: 1px solid white;
        display: inline-block;
        float: left;
    }*/

    .hintBox{
        width: 100%;
        display: inline-block;
    }
</style>
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
                        @if (Auth::guest())
                            <li><a href="#" data-toggle="modal" data-target="#modal2">Log in</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Registreer</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a>{{ Auth::user()->role }}</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
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


#livesearch a:hover{
    background-color: #CCCCCC!important;
    color: #000 !important;
}

	</style>


    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="white typed">Zoek door onze database met bedrijven.</h1>
                <span class="typed-cursor">|</span>
                 <hr>
                
                {!! Form::open(['url' => 'books', 'method' => 'get', 'class' => 'form-inline']) !!}
                <div class="form-group">
                {!! Form::label('Postcode', 'Postcode:',['class' => 'sr-only']) !!}
                @if(!is_null($z_string))
                {!! Form::text('ozip',$z_string,['class'=>'form-control', 'placeholder'=>'Postcode', 'id'=>'exampleInputEmail3']) !!}
                @else
                {!! Form::text('ozip',null,['class'=>'form-control', 'placeholder'=>'Postcode', 'id'=>'exampleInputEmail3']) !!}
                @endif
                </div>
                <div class="form-group hintBoxMother" style="position: relative;">
                {!! Form::label('Tags', 'Tags:',['class' => 'sr-only']) !!}
                @if(!is_null($q_string))
                {!! Form::text('tags',$q_string,['class'=>'form-control', 'placeholder'=>'Tags', 'id'=>'exampleInputPassword3', 'onkeyup'=>'showResult(this.value)', 'autocomplete'=>'off']) !!}
                @else
                {!! Form::text('tags',null,['class'=>'form-control', 'placeholder'=>'Tags', 'id'=>'exampleInputPassword3', 'onkeyup'=>'showResult(this.value)', 'autocomplete'=>'off']) !!}
                @endif
                <div id="livesearch" style="position: absolute; color: white; left: 0;"></div>
                </div>

                <div class="form-group">
                    <label class="" for="exampleInputPassword3">Afstand</label>
                    <select name="distance" type="text" class="form-control" id="exampleInputPassword4" placeholder="Afstand">
                    <option value="5000">5 km</option>
                    <option value="10000">10 km</option>
                    <option value="25000">25 km</option>
                    <option value="50000">50 km+</option>
                    </select>
                </div>



          <br>

          {!! Form::submit('Zoeken', ['class' => 'btn btn-primary', 'style' => 'margin-top: 60px']) !!}
          {!! Form::close() !!}

          </div>
        </div>
        <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
            <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/Traffic-blurred2.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
    </header>

<section id="results">
    <div class="container " style="background-color: #ffffff;">
    	<div class=col-md-3>
    		<h3>Filter resultaten</h3>

    		<div class="filterBlock">
    			<h4 class="borderBottom">Locatie</h4>
    			<a href="?plaats=amsterdam#results">Amsterdam(87)</a><br>
    			<a href="?plaats=rotterdam#results">Rotterdam(63)</a><br>
    			<a href="?plaats=utrecht#results">Utrecht(37)</a><br>
    			<a href="?plaats=den haag#results">Den Haag(18)</a><br>
    			<a href="?plaats=breda#results">Breda(29)</a><br>
    		</div>

    		<div class="filterBlock">
    			<h4 class="borderBottom">Tags</h4>
    			<a href="?tags=PHP#results">PHP(98)</a><br>
                <a href="?tags=HTML5#results">HTML5(102)</a><br>
    			<a href="?tags=Csharp#results">C#(23)</a><br>
    			<a href="?tags=CSS#results">CSS(96)</a><br>
    			<a href="?tags=Ruby#results">Ruby(12)</a><br>
    			<a href="?tags=ASP#results">ASP.NET(8)</a><br>
                <a href="/books#results">Show all</a><br>
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


@if(!is_null($d_string))

<?php

try {
  $dbhost = "127.0.0.1";
  $dbname = "stageview";
  $dbusername = "root";
  $dbpassword = "";

  $link = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbusername,$dbpassword);
} catch (PDOException $e) {
  print $e->getMessage();
}


if (!empty($_GET["ozip"]) && is_numeric($_GET["ozip"]) && !empty($_GET["distance"]) && is_numeric($_GET["distance"])) {

  $ozip = $_GET["ozip"];
  $radius = $_GET["distance"];

  $radius_km = $radius/1000;

  $city_req_sql = $link->prepare("SELECT city,street,compName FROM books");
  $old_records_sql = $link->prepare("SELECT * FROM distances WHERE zipcode = $ozip");
  $count_companies = $link->prepare("SELECT COUNT(compName) AS counted FROM books");
  $count_zip = $link->prepare("SELECT COUNT(zipcode) AS counted FROM distances where zipcode = $ozip");

  $city_req_sql->execute();
  $old_records_sql->execute();
  $count_companies->execute();
  $count_zip->execute();

  $result = $city_req_sql->fetchAll(\PDO::FETCH_ASSOC);
  $old_results = $old_records_sql->fetchAll(\PDO::FETCH_ASSOC);
  
  $count_zip_final = $count_zip->fetchAll(\PDO::FETCH_ASSOC);
  $count_company_final = $count_companies->fetchAll(\PDO::FETCH_ASSOC);


  echo 'Bedrijven in een straal van ' .$radius_km. ' km:';
  echo '<br>';

  if ($count_company_final[0]["counted"] == $count_zip_final[0]["counted"]) {

    foreach ($old_results as $old_result):

      $distance_old = $old_result['distance'];
      $companyname = $old_result['company'];


        if ($distance_old <= $radius){

          $distance_km = $distance_old/1000;

          echo '<a <a href="'.$companyname.'">
                <div class="company">
                    
                        <div class="col-md-3">
                            <img src="'.$companyname.'" class="img-responsive" />
                        </div>

                        <div class="col-md-9">
                            <h2>'.$companyname.'</h2>
                            <p>'.$companyname.' ('.$distance_km.' km)</p>
                            <span style="color: #000;">Tags:</span> 

        

                        </div>
                    
                </div>
                </a><br><br>';
        } 

    endforeach;

  } else {

    foreach ($result as $row):

      $xmlDoc=new DOMDocument();

      $dcity = $row['city'];
      $dstreet = $row['street'];
      $company = $row['compName'];
      $deleted = $row['deleted_at'];
      //$company_id = $row['id'];
      //$company_image = $row['image'];

      $company_sql = $link->prepare("SELECT company FROM distances WHERE company = $company");
      $company_sql->execute();

      $company_result = $company_sql->fetchAll(\PDO::FETCH_ASSOC);

      if (empty($deleted)) {
        if (empty($company_result)) {

          $map_url = "https://maps.googleapis.com/maps/api/distancematrix/xml?origins=" .$ozip. "+netherlands&destinations=" .$dcity. "+" .$dstreet. "&mode=car&language=nl-FR&key=AIzaSyAAS35ENab_Wc8EnFyT9Sg_sl8gN-JCNkw";

          $xmlDoc->load($map_url);

          $y=$xmlDoc->getElementsByTagName('status')->item(0);

          $x=$xmlDoc->getElementsByTagName('distance')->item(0)->getElementsByTagName('value')->item(0);

          $data=$x->textContent;

          $statement = $link->prepare("INSERT INTO distances(zipcode, distance, company) VALUES(:zipcode, :distance, :company)");
          $statement->execute(array(
            "zipcode" => $ozip,
            "distance" => $data,
            "company" => $company
          ));

        }
      }

      if ($data <= $radius){

        $distance_km = $data/1000;

        echo '<br>';
        echo $company;
        echo " (" .$distance_km. " km)";

       

        echo '<a <a href="">
            <div class="company">
                
                    <div class="col-md-3">
                        <img src="placeholderCompany.jpg" class="img-responsive" />
                    </div>

                    <div class="col-md-9">
                        <h2>'.$company.'</h2>
                        <p>'.$company.'</p>
                        <span style="color: #000;">Tags:</span> 

    

                    </div>
                
            </div>
</a>';

    } 

      endforeach;

  }

} else {

  echo 'Error parsing XML';

}

?>

@endif



@if(is_null($q_string))


@foreach ($books as $book)

<?php
$tags_dtb = $book['tags'];

$tags = explode(',', $tags_dtb);

?>

<a <a href="{{url('books',$book->id)}}">
    		<div class="company">
    			
	    			<div class="col-md-3">
	    				<img <img src="{{asset('img/'.$book->image.'')}}" class="img-responsive" />
	    			</div>

	    			<div class="col-md-9">
	    				<h2>{{ $book->compName }}</h2>
	    				<p>{{ $book->title }}</p>
                        <span style="color: #000;">Tags:</span> 
                            
                            <?php
                            foreach ($tags as $tag):
                            
    	    				echo '<a href="?tags='.$tag.'">' .$tag. '</a>, ';

                            
                            endforeach;
                            ?>
                            

	    			</div>
	    		
    		</div>
</a>


@endforeach


<?php
    $book3 = DB::table('books')->where('tags', 'LIKE', "%".$q_string."%")->get();
?>


@if(empty($book3))
    <h2>Helaas zijn er geen bedrijven die aan uw zoek creteria voldoen..</h2>

@else

@foreach($book3 as $book2)

<a <a href="{{url('books',$book2->id)}}">
            <div class="company">
                
                    <div class="col-md-3">
                        <img s<img src="{{asset('img/'.$book2->image.'')}}" class="img-responsive" />
                    </div>

                    <div class="col-md-9">
                        <h2>{{ $book2->compName }}</h2>
                        <p>{{ $book2->title }}</p>
                        <span style="color: #000;">Tags:</span> 

    

                    </div>
                
            </div>
</a>

@endforeach

@endif

@endif



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
</section>



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
<!--    <script src="../js/jquery-1.11.1.min.js"></script> -->
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/typewriter.js"></script>
    <script src="../js/jquery.onepagenav.js"></script>
    <script src="../js/main.js"></script>
</body>


<style type="text/css">body{background-color: #fff;}</style>
</html>



@endif