<!DOCTYPE html>
<html>
<body>

<?php
ini_set("display_errors", 1);
trait message1 {
  public function msg1() {
    echo "OOP is fun! "; 
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!"; 
  }
}

class Welcome2 extends message2
 {
  use message1;
  public function m1()
  {

  }
}


$obj2 = new Welcome2();
$obj2->msg1();

?>
 
</body>
</html>