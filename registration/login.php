<?php include 'server.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystery Law</title>
    <link rel="stylesheet" href = "registerstyle.css" type = "text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body >

 <!-- Navbar begins -->
 <div class="topnav" id="myTopnav">
  <a href="../home/index.php" >Home</a>
  <div class="dropdown">
    <button class="dropbtn">Law Worker 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="register.php">Signup</a>
      <a href="login.php">Log In</a>
      
    </div>
  </div>
  <div class ="topnavright">
  <a href="../home/contact.php" >Contact</a>
  <a href="../home/about.php" >About</a>
  </div>
  <div class="topnavcenter">
    <strong>Mystery Law</strong>
  </div>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div> 
<!-- navbar ends -->

<!-- container for body with the exception of navbar-->
<div class="con">

<!-- container for form and header for form -->
<div class="container">
<div class="header">
  	<h2 style="text-align:center;">Login</h2>
  </div>
	 <!--Login form begins  -->
  <form method="post" action="login.php">
      <?php include('errors.php'); ?>
      <div class="imgcontainer">
          <img src="../Images/user.png" alt= "Avatar" class="avatar">
        
      </div>
  	<div class="input-group">
  		<label>Username:</label>
  		<input type="text" name="username" placeholder="Please enter your username" required>
      </div>
      <br>
  	<div class="input-group">
  		<label>Password:</label>
  		<input type="password" name="password" placeholder="Please enter your password" required>
      </div>
      <br>
  	<div class="input-group">
          <button type="submit" class="btn" name="login_user">Login</button>
      
      </div>
  
  	<p style="text-align:center; color:white">
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <!-- form ends -->
</div>
<!-- container for form ends -->
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>