<?php
session_start();

include_once('../model/db_connection.php');

include_once('../model/model_home.php');


add_snippet($_SESSION['current_user'], $_POST['snippet'], $_POST['isPublic']);

// How to simulate the CSRF vulnerability:
// You add a snippet with this JS script: window.open('http://localhost:8888/Scenario3/Bad-Guys/'), or you just click on the button created for the simulation.
//Note that the attacker's website should be in a separate directory (to prove that our hack is indeed a CSRF attack")


//echo "<script> window.location.assign('../view/view_home.php'); </script>";
echo "<a href='../view/view_home.php'>Go to home page</a>";

 ?>
