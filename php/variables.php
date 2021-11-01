<!-- 
<?php
 ini_set("display_errors", 1);
 // Declaring a class
 class Geeks {
  
     // Using var keyword
     // to declare Public variable
     var $var1 ='public';
      
     // Declaring protected variable
     Protected $var2 ='protect'   ;
      
     // Declaring private variable
     private $var3 ='private';

     function __construct(){
      
        //  global $var1;
        //  global $var2;
        //  global $var3;
        //  $var1='public  ';
        //  $var2='protected   ';
        //  $var3='Private   ';
        //  print_r($var1); 
        //  print_r($var2);
        //  print_r($var3);
         
     }
 }
  class B extends Geeks{     
      function m1($var1,$var2,$var3){ 
       
        // global $var1;
        // global $var2;
        // global $var3;
        
        print_r($this->var1); 
        print_r($this->var2);
        print_r($this->var3);
      }
  }
 $obj = new Geeks();
 $obj2 = new B();
//   echo $obj->var2;
$value=$obj2->m1($var1,$var2,$var3);
echo $value;
// echo 'hi';
 ?> -->
 