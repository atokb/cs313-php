<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">Ato Brown's Page</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'home') echo 'bg-info'; ?>" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($currentPage == 'assignments') echo 'bg-info'; ?>" href="assignments.php">Assignments</a>
      </li>
    </ul>
  </div>
</nav>