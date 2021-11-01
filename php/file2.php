<!Doctype html>
<html>
    <head><title>file2 handling</title></head>
    <body> 
        <?php 
$myfile = fopen("css files/boot.css", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile))
 {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);        
        ?>
        </body></html>
