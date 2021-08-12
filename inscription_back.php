<?php
if(isset($_POST['submit'])){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $dob = $_POST['dob'];
    $respnom = $_POST['respnom'];
    $resptel = $_POST['resptel'];
    $respmail = $_POST['respmail'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $jours = $_POST['jours'];    
    $ceinture = $_POST['ceinture'];    
    $cours = $_POST['cours'];
    $droitimage = $_POST['droitimage'];    
    $newsletter = $_POST['newsletter'];    
    $muscu = $_POST['muscu'];
    
    foreach ($jours as $v){
        echo $v;
    }
    echo $email;
    //echo $prenom, $nom, $dob, $respnom, $resptel, $resptel, $email, $tel, $ceinture, $cours, $droitimage, $newsletter, $muscu;
}
?>