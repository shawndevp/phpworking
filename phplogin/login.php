<?php
session_start();
include("db.php");
?>
<?php
$msg ="";
if (isset($_POST["loginBtn"])) {
    
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if($username != "" && $password != ""){
        try{
            $query = "select * from `users` where `username`=:username_IN and `password`=:password_IN"
            $stmt = $db->prepare($query);
            $stmt->bindParam('username_IN', $username);
            $stmt->bindValue('password_IN', $password);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {
        /******************** Your code ***********************/
            $_SESSION['sess_user_id']   = $row['id'];
            $_SESSION['sess_user_name'] = $row['username'];
            $_SESSION['sess_name'] = $row['name'];
        }
        else {
            $msg = "Invalid username and password!";
        }
        catch (PDOexception $e) {
            echo "Error : ".$e->getMessage();
        }
    }
}
    else {
    $msg = "Both fields are required!";
}
}

?>


<form method="POST" action="login.php">
<input type="text" placeholder="Insert Username..." name="username"><br>
<input type="password" placeholder="Insert Password..." name="password"><br>
<input type="submit" value="Login!" name="loginBtn">
</form>