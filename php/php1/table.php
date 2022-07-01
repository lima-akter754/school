
<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'mydb';


    $conn = new mysqli($hostname, $username, $password ,$dbname);

    if ($conn->connect_error) {
        echo $conn->connect_error;
    }

    $sql = "CREATE TABLE student (
        id INT(6)  AUTO_INCREMENT PRIMARY KEY,
        firstname  VARCHAR  (30),
        lastname  VARCHAR  (30),
        email    VARCHAR (20)
        )";


    if($conn-> query($sql)==TRUE) {
        echo "table created";
    }else{
        echo $conn_error;

    }


$conn->close();


?>
