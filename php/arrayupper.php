<?php
echo "case change";
$age=array("yeshwanth"=>21,"saravanan"=>24,"rohini"=>22);
print_r(array_change_key_case($age,CASE_UPPER));
echo "<br>";
echo "<br>";


echo "array chunks";
echo "<br>";echo "<br>";
$arr=array("yeshwanth"=>21,"saravanan"=>24,"rohini"=>22,"yeswanth"=>20,"saravaan"=>25,"rohni"=>12);
print_r(array_chunk($arr,2,true));


echo "<br>";echo "<br>";echo "<br>";
echo "array coloumn";
echo "<br>";
$a = [
    [
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ],
   [
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
   ],
    [
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    ]
    ];
  
 
  print_r(array_column($a, 'id'));
  echo "<br>";
echo "<br>";
echo "array count values";echo "<br>";echo "<br>";
$a=[2,5,2,6,8,2,1,9,3,5,8,7];
print_r(array_count_values($a));
echo "<br>";echo "<br>";echo "<br>";


echo "array differt values";
echo "<br>";echo "<br>";echo "<br>";
$age=array("yeshwanth"=>21,"saravanan"=>23,"rohini"=>22);
$age1 = array('yeswanth' =>21 ,'saravanan'=>24,"rohini"=>21 );
print_r(array_diff($age,$age1));
echo "<br>";echo "<br>";echo "<br>";


echo "array diiferent assosiative";
echo "<br>";echo "<br>";echo "<br>";
$age=array("yeshwanth"=>21,"saravanan"=>24,"rohini"=>22);
$age1 = array('yeshwanth' =>21 ,'saravanan'=>2,"rohini"=>21 );
print_r(array_diff_assoc($age,$age1));
echo "<br>";echo "<br>";echo "<br>";


echo "array diff keys";
echo "<br>";echo "<br>";echo "<br>";
$age=array("yeshwanth"=>21,"saravanan"=>24,"rohini"=>22);
$age1 = array('yeshwanth' =>21 ,'saavanan'=>2,"rohini"=>21 );
print_r(array_diff_key($age,$age1));
echo "<br>";echo "<br>";echo "<br>";


echo "array diff assoc";
echo "<br>";echo "<br>";echo "<br>";
$age=array("yeshwanth"=>21,"saravanan"=>24,"rohini"=>22);
$age1 = array('yeshwanth' =>21 ,'saravanan'=>2,"rohini"=>21 );
print_r(array_diff_assoc($age,$age1));

echo "<br>";echo "<br>";echo "<br>";
echo "array fill";
echo "<br>";echo "<br>";

$age=array("yeshwanth"=>21,"saravanan"=>24,"rohini"=>22);
$age1 = array('yeshwanth' =>21 ,'saravanan'=>2,"rohini"=>21 );
$x=array_fill($age,2,"hello");
print_r($x);

echo "<br>";echo "<br>";
echo " array fill ";
echo "<br>";echo "<br>";
$a1=[8,9,4,7,1,2];
print_r($a1);





echo "<br>";echo "<br>";echo "<br>";
echo "MERGE ARRAY";
echo "<br>";echo "<br>";

$age=array("yeshwanth"=>21,"saravanan"=>24,"rohini"=>22);
$age1 = array('yehwanth' =>21 ,'saraanan'=>2,"roini"=>21 );
print_r(array_merge($age,$age1));

echo "<br>";echo "<br>";echo "<br>";

$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];


echo "<br>";echo "<br>";echo "<br>";
$a=array(0,5,5,4,3,1,2,8,9,4,2,1);
print_r(array_unique($a));
echo "<br>";echo "<br>";echo "<br>";

$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));
echo "<br>";echo "<br>";echo "<br>";
function myfunction($v1,$v2)
{
if ($v1===$v2)
  {
  return "same";
  }
return "different";
}

$a1=array("Horse","Dog","Cat");
$a2=array("Cow","Dog","Horse");
print_r(array_map("myfunction",$a1,$a2));

echo "<br>";echo "<br>";echo "<br>";


$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>"; 
echo next($people) . "<br>"; 
echo current($people) . "<br>"; 
echo prev($people) . "<br>"; 
echo end($people) . "<br>"; 
echo prev($people) . "<br>"; 
echo current($people) . "<br>"; 
echo reset($people) . "<br>"; 
echo next($people) . "<br>";

print_r (each($people));
echo "<br>";

echo "<br>";echo "array intrsect.<br>";echo "<br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($result);
echo "<br>";

echo "<br>";echo " <br>";echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

$result=array_intersect($a1,$a2,$a3);
print_r($result);
echo "<br>";

echo "<br>";echo "array merge<br>";echo "<br>";

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($a1,$a2));
echo "<br>";


echo "<br>";echo "array pad<br>";echo "<br>";
$a=array("red","green");
print_r(array_pad($a,5,"blue"));
echo "<br>";

echo "<br>";echo "array pop<br>";echo "<br>";
$a=array("red","green","blue");
array_pop($a);
print_r($a);





























?>



