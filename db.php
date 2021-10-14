<?php 

$conn = mysqli_connect("localhost","root","","restaurant");
if(! $conn)
{
echo mysqli_connect_error();
exit;
}

$query = "SELECT * FROM `register`";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
echo"Id : ".$row['id']. "<br />";
echo "username : ".$row['username']."<br />";
echo "Email: ".$row['email']."<br />";
echo str_repeat("-",50)."<br />";
}

mysqli_free_result($result);
mysqli_close($conn);
?>