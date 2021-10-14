<?php

if(isset($_POST['edit']))
{
$host="localhost";
$user="root";
$pass="";
$conn= mysqli_connect($host,$user,$pass,"restaurant");


    
if(! $conn)
{
	die("couldn't connect: ".mysqli_error($conn));
	
}

$email=$_POST['email'];

$password=$_POST['password'];

//$sql = "UPDATE register "."SET email = $email"."WHERE password = $password";

$sql = "UPDATE register SET password='$password' WHERE email='$email' ";


$retval = mysqli_query($conn,$sql);
if( ! $retval)
{
die('couldnt update data'.mysqli_error($conn));
}
else{
echo "<script>alert('Record updated succefully');</script>";
    header("Location: list.php");
}
mysqli_close($conn);

}

?>