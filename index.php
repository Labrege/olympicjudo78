<?php
    require 'header.php'
?>
<div class="rest">
  <!-- La Page Index.php -->
  <div class="photo-container">
    <div class="container-image img1"> 
    </div>
    
    <div class="valeurs-container contenue_afficher">
        <div class="valeurs-texte">
          <h2> Judo</h2>
          <p> Sport pour tous les âges, pour toutes les morphologies, pour tous les caractères, des plus timides au plus extravertis, le judo représente une école de vie où l'éducation et le respect sont présents dans tous les enseignements.</p>
        </div>
    </div>
    <div class="valeurs-container contenue_cacher">
        <div class="valeurs-texte">
          <h2> Baby Gym-Judo </h2>
          <p>Développement de la motricité et de la coordination</p>
        </div>
    </div>
    <div class="valeurs-container contenue_cacher">
        <div class="valeurs-texte">
          <h2> Judo - Musculation</h2>
          <p> Pratique combinée du judo sous tous ses aspects (techniques, randori, kata….) et de la musculation. Judo, Ju-Jitsu (self-défense) et Taïso (préparation du corps à l'effort) 
            <br/>Accès illimité à la salle de musculation
          </p>
        </div>
    </div>
    <div class="pagination-wrapper">
      <svg class="button btn--prev" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
        <path d="M0-.5h24v24H0z" fill="none"/>
      </svg>
      
      <div class="pagination-container">
        <div class="little-dot  little-dot--first"></div>
        <div class="little-dot">
          <div class="big-dot-container">
            <div class="big-dot"></div>
          </div>
        </div>
        <div class="little-dot  little-dot--last"></div>
      </div>
      
      <svg class="button btn--next" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
        <path d="M0-.25h24v24H0z" fill="none"/>
      </svg>
    </div>
    

    <a href="#" class="btn-link">
      <div class="button-container">
        <h2> Je m'inscris </h2>
      </div>
    </a>
  </div>


  <div id="apropos">
    <div class="titre-fblanc">
        <h1> A Propos </h1>
    </div>
    <div class="container-boite">
      <div class="apropos-boite">
          <h2 class="apropos-titre"> NOUVEAU CLUB DE JUDO </h2>
          <br>
          <br>
          <p class="apropos-texte"> Dans le magnifique dojo de la plaine des Sports Grigore-Obreja situé à Buchelay, l'Olympic Judo 78 Buchelay-Mantes propose aux enfants, jeunes et adultes des cours de Baby Gym, Judo, Ju-Jitsu et Taïso adaptés à toutes les pratiques. Ils sont encadrés par un professeur expérimenté et diplômé d'état 2ème degré, Stéphane Brégeon, 6ème dan.</p>
      </div>
      <div class="apropos-boite">
        <img src="image/Logo_OJBM78_court.png" alt="logo">
      </div>
    </div>
  </div>


  <div id="reseaux-fond">
          <div class="titre-reseaux">
          <h1> Contactez-nous</h1>
          </div>
          <div class="reseaux-container">
              <div class="reseaux-boite1">
                  <a href="https://www.facebook.com/olympicjudo78" target="_blank">
                      <div class="reseaux-info">
                          <img src="image/facebook.png" alt="">
                          <h2> @Olympic Judo78</h2>
                      </div>
                  </a>
                  <a href="https://www.instagram.com/olympicjudo78/?hl=fr" target="_blank">
                      <div class="reseaux-info">
                          <img src="image/instagram.png" alt="">
                          <h2> Olympic Judo78 </h2>
                      </div>
                  </a>
                  <a href="#">
                      <div class="reseaux-info">
                          <img src="image/mail.png" alt="">
                          <a href="mailto:olympicjudo78@gmail.com"><h2>OlympicJudo78@gmail.com </h2></a>
                      </div>
                  </a>
              </div>
              <div class="reseaux-boite2">
              <h1> Restez informer </h1>
              <form action="#">
                  <input type="text" name="Nom" placeholder="Nom">
                  <input type="text" name="Prenom" placeholder="Prenom">
                  <input type="email" name="Email" placeholder="email@exemple.com">
                  <button class="bouton-valider"> Valider </button>
              </form>	
          </div>
      </div>    
  </div>
</div>

<?php
    require 'footer.php'
?>
  