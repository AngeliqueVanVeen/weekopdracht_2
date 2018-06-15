<?php

$blogtitel=$_REQUEST["blogtitel"];
$naam=$_REQUEST["naam"];
$blogtekst=$_REQUEST["blogtekst"];

echo $blogtitel . "<br>";
echo $naam . "<br>";
echo $blogtekst . "<br>";

// Open the file to get existing content
$current = file_get_contents('blogfile.txt');
// Append a new person to the file
$new = "<br>" . "<br>" . $blogtitel . "\n" . "<br>" . $naam . "\n" . "<br>" . $blogtekst . "\n" . "\n";
$current = $new . $current;
// Write the contents back to the file
file_put_contents('blogfile.txt', $current);

?>
