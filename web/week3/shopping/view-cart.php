<?php
session_start();
$currentPage = 'view-cart';

include('products-array.php');


?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">   
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="/main.css">      
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Kings-Cart</title>
  </head>
  <body>
    <?php
    include('header.php');
    ?>
    <?php
    if ( isset($_SESSION["cart"]) ) {
    ?>
    <div class="jumbotron">
      <h2>Your Cart</h2>
      <table>
        <tr>
          <th>Items</th>
          <th>&nbsp;</th>
          <!--images-->
          <th></th>
          <th>&nbsp;</th>
          <th>Qty</th>
          <th>&nbsp;</th>
          <th>Price</th>
          <th>&nbsp;</th>
          <th>Action</th>
        </tr>
        <?php
        $total = 0;
        foreach ( $_SESSION["cart"] as $i ) {
        ?>
        <tr>
          <td><?php echo( $items[$_SESSION["cart"][$i]] ); ?></td>
          <td>&nbsp;</td>
          <td><?php echo( $_SESSION["images"][$i] ); ?></td>
          <td>&nbsp;</td>
          <td><?php echo( $_SESSION["qty"][$i] ); ?></td>
          <td>&nbsp;</td>
          <td><?php echo( $_SESSION["price"][$i] ); ?></td>
          <td>&nbsp;</td>
          <td><a href="?delete=<?php echo($i); ?>">Delete from cart</a></td>
        </tr>
        <?php
        $total = $total + $_SESSION["price"][$i];
        }
        $_SESSION["total"] = $total;
        ?>
        <tr>
          <td colspan="7">Total Price : <?php echo($total); ?></td>
        </tr>
      </table>
      <?php
      }
      ?>
      <div>
        <a href="?reset=true">Reset cart</a>
      </div>
      <hr>
      <div class="column">
        <div>
          <a href="items.php">Continue Shopping</a>
        </div>
        <div>
          <a href="checkout.php">Proceed to Checkout</a>
        </div>
      </div>
    </div>
  </body>
</html>