<?php
include("../Controller/UserControll.php");
$valuesAdmin=unserialize(urldecode($_GET['value']));
?>
<!DOCTYPE html> 
<head>
    <title>
        ADMIN VIEW 
    </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      </head>
      <body>
            <h1>hi<?php  echo "<br>".$_SESSION['user_name']; ?></h1>
                <div><button onclick="document.location='CreatenewView.php'">create new employee account</button></div>
            <button type="button" id="btn3" name="btn3" class="btn btn-default btn-sm" onclick="document.location='LoginView.php'">
        <span class="glyphicon glyphicon-log-out"></span>Logout</button>
        
      <table class="table table-bordered table-striped">
          <thead>
              <tr>
                  <th>empolyee id</th>
                  <th>empolyee name</th>
                  <th>empolyee mobile</th>
                  <th>empolyee address</th>
                  <th>empolyee email</th>
                  <th>empolyee intime</th>
                  <th>empolyee outtime</th>
                  <th>empolyee shift</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
              </tr>
          </thead>
          <?php
          foreach($valuesAdmin as $arr){
              echo "<tr>";
              echo "<td>".$arr['user_id']."</td>";
              echo "<td>".$arr['user_name']."</td>";
              echo "<td>".$arr['user_mobile']."</td>";
              echo "<td>".$arr['user_address']."</td>";
              echo "<td>".$arr['user_email']."</td>";
              echo "<td>".$arr['user_intime']."</td>";
              echo "<td>".$arr['user_outtime']."</td>";
              echo "<td>".$arr['user_shift']."</td>";
              echo "<td><button type='button' class ='glyphicon glyphicon-pencil' id=''></button></td>";
              echo "<td><button type='button' class ='glyphicon glyphicon-trash' id=''></button></td>";
              echo "</tr>";
              }
              ?>
              </table>
    <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever') 
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
    });console.log('hi');
    </script>
  </body>
</html>
