<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';


$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    echo $conn->connect_error;
}

$sql = "DELETE FROM student WHERE id = 3 ";

if ($conn->query($sql) == TRUE) {
    echo "deleted";
} else {
    echo $conn_error;
}

$conn->close();

?>