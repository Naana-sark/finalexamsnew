<?php 
include "../registration/database.php";
//start session
  session_start(); 

  if (!isset($_SESSION['Username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

//getting the id and displaying in the form
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    $id=$_GET['id'];
    
    $sql= "SELECT fname,lname,dob,gender,crimecommitted FROM individuals where individ_id = '$id' ";
    $result=$conn->query($sql);
    if($result->num_rows>0){
    
        while($row=$result->fetch_assoc()){
            $fname = $row['fname'];
            $lname= $row['lname'];
            $dob = $row['dob'];
            $gender = $row['gender'];
            $crimeC=$row['crimecommitted'];

           
        }
    }
    else{
        echo "0 results";
    }
    
    }
    //update the information in the database
    
    if (isset($_POST["update"])){
        $id=$_POST['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname']; 
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $crimeC=$_POST['crimeC'];
      
        $up="UPDATE `individuals` SET `fname`='$fname',`lname`='$lname',`gender`= '$gender',
        `dob`='$dob',`crimecommitted`='$crimeC'  WHERE `individ_id`='$id'";
        // echo $up;
        // return $up;
    
        if($conn->query($up)){
            echo "Updated";
            header('location: individual.php');
        }
        else{
            echo "\nError: ". $conn->error;
        }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
   
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
<div  class="container"id="form-special">
       <h3 style="text-align:center;">Update Individual Form</h3>
        <form id = "update_form" action="updateind.php" method="POST">
            <div class="form-group">
              
                <input id = "id" name = "id" type = "hidden" value="<?php echo $id; ?>"><br>
       
         
                <label for = "fname"> First Name</label>
                <input id = "fname" class="form-control" name = "fname" type = "text" value="<?php echo $fname; ?>" required><br>
               
           
                <label for = "lname"> Last Name</label>
                <input id = "lname" class="form-control" name = "lname" type = "text" value="<?php echo $lname; ?>" required><br>
                <label for = "genderField"> Gender</label>
                <select id = "genderField" class="form-control" name = "gender" value="<?php echo $gender; ?>" required>
                    <option value="Gender" selected hidden>Gender</option>
                    <option value="male"> Male</option>
                    <option value="female"> Female</option>
                    <option value="other"> Other</option>
                </select><br>
                <label for = "dob"> Date of Birth</label>
                <input id = "dob" class="form-control" name = "dob" type = "date"  value="<?php echo $dob; ?>" required><br>
              
                <br>
                <label for = "crimeC"> Crime Committed</label>
                <input id = "crimeC" class="form-control" name = "crimeC" type = "text"  value="<?php echo $crimeC; ?>" ><br>
               
              
                <button class="btn btn-primary" name="update" value= "update" type="submit">Update</button>
                <br>
               
               
                </div>
        </form>
    </div>
</body>
</html>