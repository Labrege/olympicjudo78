
<?php
require 'links.php';
?>
<title> Inscription en ligne</title>
<meta name="description" content="L'inscription en ligne est maintenant disponible, on vous attend!!">
</head>

<?php
require 'header.php';
session_start();
//if (time() < strtotime('+18 years', strtotime($_SESSION['user']['date'])))
?>
<!-- JS -->
<script src="JS/signup-form.js?v=<?php echo time(); ?>"></script>
<script src="JS/jquery.cosyAlert.js?v=<?php echo time(); ?>"></script>

<!-- CSS -->
<style></style>


<div class="rest">
    
    <div class="titre titre-inscription">
            <h1> Mon <span class="titre-color">Inscription <span> </h1>
        </div>
        <div class="rest inscription-container">
            <div class="inscription-info">
                <!-- Etape 1 -->
                <form action="#" method=POST id="form1">
                <h2> Etape 1 </h2>
                    <div class="form-container display" id="form-container1">
                        <h3> Mes informations personnelles </h3>
                        <input type="text" class="texte" placeholder="Prenom" name="prenom">
                        <input type="text" class="texte" placeholder="Nom" name="nom">
                        <div class="sexe">
                            <h4>Sexe</h4>
                            <br>
                            <input type="radio" placeholder="M" name="sexe" value="M">
                            M <br><br>
                            <input type="radio" placeholder="F" name="sexe" value="F">
                            F <br>
                        </div>
                    
                        <input type="date" class="texte" placeholder="date" name="dob">
                        <input type="texte" class="texte" placeholder="Lieu de résidence (Ville)" name="ville">
                        <button type="button" class="button" name="etape1"> Next </button>                   
                    </div>

                    <!-- Etape 2 -->
                    <h2> Etape 2 </h2>
                    <div class="form-container no-display" id="form-container2a">
                        <h3> Mes Coordonnées </h3>
                        <input type="email"  class="texte" placeholder="email" name="email">
                        <input type="text" class="texte" placeholder="téléphone" name="tel">
                    
                        <button type="button" class="button" name="retour1"> Back </button>
                        <button type="button" class="button" name="etape2"> Next </button>                   
                    </div>

                    <div class="form-container no-display" id="form-container2b">
                        <h3> Coordonnées de mon responsable légal 1 </h3>
                        <input type="text" class="texte" placeholder="Nom du responsable" name="resp1nom">
                        <input type="text" class="texte" placeholder="Téléphone" name="resp1tel">
                        <input type="email" class="texte" placeholder="email" name="resp1mail">

                        <h3> Coordonnées de mon responsable légal 2 </h3>
                        <input type="text" class="texte" placeholder="Nom du responsable" name="resp2nom">
                        <input type="text" class="texte" placeholder="Téléphone" name="resp2tel">
                        <input type="email" class="texte" placeholder="email" name="resp2mail">
                    
                        <button type="button" class="button" name="retour1"> Back </button>
                        <button type="button" class="button" name="etape2"> Next </button>                   
                    </div>

                    <!-- Etape 3 -->
                    <h2> Etape 3 </h2>
                    <div class="form-container no-display" id="form-container3">
                            <h3>Judo</h3>
                            <h4>Ceinture</h4>
                            <select name="ceinture" class="texte">
                                <option value="vide">    </option>
                                <option value="blanche">blanche</option>
                                <option value="blanche-jaune">blanche-jaune</option>
                                <option value="jaune">jaune</option>
                                <option value="jaune-orange">jaune-orange</option>
                                <option value="orange">orange</option>
                                <option value="orange-verte">orange-verte</option>
                                <option value="verte">verte</option>
                                <option value="verte-bleu">verte-bleu</option>
                                <option value="bleu">bleu</option>
                                <option value="marron">marron</option>
                                <option value="noir">noire</option>
                            </select>
                            <h4>Cours</h4>
                            <select name="cours" class="texte" required>
                                <option value="vide">    </option>
                                <option value="baby">baby gym_judo </option>
                                <option value="eveil">eveil-judo</option>
                                <option value="mini-poussin">mini-poussins</option>
                                <option value="poussins">poussins</option>
                                <option value="benjamins">benjamins</option>
                                <option value="minime">minime</option>
                                <option value="Cadet-junior-senior">Cadet-junior-senior</option>
                            </select>

                            <div class="musculation no-display">
                                    <input type="checkbox" name="muscu" class="check" value=musculation >
                                    <label for="scales">Option musculation <i class="fa fa-info-circle" aria-hidden="true" title="salle de musculation"></i></label>
                            </div>

                            <h4>Présence au cours </h4>
                            <div class="presence">
                                <div class="jours mardi no-display">
                                    <input type="checkbox" name="mardi" class="check" value=1 >
                                    <label for="scales">Mardi</label>
                                </div>
                                <div class="jours mercredi no-display">
                                    <input type="checkbox" name="mercredi" class="check" value=1 >
                                    <label for="scales">Mercredi</label>
                                </div>
                                <div class="jours vendredi no-display">
                                    <input type="checkbox" name="vendredi" class="check" value=1 >
                                    <label for="scales">Vendredi</label>
                                </div>
                                <div class="jours samedi no-display">
                                    <input type="checkbox" name="samedi" class="check" value=1 >
                                    <label for="scales">Samedi</label>
                                </div>
                            </div>

                            <div class=droit>
                                <input type="checkbox" name="droitimage" id="droitImage" value=droitImage checked>
                                <label for="scales">Autoriser le droit a l'image de le cadre de la promotion et de l'information autour du club</label>
                            </div>

                            <div class=droit>
                                <input type="checkbox" name="newsletter" value=newsletter checked>
                                <label for="scales">Recevoir la newsleter et toutes informations importantes du club </label>
                            </div>

                            <div class="prix">
                                <h4>Prix a titre indicatif</h4>
                                <label for="scales" class="180  "> 180 €</label>
                                <label for="scales" class="220 no-display"> 220 €</label>
                                <label for="scales" class="330 no-display"> 330 €</label>
                                <p> prix hors promotion buchelois -10% et famille nombreuse: -10% deuxième enfant, -20% troisième enfant et plus . <br>règlement à effectuer lors des premiers cours</p>
                            </div>
                           

                            <button type="button" class="button" name="retour2"> Back </button>
                            <button type="button" class="button" name="finaliser"> Finish </button>
                    </div>
                </form>
                <div class="message"></div>
            </div>
        </div>
</div>
<?php
    require 'footer.php';
?>
<?php
    require 'links.php'
?>
    <script src="JS/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</body>

<!-- Autres

    