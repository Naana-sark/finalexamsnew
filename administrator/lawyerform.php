<?php 
include "../registration/database.php";
//start session
  session_start(); 

  if (!isset($_SESSION['Username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

  if(isset($_POST["submit"])){
    $id= $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $case_id=$_POST["case_id"];
    $contact=$_POST["contact"];
    $gender=$_POST["gender"];
  
   
 $INSERT = "INSERT into lawyer (lawyer_id,fname, lname, case_id, gender, contactnum1) 
            values ('$id', '$fname', '$lname', '$case_id', '$gender', '$contact')";
    

    if($conn->query($INSERT)){
        echo "New individual inserted successfully";
        header('location: lawyer.php');
    }
        // header("Refresh:0");
    else{
        echo "\nError: ". $conn->error;
    }


    $conn->close();
}


  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href = "style.css" type = "text/css">
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


<div class="main">
    <!--form for lawyers-->
    <div  class="container"id="form-special">
       <h3 style="text-align:center;">Lawyer Form</h3>
        <form id = "pageForm" action="ind.php" method="POST">
            <div class="form-group">
                <br><label for = "lawyer_ID">ID</label>
                <input id = "id" class="form-control" name = "id" type = "text" required><br>
                <label for = "fname"> First Name</label>
                <input id = "fname" class="form-control" name = "fname" type = "text" required><br>
                <label for = "lname"> Last Name</label>
                <input id = "lname" class="form-control" name = "lname" type = "text" required><br>
                <label for = "case_ID"> Case ID</label>
                <input id = "case_id" class="form-control" name = "case_id" type = "text" required><br>
                <label for = "genderField"> Gender</label>
                <select id = "genderField" class="form-control" name = "gender">
                    <option value="Gender" selected hidden>Gender</option>
                    <option value="male"> Male</option>
                    <option value="female"> Female</option>
                    <option value="other"> Other</option>
                </select><br>
                <label for = "contact"> Contact</label>
                <input id = "contact" class="form-control" name = "contact" type = "tel" required><br>
                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                
                
                </div>
        </form>
    </div>
</div>
</body>
</html>   