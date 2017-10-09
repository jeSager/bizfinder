<?php


// Load the xml file
$xml=simplexml_load_file("data.xml") or die("Error: Cannot create object");


// Add the new node to the file
$new=$xml->addChild("biz");


// Add children
$new->addChild("name",$_POST['nameinput']);
$new->addChild("phone",$_POST['phoneinput']);
$new->addChild("site",$_POST['siteinput']);
$new->addChild("mail",$_POST['mailinput']);
$new->addChild("street",$_POST['streetinput']);
$new->addChild("city",$_POST['cityinput']);
$new->addChild("state",$_POST['stateinput']);
$new->addChild("zip",$_POST['zipinput']);


// Save the file
$xml->asXml("data.xml");

usleep(20000);

// Back to index
header('Location: index.html');

?>
