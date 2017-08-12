<?php

$host = 'localhost';
$user1 = 'root';
$pass = '';

mysql_connect($host, $user1, $pass);
mysql_select_db('ecell_db');

$selectdata = " SELECT * FROM applicants";

$query = mysql_query($selectdata);


while($row = mysql_fetch_array($query))
{ 
 echo "<p>".$row['username']." of dept ".$row['dept']." has registered for : " .$row['event']. "</p>";
 
}


 





?>