<!DOCTYPE html>
<html>
<body>
<?php

class Parents
 {
   public $s;
 public function m1($s)
 {
    $this->s=$s;
    echo "hello {$this->s}";
  }    
}
class child extends Parents
{
 public  function m1()
  {
    echo "hello child" ;
  }
}
$d= new child();
$d->m1("saro");
?>
 
</body>
</html>