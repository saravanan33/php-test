
<!DOCTYPE html>
<html>
    <head>
        <link  rel="stylesheet" href="css files/boot.css">
        
        <title>
            tables
        </title>
  
    </head>
    <body>
     <h1>PERSONAL DATA FORM</h1>

    <body class ="container">
        <form class="form-horizontal" action="action.php" method="post" enctype="multipart/form-data">
        <div>first name :<input type="text" id="name" name="firstname" placeholder="user name"> <br><br>
        father name :<input type="text" id="fname" name="fathername" placeholder="fathername"><br><br></div>
        <div>
            gender :
            <input type="radio" id="male" value="male" name="gender"><label for="male">male
            <input type="radio" id="female" value="female" name="gender"><label for="female">female</div>
            DOB :
            <input type="date" name="dob"><br><br>
            <lable for="dept">department:</lable>
            <select name="department" id="dept">
                <option value="csc">CSC</option>
                <option value="IT">IT</option>
                <option value="ECE">ECE</option>
                <option value="EEE">EEE</option>
            </select><br><br>
            passedout :
       <input type="number" min="2010" max="2021" name="passedout"><br><br>

       year of experience :
       <input type="number" min="1" max="5" name="yop"> <br><br>
        
       address :
        <input type="text" maxlength="100" name="address"><br><br>


        <lable for="COUNTRY">country:</lable>
    <select name="country" id="COUNTRY">
  <option value="INDIA">INDIA</option>
  <option value="USA">USA</option>
  <option value="LONDON">LONDON</option>
  <option value="CHINNA">CHINNA</option>
</select><br><br>
mobile :<input type="text" name="mobile" >
<br><br>
 
        

<input type="checkbox" id="vehicle1" name="vehicle[]" value="cricket">
  <label for="vehicle1"> play cricket</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle[]" value="football">
  <label for="vehicle2"> play football</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle[]" value="hocky">
  <label for="vehicle3"> play hocky</label><br><br>
  <label for="intrest"> intrested  in :</label>
  <textarea id="intrest" name="intrest" rows="4" cols="50"></textarea>
  <br> <br>
  upload resume: <input type="file" name="file[]" multiple ><br><br>
  <button type="submit" value="submit" name="submit" id="sub" onclick="save()">submit</button><br><br>

</form>
<script>

    function save()
    {

    }

    </script>
</html>