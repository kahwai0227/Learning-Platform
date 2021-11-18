<?php
//read
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mystudy";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM userdata";

    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MYStudy Database</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-3">
      <h2>UserData</h2>
      <p>This table contains users data</p>            
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width:10%">id</th>
            <th style="width:20%">Name</th>
            <th style="width:20%">Email</th>
            <th style="width:50%">Message</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_array($result)){ 
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['Name']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "<td>".$row['Message']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
      </table>
    </div>
</body>
</html>