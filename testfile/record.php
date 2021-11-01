<?php

   $con=new mysqli("localhost", "root", "","claritytts");
    if(!$con)
    {
        die("connection failed:" . mysqli_connect_error());
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Clarity TTS web page</title>
        <style>
            table {
   
   font-size: large;
   border: 1px solid black;
   width: 20%;
}



td {
   
   border: 1px solid black;
}


td {
   font-weight: bold;
   border: 1px solid black;
   text-align: center;
}

td {
   font-weight: lighter;
}
th{
   text-align: center;
   font-weight: bold;
   border: 1px solid black;

}
    </style>
    </head>
    <body>
        <?php
                    
                   
                    $sql = "SELECT * FROM form";
                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Id</th>";
                                        echo "<th>FirstName</th>";
                                        echo "<th>LastName</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Date of Birth</th>";
                                        echo "<th>Gender</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>Country</th>";
                                        echo "<th>State</th>";
                                        echo "<th>Department</th>";
                                        echo "<th>Technology</th>";
                                        echo "<th>Hobbies</th>";
                                        echo "<th>FileName</th>";
                                        echo "<th>FileUrl</th>";
                                        echo "<th></th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" .$row['id'] . "</td>";
                                        echo "<td>" .$row['firstname'] . "</td>";
                                        echo "<td>" . $row['lastname'] . "</td>";
                                    
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['dob'] . "</td>";
                                        echo "<td>" . $row['gender'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['country'] . "</td>";
                                        echo "<td>" . $row['state'] . "</td>";
                                        echo "<td>" . $row['department'] . "</td>";
                                        echo "<td>" . $row['technology'] . "</td>";
                                        echo "<td>" . $row['hobbie'] . "</td>";
                                        echo "<td>" . $row['file_name'] . "</td>";
                                        echo "<td>" . $row['uploaded_on'] . "</td>";



                                        
                                        


                                        
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                   
                    mysqli_close($con);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    
        


 
  
     
    </body>
</html>
