<?php


$dsn = "mysql:host=localhost;dbname=community";
$user ="root";
$password= "";

$pdo = new PDO($dsn, $user, $password);

echo "<h2>Users!</h2>";

$stm = $pdo->query("SELECT id, name, email, password FROM users");
print_r($stm->fetch());
while($row = $stm->fetch()){
    echo $row ["id"] . " " . $row["name"] . " " . $row["email"] . " " . $row["password"] . " ";
}

echo "<h2>Sign up!</h2>";
?>
<form method="POST" action="handleSignup.php">
<input type ="text" placeholder="Insert name..." name="name" /><br>
<input type="text"  placeholder="Insert email..." name="email" /><br>
<input type="password"  placeholder="password" name="password" /><br>
<input type="submit" value="Sign up!"/>
</form>



// print_r ($stm->fetch());