<?php
require_once("../Model/LoginPostModel.php");
$db_handle = new DbFunction();
$dbConection= DbFunction::dbConnect();
  if(!empty($_POST["keyword"])){
        $query ="SELECT * FROM form WHERE user_name like '" . $_POST["keyword"] . "%' ORDER BY user_name LIMIT 0,3";
        $result = mysqli_query($dbConection,$query);
        if(!empty($result)) {
        ?>
        <ul id="email">
        <?php
        foreach($result as $name) {
        ?>
        <li onClick="selectname('<?php echo $name["email"]; ?>');"><?php echo $name["email"]; ?></li>
        <?php } ?>
        </ul>
        <?php 
        } 
        }
?>