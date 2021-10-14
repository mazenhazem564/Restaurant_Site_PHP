<?php


$email = $_POST['email'];
$passw = $_POST['password'];


$host="localhost";
$user="root";
$pass="";
$conn= mysqli_connect($host,$user,$pass,"restaurant");

if(! $conn)
{
    die('Connection Failed'.mysql_error());
}


mysqli_select_db($conn,"restaurant");

$result = mysqli_query($conn,"SELECT email ,password FROM register WHERE email = '$email'");

$row = mysqli_fetch_array($result);

if($row["email"]==$email && $row["password"]==$passw)
{
    echo"welcome to our restaurant.";
	header("location: HomePage.php");
}
else
    echo"You, are not registered please register..";
?>