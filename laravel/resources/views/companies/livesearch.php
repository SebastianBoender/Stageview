<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

$q=$_GET["q"];

if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {  

      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a style='color:white; text-decoration: none; font-size:15px;     display: inline-block;
    width: 100%; background-color: #36333D;
    padding: 5px;' href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "#results' >" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {
          $hint=$hint . "<br /><a style='color:white; text-decoration: none; font-size: 15px;     display: inline-block;
    width: 100%;     background-color: #36333D;
    padding: 5px;' href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "#results' >" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

if ($hint=="") {
  $response="No suggestions";
} else {
  $response=$hint;
}

echo $response;
?>