<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="nim.php" method="POST">
How many sticks do you want to take?:
<select name="player1" id="player1">
<option value="1">1 stick</option>
<option value="2">2 sticks</option>
<option value="3">3 sticks</option>
</select>
<input type="submit" value="player 1 takes sticks">
</form>
<form action="nim.php" method="POST">
How many sticks do you want to take?:
<select name="player2" id="player2">
<option value="1 stick">1 stick</option>
<option value="2 sticks">2 sticks</option>
<option value="3 sticks">3 sticks</option>
</select>
<input type="submit" value="player 2 takes sticks">
</form>
<pre>
<?php
$sticks = 21;
print_r($_POST);
echo $_POST["player1"];
if($_POST["player1"] === 1) {​​​​​
$sticks -= $_POST["player1"];
echo $sticks;
}​​​​​
else if ($_POST["player1"] === 2) {​​​​​
$sticks -= $_POST["player1"];
echo $sticks;
}​​​​​
else if ($_POST["player1"] === 3) {​​​​​
$sticks -= $_POST["player1"];
echo $sticks;
}​​​​​
?>
</pre>
</body>
</html>