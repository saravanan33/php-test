<?php
class parants {
    public $x=1;
    public function m1() {
      echo "Hello World!<br>";
    }
}
class child extends parants
{
function name()
{
    parants::m1();
    print $this->x=10;
    
}


}
$obj=new child();

echo $obj->name();


?>