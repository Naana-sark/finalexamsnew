<?php 
//start session
  session_start(); 

  if (!isset($_SESSION['Username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href = "admin.css" type = "text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body >

 <!-- Navbar begins -->
    <div class="topnav" id="myTopnav">
  
  <div class ="topnavright">
  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>

  </div>
  <div class="topnavcenter">
    <strong>Mystery Law</strong>
  </div>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
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
  <!-- The sidebar -->
<div class="sidebar">
  <br><br>
  <a href="index.php"><i class="fa fa-fw fa-home" aria-hidden="true"></i> Home</a><br><br>
  <a href="individual.php"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Individuals</a><br><br>
  <a href="lawyer.php"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Lawyers</a><br><br>
  <a href="judge.php"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Judges</a><br><br>
  <a href="cases.php"><i class="fa fa-fw fa-legal" aria-hidden="true"></i> Cases</a>
</div>


<div class="main" style="text-align:center;">

  
    <div class="col-sm-9">
      <div class="well">
     	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['Username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['Username']; ?></strong></p>
      <br><br>
       
       
    <?php endif ?>

      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
            <p>Text</p> 
            <p>Text</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>Text</p> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
</body>
</html>
