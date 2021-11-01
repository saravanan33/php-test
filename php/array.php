<?php
$test=array(5,2,3,4,4,4,4,5);
echo "The original array is:<br>";
$olddata="";

sort($test);

for($i=0;$i<count($test);$i++)
{   
    if($i == 0){
        $olddata = $test[$i] ;
    }else{
        $olddata .= ','.$test[$i] ;
    }
    if (isset($test[$i+1]) && $test[$i] == $test[$i+1] )
    {
        $test[$i]="";
        
    }
    
}
echo $olddata."<br>";
print_r($test);
print_r(implode(" ",$test));
?>
