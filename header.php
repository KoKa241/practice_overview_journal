<?php
function checkCoockie() {
    if (isset($_COOKIE['user'])) {
        return true;
    } else {
        return false;
    }
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-success p-2 fixed-top" style="--bs-bg-opacity: .5;">
    <div class="container">
      <a class="navbar-brand" href="#">Review Journal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <?php
            if (checkCoockie()) {
                ?>
                <li class="nav-item">
                    <a class="nav-item nav-link active" href="profile.php">Username</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
             <?php   
            }
            else {
                echo "<li class='nav-item'>
                <a class='nav-link' href='register.php'>Register</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='login.php'>Login</a>
              </li>";
            }
            ?>
          
        </ul>
      </div>
    </div>
  </nav>
