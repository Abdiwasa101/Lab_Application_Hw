<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laphw";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql_query = "SELECT * FROM student";
$result = $connection->query($sql_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 2px solid gray;
        }
    </style>
</head>
<body>
    <h2>Student List</h2>
    <table>
        <tr >
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["fullname"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["gender"]."</td>";
                echo "</tr>";
            }
        } else 
        
          /*   echo "<tr><td colspan='3'>No records found</td></tr>";
        */
        echo "there is no result"
        
         
        ?>
    </table>

    <?php

    $connection->close();
    ?>
</body>
</html>
