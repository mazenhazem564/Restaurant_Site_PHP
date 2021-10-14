<?php

if(isset($_POST['del']))
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



$sql = "DELETE from register WHERE email='$email' ";


$retval = mysqli_query($conn,$sql);
if( ! $retval)
{
die('couldnt delete data'.mysqli_error($conn));
}
else{
echo "<script>alert('Record deleted succefully');</script>";
    header("Location: list.php");
}
mysqli_close($conn);

}

?>
