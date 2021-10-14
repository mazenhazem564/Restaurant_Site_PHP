<html>
<head>
<meta name="viewport" content = "width=device-width , initial-scale = 1">
<link href="delete.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<form action="del.php" method="POST">
    <div class="box">
        <img class="logo" src="logo.png" alt="logo not found"/><br/>
        <br/>
        <h1>Deleting using email</h1>
        <br/><br/>
        <label for="email">Email</label>
        <input name="email" class="emailandpass" type="email" id="email" placeholder="Enter email correctly" required><br/>
        <label for="password">Password</label>
    
        <input name="password" class="emailandpass" type="password" id="password" placeholder="Enter passwword Correctly" required><br/>
        
        <input  type="submit" value="Delete" name="del" id="del">            
    
    </div>
    
</form>
</body>
</html>