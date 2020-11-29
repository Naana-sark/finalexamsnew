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
    <!-- <a href="index.php" >Home</a>
  <div class="dropdown">
    <button class="dropbtn">Law Worker 
      <i class="fa fa-caret-down" aria-hidden="true"></i>
    </button>
    <div class="dropdown-content">
      <a href="../registration/register.php">Signup</a>
      <a href="../registration/login.php">Log In</a>
      
    </div>
  </div> -->
  <div class ="topnavright">
  <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
  <a href="../home/index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
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

<?php

//check connection
include 'database.php';

//start session 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

//calculate the total number of cases
$result1=mysqli_query($conn,"SELECT count(*) as total from cases");
$data=mysqli_fetch_assoc($result1);
echo "<strong> Total number of cases in the table are : </strong> ";
echo  $data['total'];
echo "<br>";
echo "<br>";

//selecting from the individuals and cases table and displaying in a table
$sql = "SELECT individuals.crimecommitted,cases.case_id,cases.case_verdict,
        cases.court_procedures FROM cases, individuals where cases.case_id=individuals.case_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Crime Committed</th><th>Case ID</th><th>Case Verdict</th><th>Court Procedures</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["crimecommitted"]. "</td><td>"  . $row["case_id"].
         "</td><td>"  . $row["case_verdict"]. "</td><td>" . $row["court_procedures"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
