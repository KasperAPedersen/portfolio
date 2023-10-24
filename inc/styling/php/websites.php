<?php
    $conn = connect();
    if ($conn){
        $res = $conn->query("SELECT webCounter FROM info"); // Query to get visitors from info table
        if ($res->num_rows > 0) echo (int)$res->fetch_assoc()["webCounter"];
    }
    close($conn);
?>