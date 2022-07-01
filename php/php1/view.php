<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';


$conn = mysqli_connect($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    echo $conn->connect_error;
}


if (isset($_GET['deleteid'])) {
    $deleteid =  $_GET['deleteid'];

    $sql = "DELETE FROM student WHERE id = $deleteid";

    if (mysqli_query($conn, $sql) == TRUE) {
        header('location:view.php');
    }
 }


//  $conn->close();

?>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-1">

            </div>
            <div class="col-sm-10 pt4 mt4 border border-primary">
                <h2 class='text-center pt-2 mt-1 bg-success text-white'>User's Information</h2>
<?php
                $sql = "SELECT * FROM student";
                $query = mysqli_query($conn,$sql);
     echo  "<table class='table table-success'>
     <tr> 
     <th>Id</th>
     <th>First name</th>
     <th>Last name</th>
     <th>Email</th>
     <th>Action</th>
     </tr>";
                while($data = mysqli_fetch_assoc($query)){
                $id =  $data['id'];
                $firstname =  $data['firstname'];
                $lastname =  $data['lastname'];
                $email =  $data['email'];
                echo "<tr>
                <td>$id</td>
                <td>$firstname</td>
                <td>$lastname</td>
                <td>$email</td>
                <td>
                <span class='btn btn-primary'>
                <a href='edit.php?id=$id' class='text-white'> Edit</a>
                </span>
                 <span class='btn btn-success'>
                  <a href='view.php?deleteid=$id' class='text-white'> Delete</a>
                  </span></td>
                </tr>";
                // echo $id.''.$firstname.''.$lastname.''.$email;
            }
            
                
?>
            </div>
            <div class="col-sm-1">

            </div>

        </div>

    </div>
</body>

</html>