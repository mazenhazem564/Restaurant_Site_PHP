<?php

$conn=mysqli_connect("localhost","root","","restaurant");

if (! $conn) {
    echo mysqli_connect_error();
    exit;
}

$query="SELECT * FROM `register`";

if (isset($_GET['search'])) {
    $search = mysqli_escape_string($conn,$_GET['search']);
    $query.= " Where `register`.`username` LIKE '%".$search."%' OR `register`.`email` LIKE '%".$search."%'";

}


$result= mysqli_query($conn, $query);
?>

<html>
    <head>    
	<meta name="viewport" content = "width=device-width , initial-scale = 1">
        <title>Display Clents data</title>
        <link href="list.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <h1>List users</h1>
 <br/>
        <form method="GET">
            <input type="text" name="search" placeholder="Enter {Name} or {Email} to search" >
            <input type="submit" value="search"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="add.php">ADD USER</a>
        </form>
        
        <br/>
       <table border="1">
           <thead>
               <tr>
                   <th>Id</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Actions</th>
               </tr>
           </thead>
           <tbody>
           <?php
           while ($row = mysqli_fetch_array($result))
                   {
           ?>
           <tr>
               <td><?= $row['id'] ?></td> 
               <td><?= $row['username'] ?></td>
               <td><?= $row['email'] ?></td>
               
               <td>
                   <a href="Update(mazen).php?id=<?=$row['id']?>">Edit</a> 
                   | <a href="delete.php?id=<?=$row['id']?>" >Delete</a>
               </td>
           </tr>
           <?php 
                   }
           ?>
           </tbody>
           <tfoot>
               <tr>
                   <td colspan="2" style="text-align: center"> 
                   
                   <?= mysqli_num_rows($result)?>
                       
                       <a>users</a> </td>
               
           <td colspan="3" style="text-align: center">
               
               
               <a href="add.php">ADD USER</a>
           
           </td>
               
          </tr>
           </tfoot>
       </table>
    </body>
</html>
<?php
//close connection

mysqli_free_result($result);
mysqli_close($conn);
