

<?php

//check connection
include 'database.php';

//start session 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

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