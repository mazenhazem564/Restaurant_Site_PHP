
<?php
session_start();

if(isset($_SESSION['id']))
{
    echo '<p> Welcome '.$_SESSION['email']. ' <a href="/logout.php">Logout</a></p>';
}
?>
<html>
<head>
<meta name="viewport" content = "width=device-width , initial-scale = 1">
<link href="homepage.css" rel="stylesheet" />

</head>




<body id="grad2">


  <a href="maindish.html" class="button">Main Dishes</a>

  <a href="desserts.html" class="button">Desserts</a>
 
  <a href="drinks.html" class="button">Drinks</a>
   <a href="about us.html" class="button">About us</a>
 <a href="know.html" class="button">Did you know?</a>
  
  
 
  

  <div class="cont">
  <img src="steak.jpg" />
  <div class="btm-left">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;
      <h7 id="coat">Special Meal : Mix Gril &nbsp; 250egp</h7></div>
</div>
<br>

<div class="cont">
  <img src="chicken3.jpg" />
  <div class="btm-left">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;
      <h7 id="coat">
                Special meal : 8 wings &nbsp; 300egp
      </h7>

</div>
</div>

 
</body>






</html>