<?php 

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            success
        </title>
    </head>
    <h3><?php   echo "hello '".$_SESSION['user_name']."'<br> your mailid is  '".$_SESSION['email']."'";?></h3>
    <button type="button" value="LOGOUT"  onclick="location.href='Sessiondestroy.php'" >LOGOUT</button>
</html>