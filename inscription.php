<?php
require 'header.php'
?>
<div class="rest">

    <div class="titre titre-inscription">
            <h1> Mon <span class="titre-color">Inscription <span> </h1>
        </div>
        <div class="message">
                    <?php
                        if (isset($_GET["error"])){
                            if ($_GET["error"] == "upload"){
                                echo "<span class='error_message'> L'inscription a echouer veuiller rééssayer plus tard </span>";
                            }
                            if ($_GET["success"] == "upload"){
                              echo "<span class='success_message'> Inscription reussi </span>";
                            }
                        }
                    ?> 
            </div>
        <div class="rest inscription-container">
            <div class="inscription-info">
                <div class="form-container">
                    <form action="traitement_info.php" method=POST>
                        <input type="text" class="texte" placeholder="Nom" name="nom">
                        <input type="text" class="texte" placeholder="Prénom" name="prenom">
                        <input type="date" class="texte" placeholder="01/01/2021" name="date">
                        <input type="text" class="texte" placeholder="Problème de santé" name="sante">

                        <input type="email"  class="texte" placeholder="email" name="email">
                        <input type="text" class="texte" placeholder="téléphone" name="tel">

                        <h3> Résponsable légal 1</h3>
                        <input type="text" class="texte" placeholder="Nom du responsable" name="resp1nom">
                        <input type="text" class="texte" placeholder="Téléphone" name="resp1tel">
                        <input type="email" class="texte" placeholder="email" name="resp1mail">

                        <h3> Résponsable légal 2</h3>
                        <input type="text" class="texte" placeholder="Nom du responsable" name="resp2nom">
                        <input type="text" class="texte" placeholder="Téléphone" name="resp2tel">
                        <input type="email" class="texte" placeholder="email" name="resp2mail">

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

                        <select name="cours" class="texte">
                            <option value="baby">baby gym_judo</option>
                            <option value="eveil">eveil-judo</option>
                            <option value="mini-poussin">mini-poussins</option>
                            <option value="poussins">poussins</option>
                            <option value="benjamins">benjamins</option>
                            <option value="minime">minime</option>
                            <option value="Cadet-junior-senior">Cadet-junior-senior</option>
                        </select>

                        <div class="musculation">
                                <input type="checkbox" name="muscu" class="check" value=1 >
                                <label for="scales">Option musculation</label>
                        </div>

                        

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
                            <label for="scales">newsleter </label>
                        </div>

                        <div class="prix">220 €</div>
                        
                        <input class="button" type="submit" name="button1" value="S'inscrire"/>
                    </form>
                </div>

                <div class="explication-container">
                    <div class="explication-texte">
                        <h2> Et après ?</h2>
                        <p> Documents à fournir obligatoirement pour l’inscription :

                            Certificat médical avec mention (apte à pratiquer du judo et de la compétition):<br/>
                            -Cas 1 : J’ai fourni un certificat médical il y a moins de 3 ans ET je reconnais avoir rempli et avoir répondu «non» à toutes les questions du questionnaire de santé CERFA n°15699*01, je n’ai donc pas besoin de fournir de certificat médical cette année.<br/>
                            -Cas 2 : je suis nouvel adhérent OU mon dernier certificat médical date de plus de 3 ans OU j’ai répondu «oui» à au moins une des questions du CERFA n°15699*0, je dois donc fournir un certificat médical cette année. Pensez à prévenir le professeur en cas de problème de santé particulier (asthme, diabète, …) <br/>
                            -Photo d’identité <br/>
                            -Le règlement de la cotisation pour l’année 2020-2021 par chèque ou en liquide lors de votre premier passage au dojo ( possibilité de faire 3 chèques). <br/></div>
                </div>
            </div>
        </div>
</div>
<?php
    require 'footer.php';
?>
    <script src="JS/script.js"></script>
</body>