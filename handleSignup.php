
<?php 

$dsn = "mysql:host=localhost;dbname=community";
$user ="root";
$password= "";

$pdo = new PDO($dsn, $user, $password);

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];


$sql ="INSERT INTO users (name, email, password) VALUES(:name_IN, :email, :password_IN)";
$stm = $pdo->prepare($sql);
$stm ->bindParam(":name_IN, $name");
$stm ->bindParam(":email_IN, $email");
$stm ->bindParam(":paswword_IN, $password");
$stm ->execute();

if ($stm->exectue() {
    echo "användaren registrerades!";
    else {
        echo "Något gick fel!";
    }
}


