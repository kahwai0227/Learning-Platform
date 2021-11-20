<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mystudy";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET["id"];
    $sql = "SELECT * FROM contactusdata WHERE id = $id";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    ?>

    <!doctype html>
<html lang="en">
  <head>

    <script>
        function visibility(){
            var x = document.getElementById('password');
            if(x.type=='password'){
                x.type = 'text';
            }
            else{
                x.type = 'password';
            }
        }
    </script>
</body>
</html>