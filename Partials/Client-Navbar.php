<nav class="navbar header-left fixed-left navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/LoyaltyKapperNew/Index.php"><span class="fas fa-stamp"></span> Kapper Loyalty</a>

  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav animate side-nav">
      <li class="nav-item">
        <a class="nav-link" href="/LoyaltyKapperNew/Client/Scanner.html" title="Scan">
          <span class="fas fa-qrcode"></span> Scan</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-md-auto d-md-flex">
      <?php if (!isset($_SESSION["client_id"])) : ?>
      <li class="nav-item">
        <a class="nav-link" href="/LoyaltyKapperNew/Login/Login.php">
          <span>
            <i class="fas fa-key"></i> Login</span>
        </a>
      </li>

      <?php else : ?>
      <li class="nav-item">
        <a class="nav-link" href="/LoyaltyKapperNew/Client/Profile.php">
          <i class="fas fa-user"></i> Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/LoyaltyKapperNew/Login/LogOutPagina.php">
          <i class="fas fa-key"></i> Logout</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>