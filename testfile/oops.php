<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) { 
   return $this->name = $n;
  }
  protected function set_color($n) { 
    return $this->color = $n;
  }
  private function set_weight($n) { 
    return $this->weight = $n;
  }
  
}
class ba extends fruit
{
  
   function set_color($n)
    {
      return $this->color=$n;
    } 
    function set_weight($n)
    {
        return $this->weight = $n;
 
    }
}

$b = new ba();
echo $b->set_name('Mango'); 
echo $b->set_color('Yellow'); 
echo $b->set_weight('300'); 
?>


