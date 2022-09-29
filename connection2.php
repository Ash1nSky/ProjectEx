<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "YES";
 $db = "food";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) 
 or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 $conn = OpenCon();
 echo "Connected Succesfully";
 CloseCon($conn);
 
function CloseCon($conn)
 {
    $conn -> close();
 }
   
?>