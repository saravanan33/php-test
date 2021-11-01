<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {

echo "Cookies are enabled.<br>";
} else {
  echo "Cookies are disabled.";
}
?>
session_start();
<?php

?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_COOKIE);
?>

</body>
</html>

</body>
</html>