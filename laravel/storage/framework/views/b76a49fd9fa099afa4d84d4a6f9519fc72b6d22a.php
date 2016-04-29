<?php

$xmlDoc=new DOMDocument();
$xmlDoc->load("location.xml");

$x=$xmlDoc->getElementsByTagName('distance')->item(0)->getElementsByTagName('text')->item(0);

echo $x->textContent;

?>