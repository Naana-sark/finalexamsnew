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
     <!--Sign Up form begins  -->
<form method="post" action="register.php"id="_form">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username: </label>
  	  <input type="text" id="username" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email: </label>
  	  <input type="email" id="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password: </label>
  	  <input type="password" id="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password: </label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p  style="text-align:center; color:white;">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
  <!-- Sign up form ends -->
</div>
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