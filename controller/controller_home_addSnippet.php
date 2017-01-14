<?php
session_start();

include_once('../model/db_connection.php');

include_once('../model/model_home.php');

if (isset($_GET["csrf"]) && $_GET["csrf"] == $_SESSION["token"])
    add_snippet($_SESSION['current_user'], $_POST['snippet'], $_POST['isPublic']);
else
    echo "ohohoh no csrf in here boy";

//echo "<script> window.location.assign('../view/view_home.php'); </script>";
echo "<a href='../view/view_home.php'>Go to home page</a>";

 ?>
