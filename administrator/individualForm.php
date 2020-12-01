<?php 
include "../registration/database.php";
//start session
  session_start(); 

  if (!isset($_SESSION['Username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
 
  if(isset($_POST["submit"])){
    $vid= $_POST["id"];
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $crimec = $_POST["crimec"];
   
    
  
  
    if(isset($_POST["yes"])){
        $crimecom = $_POST["crimeC"];
        $caseI = $_POST["caseid"];
        
    }
    
    include "../registration/database.php";
    
        if($crimec == "no"){
            $ins= "INSERT INTO `individuals`(`individ_id`, `fname`, `lname`, `gender`, `dob`)
             VALUES ('$vid','$firstname','$lastname','$gender','$dob')";
        }
        if($crimec == "yes"){
            $crimecom = $_POST["crimeC"];
            $caseI = $_POST["caseid"];
            

            $ins= "INSERT INTO `individuals`(`individ_id`, `fname`, `lname`, `gender`, `dob`, `crimecommitted`, `case_id`)
             VALUES ('$vid','$firstname','$lastname','$gender','$dob','$crimecom','$caseI')";
            //  echo $ins;
            //  return $ins;

        }


        if($conn->query($ins)){
                echo "New individual inserted successfully";
                header('location: individual.php');
        }
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

<!-- individual form-->
<div  class="container"id="form-special">
       <h3 style="text-align:center;">Individual Form</h3>
        <form id = "pageForm" action="individualForm.php" method="POST">
            <div class="form-group">
                <br><label for = "ID"> Any form of ID Number</label>
                <input id = "id" class="form-control" name = "id" type = "text" required><br>
                <label for = "fname"> First Name</label>
                <input id = "fname" class="form-control" name = "fname" type = "text" required><br>
                <label for = "lname"> Last Name</label>
                <input id = "lname" class="form-control" name = "lname" type = "text" required><br>
                <label for = "genderField"> Gender</label>
                <select id = "genderField" class="form-control" name = "gender">
                    <option value="Gender" selected hidden>Gender</option>
                    <option value="male"> Male</option>
                    <option value="female"> Female</option>
                    <option value="other"> Other</option>
                </select><br>
                <label for = "dob"> Date of Birth</label>
                <input id = "dob" class="form-control" name = "dob" type = "date" required><br>
                <label for = "crimec"> Committed any crime</label> 
                <select id = "crimec" class="form-control" name = "crimec" required><br>
                    <option value="crimec" selected hidden>Committed any Crime?</option>
                    <option id = "yes" value="yes">Yes</option>
                    <option id = "no" value="no">No </option>
                </select>
                <div id = "parent"></div>
                <br>
                <br>
                
                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                <br>
             
               

                </div>
        </form>
</div>
<script src="formv.js"></script>
</body>
</html>