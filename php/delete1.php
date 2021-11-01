<?php
if(isset($_SESSION['id']) && !empty(trim($_SESSION['id'])))
{
require_once "login.php";
$del="delete from logintable where id=?";
if($stmt = mysqli_prepare($conn, $del))
{
    
    mysqli_stmt_bind_param($stmt, "i", $param_id);
    
   
    $param_id = trim($_SESSION["id"]);
    if (mysqli_stmt_execute($stmt))
    {
        header ("location:login.php");
        exit();
    }
    else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
    if(empty(trim($_SESSION['id'])))
    {
        alert("error");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Delete Record</title>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    
                  
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this employee record?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="login.php" class="btn btn-secondary">No</a>