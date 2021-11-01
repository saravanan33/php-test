<!DOCTYPE html>
<html>
<body>
<?php
ini_set("display_errors", 1);
class Parents
 {
   public $s;
 public function m1($s,$f)
 {
    $this->s=$s;
    echo "hello {$this->s}";
  }    
}
class child extends Parents
{
 public  function m1(   )
  {
    echo "hello child" ;
  }
}
$d= new child();
$d->m1("saro",50);
?>
 
</body>
</html>