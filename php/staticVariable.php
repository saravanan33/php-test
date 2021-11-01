<?php
ini_set("display_errors", 1);
class staticVariable{
    public static $x=0;
    function __consturct(){
        echo $x++;
    }
    function count(){
            return $x;
    }
}
$a=new staticVariable();
$b=new staticVariable();
$c=new staticVariable();
echo $a->count();
echo $b->count();
echo $c->count();
?>