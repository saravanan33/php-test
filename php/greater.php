<?php
$x=array(13,7,6,12);

for($i=0;$i<count($x);$i++)
{
    
    if($x[$i]<$x[$x+1])
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