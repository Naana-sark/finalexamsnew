<?php 
//start session
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

  ?>
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
  <!-- The sidebar -->
<div class="sidebar">
  <br><br>
  <a href="individual.php"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Individuals</a><br><br>
  <a href="lawyer.php"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Lawyers</a><br><br>
  <a href="judge.php"><i class="fa fa-fw fa-user" aria-hidden="true"></i> Judges</a><br><br>
  <a href="#clients"><i class="fa fa-fw fa-gavel" aria-hidden="true"></i> Court Procedures</a><br><br>
  <a href="cases.php"><i class="fa fa-fw fa-legal" aria-hidden="true"></i> Cases</a>
</div>


<div class="main" style="text-align:center;">


<?php

//check connection
include 'database.php';


//calculate the total number of judges
$result1=mysqli_query($conn,"SELECT count(*) as total from judges");
$data=mysqli_fetch_assoc($result1);
echo "<strong> Total number of judges in the table are : </strong> ";
echo  $data['total'];
echo "<br>";
echo "<br>";

//selecting all from the judges table and displaying in a table
$sql = "SELECT * FROM judges";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Judge ID</th><th>Name</th><th>Case ID</th><th>Gender</th>
    <th>Contact</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["judge_id"]. "</td><td>" . $row["fname"]. " " . $row["lname"]. "</td><td>" .
         $row["case_id"]. "</td><td>" . $row["gender"]. "</td><td>"  . $row["contactnum1"]. 
         "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



$conn->close();
?>
</body>
</html>