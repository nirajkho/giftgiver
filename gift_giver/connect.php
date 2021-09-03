<?php
$mysqli = new mysqli("localhost","root","","gift");
session_start();
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;  
  exit();
    
}
//else echo "connection succesful"; // use to check if the connection has worked

?>