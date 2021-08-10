<?php
require 'header.php';
session_start();
//if (time() < strtotime('+18 years', strtotime($_SESSION['user']['date'])))
?>
<!-- JS -->
<script src="JS/signup-form.js"></script>

<!-- CSS -->
<style>
    .no-display{
        display:none;
    }

    .display{
        visibility: visible;
    }
</style>


<div class="rest">
    <div class="titre titre-inscription">
            <h1> Mon <span class="titre-color">Inscription <span> </h1>
        </div>
        <div class="rest inscription-container">
            <div class="inscription-info">
                <!-- Etape 1 -->
                <h3> Etape 1 </h3>
                <div class="form-container" id="form-container1">
                    <form action="#" method=POST id="form1">
                        <h3> Mes informations personnelles </h3>
                        <input type="text" class="texte" placeholder="Prénom" name="prenom">
                        <input type="text" class="texte" placeholder="Nom" name="nom">
                        <input class="button" type="submit" name="button1" id="button1" value="Prochaine Etape"/>
                    </form>
                                
                </div>

                <!-- Etape 2 -->
                <h3> Etape 2 </h3>
                <div class="form-container">
                    <form action="#" method=POST style="display: none;">
                            <h3> Coordonnées de mon responsable légal </h3>
                            <input type="text" class="texte" placeholder="Nom du responsable" name="respnom">
                            <input type="text" class="texte" placeholder="Téléphone" name="resptel">
                            <input type="email" class="texte" placeholder="email" name="respmail">
                
                            <h3> Mes Coordonnées </h3>
                             <input type="email"  class="texte" placeholder="email" name="email">
                            <input type="text" class="texte" placeholder="téléphone" name="tel">
                        
                        <input class="button" type="submit" name="button2" value="Etape 2"/>

                    </form>    
                </div>

                <!-- Etape 3 -->
                <h3> Etape 3 </h3>
                <div class="form-container" style="display: none;">
                    <form action="#" method=POST>
                        <h3>Ceinture</h3>
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
                        <h3>Cours</h3>
                        <select name="cours" class="texte" required>
                            <option value="baby">baby gym_judo </option>
                            <option value="eveil">eveil-judo</option>
                            <option value="mini-poussin">mini-poussins</option>
                            <option value="poussins">poussins</option>
                            <option value="benjamins">benjamins</option>
                            <option value="minime">minime</option>
                            <option value="Cadet-junior-senior">Cadet-junior-senior</option>
                        </select>

                        <h3>Présence au cours </h3>
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
                        <input class="button" type="submit" name="button3" value="Etape 3"/>
                    </form>    
                </div>
            </div>
        </div>
</div>
<?php
    require 'footer.php';
?>
    <script src="JS/script.js"></script>
</body>

<!-- Autres

    