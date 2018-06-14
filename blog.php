<?php

$blogtitel=$_REQUEST["blogtitel"];
$naam=$_REQUEST["naam"];
$blogtekst=$_REQUEST["blogtekst"];


echo $blogtitel . "<br>";
echo $naam . "<br>";
echo $blogtekst . "<br>";

$schrijfweg = fopen("blogfile.txt", "a") or die("Unable to open file!");
fwrite($schrijfweg, "<br>" . "<br>" . $blogtitel . "\n" . "<br>" . $naam . "\n" . "<br>" . $blogtekst . "\n" . "\n");
fclose($schrijfweg);

?>
