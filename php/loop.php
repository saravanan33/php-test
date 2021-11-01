<?php
$x=array(4,5,2,25);

for($i=0;$i<count($x);$i++)
{
    
      if($x[$i]<$x[$i+1])
      {
        echo $x[$i+1]."\n";
        continue;
    }

    elseif($x[$i]<$x[$i+2])
    {
      echo $x[$i+2]."\n";
      continue;
    }
    elseif($x[$i]<$x[$i+3])
    {
        echo $x[$i+3]."\n";
        continue;
    }
    else
    {
        echo "-1\n";
        continue;
    }
}
echo "<br>hi";
?>








<!-- foreach($cars as $x_key=> $x_values)
{
    if($x_key==3)
    {
        print_r ($x_values);
    }
  

}  -->