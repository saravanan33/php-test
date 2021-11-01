<?php

class A{
    var $variable = "saravana";
    function method(){
        global $variable;
        return $variable;
    }
}
$obj=new A();
$obj->method();


 ?>