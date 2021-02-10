<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="ovningar.php" method="POST">
<input type="text" name="email">
<input type="submit" name="submit">
</form>
<!-- <form action ="ovningar.php" method="POST">
<input type="text" name="favoriteFood1">
<input type="text" name="favoriteFood2">
<input type="text" name="favoriteFood3">
<input type="submit" value="AddFavorite"> -->

<!-- <form action="ovningar.php" method="POST">
<input type="number" name="number1">
<select name="method" id="method">
<option value="multiply">*</option>
<option value="substract">-</option>
<option value="divide">/</option>
<option value="add">+</option>

</select>

<input type="number" name="number2">
<input type="submit" name="calcutlate">


$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$method = $_POST["method"];

if($method == "multiply"){
    echo $number1 * $number2;
} -->



<?php
$email = $_POST["email"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>



</body>
</html>