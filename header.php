<?php
  require 'links.php';
?>
<div class="header-logo">
    <div class="logo-container">
      <img class= "logo_club" src="image/logo_ojmb.png" alt="logo-test">
    </div>
    <div class="hamburger-menu" onclick="onClick()">
        <div class="ligne ligne-1"></div>
        <div class="ligne ligne-2"></div>
        <div class="ligne ligne-3"></div>
    </div>
    <nav class="navbar">
      <ul id="myDIV" class="nav-list">
        <li class="nav-item jaune">
          <a href="index.php" class="nav-link">Accueil </a>
        </li>
        <li class="nav-item">
          <a href="horaire.php" class="nav-link">Horaires</a>
        </li>

        <li class="nav-item">
          <a href="infrastructure.php" class="nav-link">Infrastructure</a>
        </li>
        <li class="nav-item">
            <a href="encadrement.php" class="nav-link">Encadrement</a>
        </li>
        <li class="nav-item">
            <a href="formules.php" class="nav-link">Formules</a>
        </li>
      </ul>
    </nav>
  <script src="JS/script.js?v=<?php echo time(); ?>"></script>
</div>







        