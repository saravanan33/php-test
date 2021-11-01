<?php
$x=[2,3,6,2,8,3,5,1,9,5,6];
$a= array('saravanan' =>7 ,'vignesh' =>3,'hamanth' =>8 );
$UPPER= array_change_key_case($a,UPPER_CASE);
print_r($UPPER);