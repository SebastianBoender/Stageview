<?php

if (!empty($_GET["ocity"] && $_GET["ostreet"] && $_GET["dcity"] && $_GET["dstreet"])) {

  $ocity = $_GET["ocity"];
  $ostreet = $_GET["ostreet"];
  $dcity = $_GET["dcity"];
  $dstreet = $_GET["dstreet"];

  $xmlDoc=new DOMDocument();

  $map_url = "https://maps.googleapis.com/maps/api/distancematrix/xml?origins=" .$ostreet. "+" .$ocity. "&destinations=" .$dcity. "+" .$dstreet. "&mode=car&language=nl-FR&key=AIzaSyAAS35ENab_Wc8EnFyT9Sg_sl8gN-JCNkw";

  $xmlDoc->load($map_url);

  $x=$xmlDoc->getElementsByTagName('distance')->item(0)->getElementsByTagName('text')->item(0);

  echo $x->textContent;

} else {

  echo 'Error parsing XML';

}

?>