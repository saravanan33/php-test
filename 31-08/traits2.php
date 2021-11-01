<!DOCTYPE html>
<html>
<body>

<?php
ini_set("display_errors", 1);
trait message1 {
  public function msgA() {
    echo "messag 1 <br>";
  }

  public function msgB() {
    echo "My favorite number is 1. ";
  }
}

trait message2 {
  public function msgA() {
    echo "messag 2 ";
  }
  
  public function msgB() {
    echo "My favorite number is 2. ";
  }
}
trait message3 {
    public function msgA() {
      echo "messag 3 ";
    }
    
    public function msgB() {
      echo "My favorite number is 3. ";
    }
  }
  trait message4 {
    public function msgA() {
      echo "messag 4 ";
    }
    
    public function msgB() {
      echo "My favorite number is 4. ";
    }
  }
class MyClass {
  use message1, message2, message3, message4  {
    // message3::msgA insteadof message2, message1  , message4;
    // message1::msgB insteadof message2, message3, message4;\

  }
  
  message1::msgB();

}

$obj = new MyClass();
$obj->msgA();
$obj->msgB();
?>

</body>
</html>
