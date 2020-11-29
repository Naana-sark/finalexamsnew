<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystery Law</title>
    <link rel="stylesheet" href = "contactstyle.css" type = "text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body >

 <!-- Navbar begins -->
 <div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  <div class="dropdown">
    <button class="dropbtn">Law Worker 
      <i class="fa fa-caret-down" aria-hidden="true"></i>
    </button>
    <div class="dropdown-content">
      <a href="../registration/register.php">Signup</a>
      <a href="../registration/login.php">Log In</a>
      
    </div>
  </div>
  <div class ="topnavright">
  <a href="contact.php" >Contact</a>
  <a href="about.php" class="active">About</a>
  </div>
  <div class="topnavcenter">
    <strong>Mystery Law</strong>
  </div>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div> 
<div class="body1">
<div class ="about-section">
    <div class="inner-container">
        <h1>About Us</h1>
        <p class="text3">
        The mystery law court is a multi-national law court that gives justice to people, protects the
        rights of individuals, interprets the law, grants licenses, patent rights amongst many others.<br>
        This web application allows judges and lawyers  to view
        records of conviction for an individual and also allows them to see the cases other lawyers and judges are working on.
        <br> It also allows them to see the total number of cases and individuals and the court procedures that have been followed
        for cases.  
        </p>
    </div>
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