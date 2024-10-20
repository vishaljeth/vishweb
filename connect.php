<?php
// connecting to db
$servername = "localhost";
$username = "root";
$password="";
$dbname = "elearning";


// create a connection
$conn = mysqli_connect($servername ,$username, $password, $dbname);

//die if connection was not succesfully
if (!$conn){
    die("sorry we faild to connect:". mysqli_connect_error());
}
else{
echo "connection was succesfull";
}
?>