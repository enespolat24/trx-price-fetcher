<?php 

// default timezone
date_default_timezone_set('TURKEY');
$log = $_POST["receivedInput"];
$oldText = file_get_contents("log.txt");
$myfile = fopen("log.txt", "w") or die("Unable to open file!");
$txt = $oldText . date("d.m.y H:i") . ": $log ₺\n";

fwrite($myfile, $txt);
fclose($myfile);

header("Location:/");
