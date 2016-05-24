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

  $regex = '~\A[1-9]\d{3} ?[a-zA-Z]{2}\z~';
  $radius = $_GET["radius"];


  $ozip = !empty($_GET['ozip']) ? htmlentities($_GET['ozip']) : '1234 AB';
  $valid = preg_match($regex, $ozip, $matches);

  if ($valid) {

      $city_req_sql = $link->prepare("SELECT * FROM books WHERE id = 4");
      $zipcode_req_sql = $link->prepare("SELECT * FROM zipcodes WHERE zipcode = $ozip");

      $city_req_sql->execute();
      $zipcode_req_sql->execute();

      $old_records_sql = $city_req_sql->fetchAll(\PDO::FETCH_ASSOC);
      $old_zip_records_sql = $zipcode_req_sql->fetchAll(\PDO::FETCH_ASSOC);

      if (empty($old_zip_records_sql)) {

      $xmlDoc=new DOMDocument();

            $map_url = "https://maps.googleapis.com/maps/api/geocode/xml?address=".$ozip."&key=AIzaSyAAS35ENab_Wc8EnFyT9Sg_sl8gN-JCNkw";

            $xmlDoc->load($map_url);

            $y=$xmlDoc->getElementsByTagName('location')->item(0)->getElementsByTagName('lat')->item(0);

            $x=$xmlDoc->getElementsByTagName('location')->item(0)->getElementsByTagName('lng')->item(0);

            $lat_new=$y->textContent;
            $long_new=$x->textContent;

            $insertion = $link->prepare("INSERT INTO zipcodes(zipcode, lat, long) VALUES(:zipcode, :lat, :long)");
            $insertion->execute(array(
              ':zipcode' => $ozip,
              ':lat' => $lat_new,
              ':long' => $long_new
            ));

            $statement = $link->prepare("INSERT INTO zipcodes(zipcode, lat, long) VALUES(:zipcode, :lat, :long)");
            $statement->execute(array(
                "zipcode" => "Bob",
                "lat" => "Desaunois",
                "long" => "18"
            ));

      foreach ($old_records_sql as $old):

            
            $lat_old = $old['lat'];
            $long_old = $old['long'];

            //arccosine formule om de afstand tussen de 2 co-ordinaten te berekenen
            $distance =( 6371 * acos((cos(deg2rad($lat_old)) ) * (cos(deg2rad($lat_new))) * (cos(deg2rad($long_new) - deg2rad($long_old)) )+ ((sin(deg2rad($lat_old))) * (sin(deg2rad($lat_new))))) );;
            $distance_meter = $distance*1000;
            print($distance_meter);

            if ($distance_meter <= $radius) {
                echo '<br/>';
                echo $old['compName'];
            }

      endforeach;
    }

  } else {
    echo 'Zipcode invalid';
  }

/*
if (!empty($_GET["ozip"]) && is_numeric($_GET["ozip"]) && !empty($_GET["radius"]) && is_numeric($_GET["radius"])) {

  $ozip = $_GET["ozip"];
  $radius = $_GET["radius"];

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

          echo '<br>';
          echo $companyname;
          echo " (" .$distance_km. " km)";

        } 

    endforeach;

  } else {

    foreach ($result as $row):

      $xmlDoc=new DOMDocument();

      $dcity = $row['city'];
      $dstreet = $row['street'];
      $company = $row['compName'];

      $company_sql = $link->prepare("SELECT company FROM distances WHERE company = $company");
      $company_sql->execute();

      $company_result = $company_sql->fetchAll(\PDO::FETCH_ASSOC);

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

      if ($data <= $radius){

        $distance_km = $data/1000;

        echo '<br>';
        echo $company;
        echo " (" .$distance_km. " km)";

    } 

      endforeach;

  }

} else {

  echo 'Error parsing XML';

}
*/
?>