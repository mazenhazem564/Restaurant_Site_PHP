<?php
$error_fields=array();
if (!(isset($_POST['name']) && !empty($_POST['name']))) {
   $error_fields[] = "name"; 
}
if(!(isset($_POST['email'])&&filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL))) {
    $error_fields[]= "email";
}
if (!(isset($_POST['password'])&& strlen($_POST['password']) > 5)) {
    
    $error_fields[] = "password";
    
}
 if (in_array("name", $error_fields)) {
            echo "*Please enter your name";
        }
		 if (in_array("email", $error_fields)) {
                echo "*Please enter a valid email";
            }
			   if (in_array("password", $error_fields)) {
                echo "*Please enter a password not less than 6 characters";
            }
            
           
          
$conn = mysqli_connect("localhost","root","","restaurant");

if (!$conn) {
    echo mysqli_connect_error();
    exit;
}
$name= mysqli_escape_string($conn, $_POST['name']);
$email= mysqli_escape_string($conn, $_POST['email']);
$password=mysqli_escape_string($conn, $_POST['password']);


$query ="INSERT INTO `register` (`username`,`email`,`password`) VALUES ('".$name."','".$email."','".$password."')";

if (mysqli_query($conn, $query)) {
    
    echo "<h4>THANK YOU!, your information has been saved</h4>";
	
    header("Location:loginform.html");
	
    //echo "<script>alert('THANK YOU!, your information has been saved');</script>";
}
else
    {
    echo mysqli_errno($conn);
    
    }    
    mysqli_close($conn);
	?>