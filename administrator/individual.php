<?php 
include "../registration/database.php";
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
<div class="wrapper" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Individuals Details</h2>
                        <a href="individualForm.php" class="btn btn-info pull-right" target="_blank">Add New Individual</a>
                    </div>
                    <?php

                    // including database connection 
                   include '../registration/database.php';

                //    selecting specific rows from the individual table and displaying in a table
                //  allowing the administrator to add, read, edit and delete data
                    $sql = "SELECT individ_id,fname,lname,dob,gender,crimecommitted,case_id FROM individuals";
                    if($result = $conn->query($sql)){
                        if($result->num_rows > 0){
                            echo "<table class='table table-bordered table-striped table-responsive-lg'>";
                                echo "<thead>";
                                    echo "<tr>";
                                       
                                        echo "<th>ID</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Gender</th>";
                                        echo "<th>Date of Birth</th>";
                                        echo "<th>Crime Committed</th>";
                                        echo "<th>Case ID</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['individ_id'] . "</td>";
                                        echo "<td>" . $row['fname'] ." ". $row["lname"]. "</td>";
                                        echo "<td>" . $row['gender'] . "</td>";
                                        echo "<td>" . $row['dob'] . "</td>";
                                        echo "<td>" . $row['crimecommitted'] . "</td>";
                                        echo "<td>" . $row['case_id'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='individread.php?id=". $row['individ_id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open' style='color:red'></span></a>";
                                            echo "<a href='updateind.php?id=". $row['individ_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil' ></span></a>";
                                            echo "<a href='deleteind.php?id=". $row['individ_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash' style='color:black'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            $result->free();
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $conn->error;
                    }
                    
                    // Close connection
                    $conn->close();
                    ?>
                 </div>
            </div>       
                </div>
                </div>
                </div>
                </body>
</html>
 
