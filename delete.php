<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mystudy";

    //predefined
    //post is like a box
    $id = $_GET["id"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "DELETE FROM contactusdata WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    header ("Location: read.php");
?>