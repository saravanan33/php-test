<?php
class A{
    function m1(){
        echo "class  A";
    }
}
class B extends A{
    function m1(){
        echo "class B";
    }
}
$a=new B();
$a->m1();
?>