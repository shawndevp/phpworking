<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <pre>
 <form action="htmlphp.php" method="POST">
 <textarea placeholder="Write text and change it with checkboxes" name="textarea"></textarea>
 <input type="radio" name="alternatives" value="HTMLentities">HTMLentities
 <input type="radio" name="alternatives" value="striptags">strip_tags
 <input type="radio" name="alternatives" value="explode">explode
 <input type="radio" name="alternatives" value="strwordcount">str_word_count
 <input type="radio" name="alternatives" value="strlen">strlen
 <input type="radio" name="alternatives" value="crypt">crypt
 <input type="submit" value="execute">
 </form>
 </pre>
 
 <pre>
 <?php 
 
 $chosen = $_POST["alternatives"];
 
 $salt = "ahshdahsa";
 
 if($chosen === "HTMLentities") {
 echo htmlentities($_POST["textarea"]);
 }
 else if ($chosen === "striptags") {
 echo strip_tags($_POST["textarea"]);
 }
 else if ($chosen === "explode") {
 $pieces = explode(" ",$_POST["textarea"]);
 print_r($pieces);
 }
 else if ($chosen === "strwordcount") {
 print_r(str_word_count($_POST["textarea"],1, "åäö"));
 }
 else if ($chosen === "strlen") {
 echo strlen($_POST["textarea"]);
 }
 else if ($chosen === "crypt") {
 echo crypt($_POST["textarea"], $salt);
 }
 
 
 ?>
 </pre>
 
 
 
</body>
</html