<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';


$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    echo $conn->connect_error;
}

$sql = "UPDATE student SET firstname = 'khafiza',lastname = 'khtun', email = 'sss@gmail.com' WHERE id=2";


if ($conn->query($sql) == TRUE) {
    echo "updated";
} else {
    echo $conn_error;
}




$conn->close();