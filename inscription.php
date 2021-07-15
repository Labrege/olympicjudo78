<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/header.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="CSS/inscriptions.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Olympiquejudo78 </title>
</head>
<body>
    <header>
      <?php
          require 'header.php'
      ?>
    </header>
    <div class="titre titre-inscription">
            <h1> Mon <span class="titre-color">Inscription <span> </h1>
        </div>
        <div class="rest inscription-container">
            <div class="inscription-info">
                <div class="form-container">
                    <form action="traitement_info.php" method=POST>
                        <input type="text" placeholder="Nom" name="nom">
                        <input type="text" placeholder="Prénom" name="prenom">
                        <select name="Sexe" id="cars">
                            <option value="baby">baby gym</option>
                            <option value="judo">judo</option>
                            <option value="muscu">judo + musculation</option>
                        </select>
                        <input type="date" placeholder="01/01/2021" name="date">
                        <input type="email" placeholder="email" name="email">
                        <input type="text" placeholder="téléphone" name="tel">

                        <h3> Résponsable légal</h3>
                        <input type="text" placeholder="Nom du responsable" name="nom">
                        <input type="text" placeholder="Téléphone" name="prenom">
                        <input type="text" placeholder="Problème de santé" name="sante">
                        <h3>Ceinture</h3>
                        <select name="cars" id="cars">
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

                        <select name="cars" id="cars">
                            <option value="baby">baby gym_judo</option>
                            <option value="eveil">eveil-judo</option>
                            <option value="mini-poussin">mini-poussins</option>
                            <option value="poussins">poussins</option>
                            <option value="benjamins">benjamins</option>
                            <option value="minime">minime</option>
                            <option value="Cadet-junior-senior">Cadet-junior-senior</option>
                        </select>

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
    
        <footer style="text-align: center;">
		OlympicJudo78 Buchelay-Mantes | ALL RIGHTS RESERVED &#169 2021
	</footer>
    <script src="JS/script.js"></script>
</body>