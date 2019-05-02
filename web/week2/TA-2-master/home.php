<?php
session_start();
$currentPage = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>PHP Hackz</title>
  <style>

  </style>
</head>
<body>
  <?php
    include('header.php');
  
    if (!isset($_SESSION["user"])) {
       echo "<div class=\"jumbotron\">";
       echo "<h1 class=\"display-4\">Welcome, User";
       echo "</h1>";
       echo "<p class=\"lead\">The most amazing app you've ever seen</p>";
       echo "<hr class=\"my-4\">";
       echo "<p>Please login before continuing...</p>";
       echo "<a class=\"btn btn-primary btn-lg\" href=\"login.php\" role=\"button\">Login</a>";
    } else {
       echo "<div class=\"jumbotron\">";
       echo "<h1 class=\"display-4\">Welcome, "; 
       ECHO $_SESSION["user"]; 
       echo "</h1>";
       echo "<p class=\"lead\">The most amazing app you've ever seen</p>";
       echo "<hr class=\"my-4\">";
       echo "<h3>You are logged in!</h3>";
    }
  ?>
</div>
</body>
</html>