<!Doctype html>
<html>
    <head><title>file2 handling</title></head>
    <body> 
        <?php 
        $x=fopen("css files/boot.css","r") or die ("unable to open file");
        while(!feof($x))
        {
        echo fgetc($x)."<br>";
    }
    fclose($x);
    ?>