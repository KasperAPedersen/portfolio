<?php
  function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "swpdk";
    $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error); // Throw error if connection failed
    return $conn;
  }

  function close($conn) {
    $conn->close();
  }
?>