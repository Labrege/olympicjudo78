<?php
if (isset($_POST["button1"])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $formule = $_POST["formule"];
    $date = $_POST["date"];
    $email=$_POST["email"];
    $tel = $_POST["tel"];


    $respnom = $_POST["respnom"];
    $resptel=$_POST["resptel"];
    $sante=$_POST["sante"];
    $ceinture=$_POST["ceinture"];
    $cours=$_POST["cours"];


    require_once 'db.inc.php';
    $date=date('Y-m-d');
    $sql= "INSERT INTO inscription (Nom,Prenom, Formule, Dates,Mail, Telephone, RespNom, Resptel, sante, ceinture, cours) 
    VALUES ('".$nom."','".$prenom."','".$formule."','".$date."','".$email."','".$tel."','".$respnom."','".$resptel."','". $sante."','".$ceinture."','".$cours."')";
    $resp1=mysqli_query($conn,$sql);              

    if ($resp1==false)
    {
        header("location: ../inscription.php?error=upload");
    }
    else{
        header("location: ../inscription.php?success=upload");
    }

}
?>