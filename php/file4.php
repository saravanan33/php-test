<?php
$myfile = fopen("new.txt", "a") or die("Unable to open file!");

$txt=fopen("webdictionary.txt","r");
fread($txt,filesize("webdictionary.txt"));
fwrite($myfile,$txt);
fclose($myfile);
?>