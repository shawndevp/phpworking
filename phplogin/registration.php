<?php 

$dsn = "mysql:host=localhost;dbname=logindb";
$user ="root";
$password= "";

$pdo = new PDO($dsn, $user, $password);

$username = $_POST["username"];
$password = $_POST["password"];
$name = $_POST["password"];

$sql ="INSERT INTO login (username, password, name) VALUES(:username_IN, :password_IN, :name_IN)";
$stm = $pdo->prepare($sql);
$stm ->bindParam(':username_IN', $username);
$stm ->bindParam(':password_IN', $password);
$stm ->bindParam(':name_IN', $name);


if($stm->execute()){
    header("location:mainpage.php");
    
}

else{
    echo "Något gick fel!";
}

