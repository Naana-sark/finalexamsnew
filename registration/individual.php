<?php

//check connection
include 'database.php';
//start session
session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
//calculate the total number of individuals
$result1=mysqli_query($conn,"SELECT count(*) as total from individuals");
$data=mysqli_fetch_assoc($result1);
echo "<strong> Total number of individuals in the table are : </strong> ";
echo  $data['total'];
echo "<br>";
echo "<br>";

//selecting all from the individual table and displaying in a table
$sql = "SELECT * FROM individuals";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Gender</th><th>Date of Birth</th>
    <th>Crime Committed</th><th>Case ID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fname"]. " " . $row["lname"]. "</td><td>" .
         $row["gender"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["crimecommitted"]. "</td><td>" . $row["case_id"]. 
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
