<?php include 'server.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystery Law</title>
    <link rel="stylesheet" href = "admin.css" type = "text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body >

 

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
  		<input type="text" name="Username" placeholder="Please enter your username" required>
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
  
  
  </form>
  <!-- form ends -->
</div>
<!-- container for form ends -->
</div>




</body>
</html>