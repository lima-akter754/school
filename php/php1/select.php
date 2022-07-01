<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';


$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    echo $conn->connect_error;
}

// $sql = "SELECT * FROM student ORDER BY id ASC";
// $sql = "SELECT * FROM student ORDER BY id DESC";
//  $sql = "SELECT id, firstname, email FROM student ORDER BY firstname DESC";
//  $sql = "SELECT id, lastname, email FROM student ORDER BY lastname DESC";
//  $sql = "SELECT id, firstname, email FROM student LIMIT 2";
//  $sql = "SELECT id, firstname, email FROM student ORDER BY id ASC LIMIT 2 OFFSET 1";
//  $sql = "SELECT id, firstname, email FROM student ORDER BY id DESC LIMIT 2,6";
//  $sql = "SELECT id, firstname, email FROM student ORDER BY id DESC LIMIT 2,6";



$result = $conn->query($sql);

if($result->num_rows > 0) {
    // echo 'ok';
    while($row = $result->fetch_assoc()) {


    
    // print_r($row);
    // echo $row['firstname'];
    // echo $row['id'];
    //  echo $row['id'].' '.$row['firstname'].' '.$row['lastname'].' '.$row['email'] .'<br>';
    //  echo $row['id'].' '.$row['lastname'].' '.$row['email'] .'<br>';
    //  echo $row['id'].' '.$row['firstname'].' '.$row['email'] .'<br>';
    //  echo $row['id'].' '.$row['lastname'].' '.$row['email'] .'<br>';
     echo $row['id'].' '.$row['firstname'].' '.$row['email'] .'<br>';
    }

} else{
    echo $conn->error;
}

if ($conn->query($sql) == TRUE) {
    // echo "selected";
} else {
    echo $conn_error;
}




$conn->close();
