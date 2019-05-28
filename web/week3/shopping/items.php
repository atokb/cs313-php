<?php
session_start ();
$currentPage = 'items';

include('products-array.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="/main.css">
      <title>Kings-Items</title>
  </head>
  <body>
    <?php
    include('header.php');
    ?>
    <div class="jumbotron">
      <h2>The King's Items</h2>
      <table>
        <tr>
          <th>Items</th>
          <th>&nbsp;</th>
          <!-- images -->
          <th></th>
          <th>&nbsp;</th>
          <th>Price</th>
          <th>&nbsp;</th>
          <th>Action</th>
        </tr>
        <?php
        for ($i=0; $i < count($items); $i++) {
        ?>
        <tr>
          <td><?php echo($items[$i]); ?></td>
          <td>&nbsp;</td>
          <td><img src=<?php echo express.jpg ?>><?php echo($images[$i]); ?></td>
          <td>&nbsp;</td>
          <td><?php echo($price[$i]); ?></td>
          <td>&nbsp;</td>
          <td><a href="?add=<?php echo($i); ?>">Add to cart</a></td>
        </tr>
        <?php
        }
        ?>
      </table>
      <hr>
      <div>
       <a href="view-cart.php">View Cart</a>
      </div>
    </div>
  </body>
</html>