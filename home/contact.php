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
  <a href="contact.php" class="active">Contact</a>
  <a href="about.php">About</a>
  </div>
  <div class="topnavcenter">
    <strong>Mystery Law</strong>
  </div>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div> 

<section class= "contact" >
    <div class="content"></div>
    <h2>Contact Us</h2>
    <p> You are welcome to Mystery Law, feel free to reach out to us with any issue. 
    </p>
</div>
<div class="container">
    <div class= "contactInfo">
        <div class="box">
            <div class ="icon"><i class ="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class ="text">
                    <h3>Address</h3>
                    <p>
                        45667 Sugar Coast Road<br>
                        Berekuso, Eastern Region<br>
                        Ghana<br>
                    </p>
                </div>
        </div>
        <div class="box">
            <div class ="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class ="text">
                    <h3>Phone </h3>
                    <p>
                       051-789-6758
                    </p>
                </div>
        </div>
        <div class="box">
            <div class ="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class ="text">
                    <h3>Email</h3>
                    <p>
                        mysterylaw@gmail.com
                    </p>
                </div>
        </div>
    </div>
    <div class= "contactForm">
        <form>
            <h2>Send Message</h2>
            <div class ="inputBox">
                <input type="text" name="name" required>
                <span>Full Name</span>
            </div>
            <br>
            <div class ="inputBox">
                <input type="email" name="email" required>
                <span>Email</span>
            </div>
            <br>
            <div class ="inputBox">
               <textarea required></textarea>
                <span>Type your message...</span>
            </div>
            <br>
            <br>
            <div class ="inputBox">
                <input type="submit" name="" value ="Send">
               
            </div>
        </form>

    </div>
</div>
</section>
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