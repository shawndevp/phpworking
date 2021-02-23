<?php

$dsn = "mysql:host=localhost;dbname=uppgift";
$user ="root";
$password= "";

$pdo = new PDO($dsn, $user, $password);

$idEdit = $_GET["id"];
$newMessage = $_GET["newMessage"];
$stm = $pdo->query("UPDATE entries SET message ='$newMessage' WHERE id=$idEdit");

if($stm->execute()){
    header("location:entries.php");
    
}
else{
    echo "Något gick fel!";
}