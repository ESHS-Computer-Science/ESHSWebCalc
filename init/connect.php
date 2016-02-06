<?php
  $host = " 127.7.37.130";
  $username = "mschumann";
  $password = "Marcmann15";
  
  // Create connection
  $conn = new mysqli($host, $username, $password);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  
  echo "Connected successfully";
?>
