<?php
    include 'db_connection.php';
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sub = $_POST['subject'];
    $msg = $_POST['message'];

    if (empty($email) || empty($fname) || empty($lname) || empty($sub) || empty($msg)) {
        echo "Missing inputs";
    } else {
        $conn = connect();
        $conn->query("INSERT INTO contact (email, first, last, subject, message) VALUES ('$email', '$fname', '$lname', '$sub', '$msg')");
        close($conn);
        header('Location: https://swoopai.dk');
    }
?>