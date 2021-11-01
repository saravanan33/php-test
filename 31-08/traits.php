<?php
// ini_set("display_errors", 1);
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
    public function say() {
        Base::sayHello();
        echo 'H ';
    }
}

// trait SayWorld {
//     public function sayHello() {
//        parent::sayHello();
//         echo 'World!';
//     }
// }

// class MyHelloWorld extends Base {
//     use SayWorld;
// }


?>