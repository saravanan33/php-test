
<?php
ini_set("display_errors", 1);
class sample {
      
    var $var1;
    var $var2;
      
   function __construct( $par1, $par2 ) 
    {
        $this->var1 = $par1;
        $this->var2 = $par2;
    }
}
  

$myObj = new sample(1000, "second");
echo "Before conversion: \n";
var_dump($myObj);
  

$myArray = json_decode(json_encode($myObj), false);
echo "After conversion: \n<br>";
var_dump($myArray);
?>  





<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
 
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "<br>";
echo "<br>";
echo "<br>";
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color();
echo "<br>";
$appl = new Fruit();
$appl->set_name('banana');
$appl->set_color('yellow');
echo "<br>";
echo "Name: " . $appl->get_name();
echo "<br>";
echo "Color: " .  $appl->get_color();
var_dump($apple instanceof Fruit);
print_r($appl instanceof Fruit);
echo "<br>";echo "<br>";
?>
</body>
</html>

<?php
class Fruits {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "The fruit is $this->name";
  }
}

$aple = new Fruits("Apple");
?>
 <?php
class Frui {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Frui();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>
