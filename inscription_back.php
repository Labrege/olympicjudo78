<?php
if(isset($_POST['submit'])){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $date = $_POST['dob'];
    $resp1nom = $_POST['resp1nom'];
    $resp1tel = $_POST['resp1tel'];
    $resp1mail = $_POST['resp1mail'];
    if ( isset($_POST['resp2nom']))
    {$resp2nom = $_POST['resp2nom'];}
    else{$resp2nom = " ";}
    if ( isset($_POST['resp2tel']))
    {$resp2tel = $_POST['resp2tel'];}
    else{$resp2tel = " ";}
    if ( isset($_POST['resp2mail']))
    {$resp2mail = $_POST['resp2mail'];}
    else{$resp2mail = " ";}
    
    $mail = $_POST['email'];
    $tel = $_POST['tel']; 
    $ceinture = $_POST['ceinture'];    
    $cours = $_POST['cours'];
    $droitimage = $_POST['droitimage'];    
    $newsletter = $_POST['newsletter'];    
    $muscu = $_POST['muscu'];
    
    $mardi=$_POST['mardi'];
    $mercredi=$_POST['mercredi'];
    $vendredi=$_POST['vendredi'];
    $samedi=$_POST['samedi'];
    $frere=0;
    $sante=" ";
    require_once 'db.inc.php';
    
    $sql= "INSERT INTO inscription (Nom,Prenom, Dates,Mail, Telephone, Resp1Nom, Resp1tel, Resp1mail, Resp2Nom, Resp2tel, Resp2mail, sante, ceinture, cours,musculation,Frere,Mardi,Mercredi,Vendredi,Samedi) 
    VALUES ('".$nom."','".$prenom."','".$date."','".$mail."','".$tel."','".
    $resp1nom."','".$resp1tel."','".$resp1mail."','".$resp2nom."','".$resp2tel."','".$resp2mail."','".
     $sante."','".$ceinture."','".$cours."','".$muscu."','".$frere."','".$mardi."','".
     $mercredi."','".$vendredi."','".$samedi."')";
    
    $resp1=mysqli_query($conn,$sql);              

    if ($resp1==false)
    {
        echo "<p>inscription a echoue veuillez recomencer plus tard.</p>";
    }
    else{
        echo "<p>inscription validé merci et a bientot </p>";
    }
}
?>