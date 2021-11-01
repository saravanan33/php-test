<?php
ini_set("display_errors", 1);
 class test{

    public function method($x)
    {
        return ++$x;
    }
}
// class Test1
// {
//     static function METHOD()
//     {
//         echo "caps";
//     }
// }
// test::$x=1;
// echo "".test::method()."<br>";
// echo "".Test::Method()."<br>";
// echo TEST::METHOD();
echo test::method(3)
?>  