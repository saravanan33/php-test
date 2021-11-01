<?php
ini_set("display_errors", 1);
class parants {
    
    public static function m1()
    {
       global $x;
       $x++;
       echo $x."<br>";
    }       
    
}
$obj=new parants();
$obj->m1();
$obj1=new parants();
$obj1->m1();
$obj2=new parants();
$obj2->m1();
?>