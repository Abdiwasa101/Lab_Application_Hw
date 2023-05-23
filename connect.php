<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laphw";

$connection = new mysqli($servername, $username,  $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$fname = $_POST["fullname"];
$email = $_POST["email"];
$gender = $_POST["gender"];

$sql_query = ("INSERT INTO student(fullname, email, gender) values('$fname', '$email', '$gender')");

if($connection->query($sql_query)===true){
    echo "the data is recorded to database successfully";

}
else{
echo "error" . $connection->error;

}




$connection->close();

?>
