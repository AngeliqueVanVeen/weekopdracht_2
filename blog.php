<?php

$blogtitel1=$_REQUEST["blogtitel"];
$naam1=$_REQUEST["naam"];
$blogtekst1=$_REQUEST["blogtekst"];


echo $blogtitel1;
echo $naam1;
echo $blogtekst1;

$schrijfweg = fopen("blogfile.txt", "a") or die("Unable to open file!");
fwrite($schrijfweg, $blogtitel1 . "<br>" . $naam1 . "<br>" . $blogtekst1);

fclose($schrijfweg);

?>




<!-- fwrite($schrijfweg, $naam1 . " " . $blogtekst1); -->
