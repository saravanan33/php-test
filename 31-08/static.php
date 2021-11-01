<!DOCTYPE html>
<html>
<body>

<?php
ini_set("display_errors", 1);
class greeting {
  public function welcome() {
    echo "Hello World!<br>";
  }
  public function __construct() {
    self::welcome();
  }
}

$a=new greeting();

$b=new greeting();
$a->welcome();


?>
 
</body>
</html>
