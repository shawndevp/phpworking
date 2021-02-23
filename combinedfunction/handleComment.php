<?php 

$dsn = "mysql:host=localhost;dbname=guestbook";
$user ="root";
$password= "";

$pdo = new PDO($dsn, $user, $password);

$username = $_POST["username"];
$comment = $_POST["comment"];


$sql ="INSERT INTO entries (username, comment) VALUES(:username_IN, :comment_IN)";
$stm = $pdo->prepare($sql);
$stm ->bindParam(':username_IN', $username);
$stm ->bindParam(':comment_IN', $comment);


if($stm->execute()){
    header("location:loggedin.php");
    
}

else{
    echo "Något gick fel!";
}

