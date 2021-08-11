<?php
require 'header.php';
session_start();
//if (time() < strtotime('+18 years', strtotime($_SESSION['user']['date'])))
?>
<!-- JS -->
<script src="JS/signup-form.js?v=<?php echo time(); ?>"></script>

<!-- CSS -->
<style>
    .no-display{
        display:none;
    }

    .display{
        visibility: visible;
    }

    .disabled{
        background-color: #cccccc;
    }
</style>


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
                        <input type="date" class="texte" placeholder="date" name="dob">
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
                        <h3> Coordonnées de mon responsable légal </h3>
                        <input type="text" class="texte" placeholder="Nom du responsable" name="respnom">
                        <input type="text" class="texte" placeholder="Téléphone" name="resptel">
                        <input type="email" class="texte" placeholder="email" name="respmail">
                    
                        <button type="button" class="button" name="retour1"> Back </button>
                        <button type="button" class="button" name="etape2"> Next </button>                   
                    </div>

                    <!-- Etape 3 -->
                    <h2> Etape 3 </h2>
                    <div class="form-container no-display" id="form-container3">
                            <h3>Judo</h3>
                            <h4>Ceinture</h4>
                            <select name="ceinture" class="texte">
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
                                <option value="noir">noir</option>
                            </select>
                            <h4>Cours</h4>
                            <select name="cours" class="texte" required>
                                <option value="baby">baby gym_judo </option>
                                <option value="eveil">eveil-judo</option>
                                <option value="mini-poussin">mini-poussins</option>
                                <option value="poussins">poussins</option>
                                <option value="benjamins">benjamins</option>
                                <option value="minime">minime</option>
                                <option value="Cadet-junior-senior">Cadet-junior-senior</option>
                            </select>

                            <h4>Présence au cours </h4>
                            <div class="presence">
                                <div class="jours">
                                    <input type="checkbox" name="mardi" class="check" value=1 >
                                    <label for="scales">Mardi</label>
                                </div>
                                <div class="jours">
                                    <input type="checkbox" name="mercredi" class="check" value=1 >
                                    <label for="scales">Mercredi</label>
                                </div>
                                <div class="jours">
                                    <input type="checkbox" name="vendredi" class="check" value=1 >
                                    <label for="scales">Vendredi</label>
                                </div>
                                <div class="jours">
                                    <input type="checkbox" name="samedi" class="check" value=1 >
                                    <label for="scales">Samedi</label>
                                </div>
                            </div>

                            <div class=droit>
                                <input type="checkbox" name="droitimage" value=1 checked>
                                <label for="scales">Autoriser le droit a l'image</label>
                            </div>
                            <div class=droit>
                                <input type="checkbox" name="newsleter" value=1 checked>
                                <label for="scales">Recevoir la newsleter </label>
                            </div>
                            <div class="musculation">
                                    <input type="checkbox" name="muscu" class="check" value=1 >
                                    <label for="scales">Option musculation <i class="fa fa-info-circle" aria-hidden="true" title="salle de musculation"></i></label>
                            </div>
                            <div class="prix">220 €</div>

                            <button type="button" class="button" name="retour2"> Back </button>
                            <button type="button" class="button" name="Finaliser"> Finish </button>
                    </div>
                </form>
            </div>
        </div>
</div>
<?php
    require 'footer.php';
?>
    <script src="JS/script.js"></script>
</body>

<!-- Autres

    