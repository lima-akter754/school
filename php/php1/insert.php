<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';


$conn = new mysqli($hostname, $username, $password, $dbname);

     if($conn->connect_error) {
        echo $conn->connect_error;
    }
 if (isset($_POST['submit'])) {
    $firstname =  $_POST['firstname'];
    $lastname  =  $_POST['lastname'];
    $email     =  $_POST['email'];
}


$sql = "INSERT INTO student (firstname, lastname, email) VALUES('$firstname', '$lastname', '$email')";

if (mysqli_query($conn, $sql) == TRUE) {
    echo "data inserted";
} else {
    echo "not insert";
}


//      $sql = "INSERT INTO student (firstname, lastname, email) VALUES('kader', 'goni', 'goni@gmaill.com')";



// if ($conn->query($sql) == TRUE) {
//     echo "inserted";
//  } else {
//     echo $conn_error;
//  }


$conn->close();