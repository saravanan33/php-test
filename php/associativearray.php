<html>
    <head>
        <title>javaprogram</title>
        
    </head><body>
<?php
$cars = array (
  /*  0  */array("Volvo"=>5,22=>5,18=>56),
   /*  1  */array("BMW"=>89,15=>76,13=>86),
  /*  2  */ array("Saab"=>56,5=>65,2=>78),
  /*  3  */ array("Land Rover"=>43,17=>12,78=>23)   );
foreach($cars as $x)
{


foreach($x as $x_key=> $x_values)
{
    if($x_key==17)
    {
        echo $x_values;
    }
  

} 
echo "<br>";
}
foreach($cars as $x_key=> $x_values)
{
    if($x_key==3)
    {
        print_r ($x_values);
    }
  

} 
?>
</body>
</html>
