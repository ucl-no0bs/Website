<?php
session_start();

include_once('../model/db_connection.php');

include_once('../model/model_signup.php');

// in safe version: check if user already exists before adding

// add user/pw to database (with hash in safe version)
add_user($_POST['username'], $_POST['password']);

//sends email to user
sendEmail($_POST[username]);

// store the username during this session, and redirect to home page.
$_SESSION['current_user'] = $_POST['username'];
echo "<a href='../view/view_home.php'>Go to home page</a>";
//echo "<script> window.location.assign('../view/view_home.php'); </script>";
// for convenience to us, just redirect to login_view.php page
 ?>
