<?php

$servername = "mysql.hostinger.fr";
$dbusername = "u556000132_antoinebregeon";
$dbpassword = "Maxime@2004";
$dbname = "u556000132_olympicjudo78";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}
