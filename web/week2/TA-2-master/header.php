<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PHP Hackz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'home') echo 'bg-danger'; ?>" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'about-us') echo 'bg-danger'; ?>" href="about-us.php">About Us</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'login') echo 'b-danger'; ?>" href="login.php"><?php if (!isset($_SESSION["user"])) {echo "Login";} else { echo "Logout";}?></a>
      </li>
    </ul>
  </div>
</nav>