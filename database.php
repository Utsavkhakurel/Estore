<?php
$db_Host = 'localhost';
$db_Name = 'store_db';
$db_User = 'root';
$db_Pass = '';           
 $db_connection = mysqli_connect($db_Host, $db_User, $db_Pass, $db_Name);
 if (!$db_connection) {
     die("Connection failed: " . mysqli_connect_error());
 }
 else {
     echo " Connection successful";
 }  
 ?>