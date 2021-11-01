<!Doctype html>
<html>
    <head><title> All file handling</title></head>
    <body> 
        <?php 
        echo readfile("alphabets.txt");
        echo "<br><br>";
        

$myfile = fopen("webdictionary.txt", "r") or die ("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
echo "<br><br>";


$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
echo "<br><br>";


$myfile=fopen("webdictionary.txt","r") or  die ("Unable to open file!");
echo fgetc($myfile);
fclose($myfile);

$myfile = fopen("colum.html", "r") or die ("Unable to open file!");
echo fread($myfile,filesize("colum.html"));
fclose($myfile);
echo "<br><br>";

$myfile = fopen("image.html", "r") or die ("Unable to open file!");
echo fread($myfile,filesize("image.html"));
fclose($myfile);
echo "<br><br>";



        
        
        ?>
        </body></html>