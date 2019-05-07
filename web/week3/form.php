<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Hackz</title>
</head>
<body>
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
    <input type="text" name="major">
    </div>
    </legend>
    </form>
</body>
</html>