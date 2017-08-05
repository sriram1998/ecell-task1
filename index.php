<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE ecell_db";
if ($conn->query($sql) === TRUE) {
   
} else {
   
}

$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecell_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE applicants (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(50) NOT NULL,
phone  bigint NOT NULL,
email varchar(255) NOT NULL,
dept varchar(20) NOT NULL,
year varchar(10) NOT NULL,
resume text NOT NULL

)";
if ($conn->query($sql) === TRUE) {
   
} else {
  
}






mysqli_close($conn);

?>
<html>
    <head>
        <title>E-CELL</title>
    <style>


h2 { position:absolute;
  
   margin-left: 400px;
   border-bottom:thick dotted black;
    color: cyan;
    font-family: verdana;
    font-size: 300%;

}

input[type=text], select {position:absolute;
    margin-top: 200px;
    margin-left: 200px;
    width: 20%;
    padding: 12px 20px;
  
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {position:absolute;
    margin-top: 210px;
    margin-left: 200px;
    
    width: 20%;
    padding: 12px 20px;
    
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {position:absolute;
    margin-top: 220px;
    margin-left: 200px;
    
    width: 20%;
    padding: 12px 20px;
    
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {position:absolute;
    margin-top: 400px;
    margin-left: 33%;
  
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
  
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
#dept{
  position: absolute;
  margin-top: 230px;
}
#year{
  position: absolute;
  margin-top: 240px;
}
.res{
    position:absolute;
    margin-top:1%;
    margin-left: 50%;
    height: 300px;
    width:400px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
    }
    



div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
#f{
  position: absolute;
  margin-top: -4%;
  margin-left: 50%;
}


</style>
    </head>
    <body background="bgl.png">
        <h2>Registration Page</h2>
        
        <form action="register.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="username" required="required"> <br></br>
            <input type="number" name="phoneNum" placeholder= "phone number" required="required"> <br></br>
            <input type="email" name="email" placeholder="email" required="required"><br></br>
            <select name="dept" placeholder="dept" id="dept">
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="EEE">EEE</option>
            <option value="MECH">MECH</option>
            <option value="ICE">ICE</option>
            <option value="CIVIL">CIVIL</option>
            <option value="CHEM">CHEM</option>
            <option value="MECH">PROD</option>
            <option value="MECH">META</option>
            <option value="MECH">DOMS</option>
            <option value="MECH">OTHER</option>
            </select>
            <br><br>
            <select name="year" placeholder="year" id="year">
            <option value="2nd year">2nd year</option>
            <option value="3rd year">3rd year</option>
            <option value="4th year">4th year</option>
            <option value="other">other</option>
            </select>
            <br><br>
            <div id="f">
            <input type="file" id="files" required="required" name="files[]" multiple />
            </div>
            <textarea placeholder="Resume:" name="resume" class="res" id="r"></textarea>




           <input type="submit" value="Register">
        </form>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script>
  function handleFileSelect(evt) {
    var files = evt.target.files; 
    f=files[0];
    var reader = new FileReader();
    reader.onload = (function(theFile) {
        return function(e) {
        jQuery('#r').val(e.target.result);
        };
      })(f);

      reader.readAsText(f);
    
  }

document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>
</html>

