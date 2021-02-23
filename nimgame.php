<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
print_r($_POST);
$sticks = 21;
$playerTurn = 1;

if(!empty($_POST["numSticks"])){

$sticks = $_POST["numSticks"];
}

if(!empty($_POST["turn"])){
    if ($_POST["turn"] == 1) {
        $playerTurn = 2;
    }
    else {
        $playerTurn = 1;
    }
}


$sticks = $sticks - $_POST["sticksToDraw"];

?>
<h2>Sticks: <?=$sticks?></h2>
<form method="POST" action="nimgame.php">
<h3>It's player <?=$playerTurn?>'s turn!</h3>
<select name="sticksToDraw">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>

<input type="submit" value="Take" />
<input type="hidden" name="numSticks" value="<?php echo $sticks; ?>" />
<input type="hidden" name="turn" value="<?php echo $playerTurn; ?>" />


</form>
</body>
</html>