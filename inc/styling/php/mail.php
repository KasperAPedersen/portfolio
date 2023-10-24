<?php
    echo $_POST['fname'];
    if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
        echo "Missing inputs";
    } else {
        $tmp = $_POST['fname'] + " " + $_POST['lname'] + "(" + $_POST['email'] + ")" + "\n" + $_POST['message'];
        echo $tmp;
        mail("swoopai@swoopai.dk", $_POST['subject'], $tmp);
    }
?>