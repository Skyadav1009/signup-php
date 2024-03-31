<?php
$server="localhost";
$username="root";
$password ="";
$dbname="score";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{
    echo "not connected";
}


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `score`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";

$result = mysqli_query($con , $sql);

if($result)
{
    echo "data submitted";
}
else{
    echo "error";
}



?>