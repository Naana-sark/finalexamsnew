<?php
session_start();
$errors = array(); 
include '../registration/database.php';
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['Username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['Username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>