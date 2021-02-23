<?php 

$dsn = "mysql:host=localhost;dbname=users";
$user ="root";
$password= "";

$pdo = new PDO($dsn, $user, $password);

$username = $_POST["username"];
$password = $_POST["password"];


$sql ="INSERT INTO users (username, password) VALUES(:username_IN, :password_IN)";
$stm = $pdo->prepare($sql);
$stm ->bindParam(":username_IN, $username");
$stm ->bindParam(":password_IN, $password");
$stm ->execute();



if ($stm->execute()){
    header("location:new.php");
    
}
    else {
        echo "Något gick fel!";
    }