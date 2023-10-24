<?php
    $conn = connect();
    if ($conn){
        $res = $conn->query("SELECT visitors FROM info"); // Query to get visitors from info table
    
        if ($res->num_rows > 0) {
          $visCount = (int)$res->fetch_assoc()["visitors"];
    
          if ($conn->query("UPDATE info SET visitors=$visCount+1 WHERE id='1'") == TRUE) {
            echo $visCount+1; // Echo the value of visitors
          } else {
            echo $visCount+1;
          }
        }
    }
    close($conn);
?>