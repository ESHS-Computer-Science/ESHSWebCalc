<<<<<<< HEAD
<?php
  $host = "127.7.37.130:3306";
  $username = "mschumann";
  $password = "Marcmann15";
  $db = "eshswebcalc";
  
  // Create connection
  $conn = new mysqli($host, $username, $password, $db);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  
  echo "Hello";
  echo "Connected successfully";
?>
=======
<?php
  $host = "127.7.37.130:3306";
  $username = "mschumann";
  $password = "Marcmann15";
  
  // Create connection
  $conn = new mysqli($host, $username, $password);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  
  echo "Hello";
  echo "Connected successfully";
?>
>>>>>>> origin/master
