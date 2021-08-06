<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "olympicjudo78";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
    
}else{
    echo "connexion a la base reussi";
}

