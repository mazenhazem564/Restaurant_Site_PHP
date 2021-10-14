<html>
<head>
<meta name="viewport" content = "width=device-width , initial-scale = 1">
    <title>Edit your information</title>
    <link href="edit.css" type="text/css" rel="stylesheet"/>
    </head>
<body>
    
<form action="update1.php" method="POST">
    <div class="box">
        <img class="logo" src="logo.png" alt="logo not found"/><br/>
                   <br/>
    <h1>Edit info using email</h1>
 <br/><br/>

        <label for="email">Email</label>
        <input name="email" class="emailandpass" type="email" id="email" placeholder="Enter Email correctly" required><br/>

        <label for="password">Password</label>
      <input name="password" class="emailandpass" type="password" id="password" placeholder="Enter password Correctly" required><br/>

        <input  type="submit" value="Edit" name="edit" id="edit">
        </div>
</form>
    </body>
</html>