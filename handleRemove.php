<?php

$dsn = "mysql:host=localhost;dbname=uppgift";
$user ="root";
$password= "";

$pdo = new PDO($dsn, $user, $password);

$idRemove = $_GET["id"];
$stm = $pdo->query("DELETE FROM entries WHERE id=$idRemove");

if($stm->execute()){
    header("location:entries.php");
    
}
else{
    echo "Något gick fel!";
}