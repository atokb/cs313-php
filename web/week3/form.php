<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP Hackz</title>
</head>
<body>
<div class="jumbotron">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <legend>
    <h1>Leave a Review</h1>
    <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
    </div>
    <div>
    <label for="email">Email: </label>
    <input type="text" name="email">
    </div>
    <div>
    <label for="major">Major: </label>
    <input type="radio" name="major" value="compScience">
    </div>
    </legend>
    </form>
</div>
</body>
</html>