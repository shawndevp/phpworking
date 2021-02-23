<?php 
session_start();

if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
  echo '<h1>Welcome '.$_SESSION['sess_name'].'</h1>';
  echo '<h4><a href="logout.php">Logout</a></h4>';
} else { 
  echo "Vänligen logga in igen <a href='login.php'>login</a>";
  die();
}

$dsn = "mysql:host=localhost;dbname=uppgift";
$user ="root";
$password= "";

$pdo = new PDO($dsn, $user, $password);

echo "<h2>Users!</h2>";

$stm = $pdo->query("SELECT id, name, email, message FROM entries");

while($row = $stm->fetch()){
     echo $row ["id"] . " Namn" . ": " . $row["name"] . "." . " " . "Email: " . $row["email"] . "." . " ". "Meddelande: " . $row["message"] . "<br/> ";
 }


?>