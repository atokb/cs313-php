
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="items.php">The King's Shop</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'items') echo 'bg-info'; ?>" href="items.php">The King's Items<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'view-cart') echo 'bg-info'; ?>" href="view-cart.php">Your Current Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'checkout') echo 'bg-info'; ?>" href="checkout.php">Checkout</a>
      </li>
    </ul>
  </div>
</nav>