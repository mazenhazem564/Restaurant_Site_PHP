<?php
$error_fields=array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (!(isset($_POST['name']) && !empty($_POST['name']))) {
   $error_fields[] = "name"; 
}
if(!(isset($_POST['email'])&&filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL))) {
    $error_fields[]= "email";
}
if (!(isset($_POST['password'])&& strlen($_POST['password']) > 5)) {
    
    $error_fields[] = "password";
    
}
if (!$error_fields) {
 
  $conn = mysqli_connect("localhost","root","","restaurant");

if (!$conn) {
    echo mysqli_connect_error();
    exit;
}
$name= mysqli_escape_string($conn, $_POST['name']);
$email= mysqli_escape_string($conn, $_POST['email']);
$password=isset($_POST['password']);


$uploads_dir = $_SERVER['DOCUMENT_ROOT'].'/uploads';

   $query ="INSERT INTO `register` (`username`,`email`,`password`) VALUES ('".$name."','".$email."','".$password."')";   

    if (mysqli_query($conn, $query)) {
    header("Location: loginform.html");
        echo "<script>alert('you have been registered successufly');</script>";
        
    exit;
}
else{
    echo mysqli_errno($conn); 
}

        mysqli_connect_error();
}
}
?>
<html>
    
        <head>
		<meta name="viewport" content = "width=device-width , initial-scale = 1">
            <title>
               Registration   
            </title>    
			
            <link href="add.css"  rel="stylesheet"/>
        </head>
        <body>
            <form action="process_db.php"  method="post" enctype="multipart/form-data">
                
                
                <div class="box">
				
                    <img class="logo" src="logo.png" alt="logo not found"/><br/>
					<br><br><br>
                    <h1>Registration</h1>
                <label for="name">Username</label>
            <input type="text" class="emailandpass" name="name" id="name" placeholder="Username" value="<?= (isset($_POST['name'])) ?  $_POST['name']:'' ?>" required>
            <?php 
        if (in_array("name", $error_fields)) {
            echo "*Please enter your name";
        }
            ?>
            <br /><br />
            <label for="email">Email</label>
            <input type="email" class="emailandpass" name="email" id="email" placeholder="Email" value="<?= (isset($_POST['email'])) ?  $_POST['email']:'' ?>" required> 
            <?php 
            if (in_array("email", $error_fields)) {
                echo "*Please enter a valid email";
            }
            ?>
            <br /><br />
            <label for="password">Password</label>
            <input type="password" name="password" class="emailandpass" id="password" placeholder="Password" value="<?= (isset($_POST['password'])) ? $_POST['password']:'' ?>" required>
            <?php 
            if (in_array("password", $error_fields)) {
                echo "*Please enter a password not less than 6 characters";
            }
            ?><br /><br />          
                    <input type="submit" name="submit" value="Register">
					  <a href="loginform.html"><input type="button"  name="already_registered"  value="already_registered"></a> 
           <a href="HomePage.php"><input type="button" id="guest"  value="Guest"></a>    
					
					
</div>
            </form>
        </body>
</html>