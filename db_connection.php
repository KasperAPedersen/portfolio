<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "swpdk";

  
  $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
  if ($conn->connect_error) { // Check connection
    die("Connection failed: " . $conn->connect_error); // Throw error if connection failed
  } else { // If Success
    
    $res = $conn->query("SELECT visitors FROM info"); // Query to get visitors from info table
    
    if ($res->num_rows > 0) {
      $visCount = (int)$res->fetch_assoc()["visitors"];
      //echo $visCount; // Echo the value of visitors

      if ($conn->query("UPDATE info SET visitors=$visCount+1 WHERE id='1'") == TRUE) {
        echo $visCount+1; // Echo the value of visitors
      } else {
        echo $visCount+1;
      }
    }
    

    
  }
?>