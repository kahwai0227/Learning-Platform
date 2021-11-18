<?php
//read
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mystudy";

    //post is like a box
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "INSERT userdata(Name, Email, Message) VALUES('$name', '$email', '$message')";

    $result = mysqli_query($conn, $sql);

    
?>