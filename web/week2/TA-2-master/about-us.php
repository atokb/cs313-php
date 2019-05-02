<?php
session_start();
$currentPage = 'about-us';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>PHP Hackz: About Us</title>
</head>
<body>
   <?php
    include('header.php');
  ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>PHP Hackz</h1>
        <blockquote class="blockquote">
  <p class="mb-0">Learning PHP is fun when you know how to hack PHP. Apply to our night classes today!</p>
  <button type="button" class="btn btn-primary">Apply</button>
  
</blockquote>
      </div>
    </div>
  </div>
</body>
</html>