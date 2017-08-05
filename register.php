<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysql_real_escape_string($_POST['username']);
  $phone= $_POST['phoneNum'];
  $email=$_POST['email'];
  $dept=$_POST['dept'];
  $year=$_POST['year'];
  $resume=$_POST['resume'];
  


   
  mysql_connect("localhost", "root","") or die(mysql_error()); 
  mysql_select_db("ecell_db") or die("Cannot connect to database"); 
  
 
  
    mysql_query("INSERT INTO applicants (username,phone,email,dept,year,resume) VALUES ('$username','$phone','$email','$dept','$year','$resume')"); 
    Print '<script>alert("Successfully Registered!");</script>'; 
    Print '<script>window.location.assign("index.php");</script>';
    
  
}
?>