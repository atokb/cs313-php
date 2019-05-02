<?php
session_start();
$currentPage = 'login';
if (isset($_REQUEST["user"])) {
  $user = $_REQUEST["user"];
  if ($user == "none") {
    session_unset();
    session_destroy();
    header("Location: home.php");
  } else {
    $_SESSION["user"] = $user;
    header("Location: home.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>PHP Hackz Login</title>
</head>
<body>
  <?php
    include('header.php');
  ?>
  <?php
  if (!isset($_SESSION["user"])) {
    echo "<div class=\"container\"><div class=\"d-flex justify-content-center\" style=\"margin-top: 350px;\"><button type=\"button\" class=\"btn btn-primary\"><a href=\"?user=Admin\" class=\"text-white\">Admin Login</a></button><button type=\"button\" class=\"btn btn-primary\"><a href=\"?user=Tester\" class=\"text-white\">Tester Login</a></button></div></div>";
  }
  else {
   echo "<div class=\"container\"><h1>Click below to logout:</h1><a href=\"?user=none\" class=\"button\">Logout</a>
   </div>";
  }
?>
</body>
</html>