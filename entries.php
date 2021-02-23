
<?php


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
<br>
<form method="POST" action="handleEntries.php">
<input type ="text" placeholder="Insert name..." name="name" /><br>
<input type="text"  placeholder="Insert email..." name="email" /><br>
<textarea placeholder="Your Message" name="message"></textarea><br>
<input type="submit" value="Send!"/>
</form>

<form method="GET" action="handleRemove.php">
    Write your ID to remove above from the database. <br/>
    <input type="number" placeholder="Insert ID..." name="id">
    <input type="submit" value="Remove entry">
</form>


    <form method="GET" action="handleEdit.php"><br>
    Choose comment id to update the message! <br/>
    <input type="number" placeholder="Insert ID..." name="id"> <br>
    New message:<br><input type="text" placeholder="Message" name="newMessage">
    <input type="submit" value="Edit entry">
    </form>


<!-- print_r ($stm->fetch()); -->