<?php
  require 'links.php';
?>
<div class="header-logo">
    <div class="logo-container">
      <a href="index.php"><img class= "logo_club" src="image/logo_ojmb.png" alt="logo-test"></a>
    </div>
    <div class="hamburger-menu" onclick="onClick()">
        <div class="ligne ligne-1"></div>
        <div class="ligne ligne-2"></div>
        <div class="ligne ligne-3"></div>
    </div>
    <nav class="navbar">
      <ul id="myDIV" class="nav-list">
        <li class="nav-item
        <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'index.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">
          <a href="index.php" class="nav-link">Accueil </a>
        </li>

        <li class="nav-item 
        <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'horaire.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">
          <a href="horaire.php" class="nav-link">Horaires</a>
        </li>

        <li class="nav-item
        <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'infrastructure.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">
          <a href="infrastructure.php" class="nav-link">Infrastructures</a>
        </li>

        <li class="nav-item
        <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'encadrement.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">
            <a href="encadrement.php" class="nav-link">Encadrement</a>
        </li>
        <li class="nav-item
        <?php 
          if(strpos($_SERVER['REQUEST_URI'], 'formules.php') !== false){
              echo 'jaune';
          }else{
              echo "";
          }
        ?>">
            <a href="formules.php" class="nav-link">Formules</a>
        </li>
      </ul>
    </nav>
  <script src="JS/script.js?v=<?php echo time(); ?>"></script>
</div>







        