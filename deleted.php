<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laphw";

$connection = new mysqli($servername, $username, $password, $dbname);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Clear the data from the table
$sql_query = "DELETE FROM student";

if ($connection->query($sql_query) === true) {
    echo "Data cleared successfully";
} else {
    echo "Error clearing data: " . $connection->error;
}


$connection->close();
?>
